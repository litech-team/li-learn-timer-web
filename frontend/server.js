const fs = require("fs")
const path = require("path")

const express = require("express")
const server = express()

server.set('views', __dirname)
server.set("view engine", "ejs")

server.get('/favicon.ico', (req, res) => {
  res.status(204)
})

server.get("/*", function (req, res) {
  const { dir, name } = path.parse(req.originalUrl)

  let script;
  try {
    const scriptPath = `./.__cache__${dir}/${name}.js`
    script = fs.readFileSync(scriptPath, "utf-8")
  } catch (err) {
    if (err.code === 'ENOENT') {
      res.status(404)
      res.end('404 Not Found')
      return
    } else {
      throw err
    }
  }

  let mock;
  try {
    const mockPath = `./.__cache__${dir}/${name}.mock.json`
    mock = fs.readFileSync(mockPath, "utf-8")
  } catch (err) {
    if (err.code === 'ENOENT') {
      mock = "null"
    } else {
      throw err
    }
  }

  res.render("./default.ejs", { script, mock })
})

module.exports = server
