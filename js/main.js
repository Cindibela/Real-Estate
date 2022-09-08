const nav = document.querySelector(".navlink")
const html = document.querySelector("html")

function navOpen(){
    nav.style.right = "0"
    html.style.overflowY = "hidden"
}

function closeNav(){
    nav.style.right = "-500px"
    html.style.overflowY = "scroll"
}
