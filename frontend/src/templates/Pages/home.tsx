import React from "react"
import ReactDOM from "react-dom"

console.log("Hello World from home page!")

const Page = () => {
  return (
    <>
      <h1>Welcome! This is home page</h1>
      <p>{JSON.stringify(window.$data)}</p>
    </>
  )
}

ReactDOM.render(<Page />, document.getElementById("app"))