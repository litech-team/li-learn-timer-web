module.exports = {
  "setupFilesAfterEnv": [
    "<rootDir>/jest.setup.js"
  ],
  "transform": {
    "^.+\\.js?$": ["esbuild-jest", { sourcemap: true, target: "esnext" }],
    "^.+\\.jsx?$": ["esbuild-jest", { sourcemap: true, target: "esnext" }],
    "^.+\\.ts?$": ["esbuild-jest", { sourcemap: true, target: "esnext" }],
    "^.+\\.tsx?$": ["esbuild-jest", { sourcemap: true, target: "esnext" }],
  }
}