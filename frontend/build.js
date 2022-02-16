const esbuild = require('esbuild')
const alias = require('esbuild-plugin-alias')

const server = require("./server")

const fs = require('fs-extra')
const glob = require('glob')

let outdir
if (process.argv.includes("--server")) {
  outdir = "./.__cache__"
} else {
  outdir = "../webroot/js"
}

if (process.argv.includes("--server")) {
  // remove old dist dir
  fs.removeSync(outdir)
}

// build src
esbuild.build({
  entryPoints: glob.sync(
    "src/templates/**/*.@(js|ts|jsx|tsx)",
  ),

  outbase: './src/templates',
  outdir: outdir,

  bundle: true,
  minify: false,
  sourcemap: "inline",

  watch: process.argv.includes("--watch") ? {
    onRebuild: (error, result) => {
      if (!error && result) {
        console.log(
          `${new Date().toLocaleString()} watch build succeeded\n`
        )
      }
    }
  } : false,

  plugins: [
    alias({
      '@': `${__dirname}/src`,
      "react": require.resolve(`preact/compat`),
      "react-dom/test-utils": require.resolve(`preact/test-utils`),
      "react-dom": require.resolve(`preact/compat`),
    })
  ],
}).then(() => {
  console.log(`${new Date().toLocaleString()} build succeeded`)

  if (process.argv.includes("--server")) {
    const port = 8000
    server.listen(port)
    console.log(`listening at http://localhost:${port}`)
  }

  if (process.argv.includes("--watch")) console.log("")
}).catch(() => {
})


// copy static files
for (const path of glob.sync("@(src|public)/**/*.!(js|ts|jsx|tsx|d.ts|test.ts|test.js|mock.json)")) {
  fs.copySync(`./${path}`, path.replace(/(^src\/templates|^src|^public)\//gm, `${outdir}/`))
}


if (process.argv.includes("--server")) {
  // copy mock file
  for (const path of glob.sync("src/templates/**/*.@(mock.json)")) {
    fs.copySync(`./${path}`, path.replace(/(^src\/templates)\//gm, `${outdir}/`))
  }
}
