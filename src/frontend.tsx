import ReactDOM from "react-dom"
import { UserView } from "./components/FrontendView"

const divsToUpdate = document.querySelectorAll(".boilerplate-update-me")

divsToUpdate.forEach(div => {
  const data = JSON.parse(div.querySelector("pre")?.innerText ?? "")
  ReactDOM.render(<UserView {...data} />, div)
  div.classList.remove("boilerplate-update-me")
})
