
// 메뉴
let header = document.querySelector("#header");
let nav = document.querySelector("#nav");
let hamMenu = document.querySelector("#header .header__ham");
let hamShape = document.querySelector("#header .header__ham div");

function showNav(){
    nav.style.height = "360px";
    hamShape.classList.add("hamX");
    hamShape.classList.remove("ham");
};
function hideNav(){
    nav.style.height = "0";
    hamShape.classList.add("ham");
    hamShape.classList.remove("hamX");
};

hamMenu.addEventListener("mouseover", showNav);
hamMenu.addEventListener("mouseout", hideNav);

nav.addEventListener("mouseover", showNav);
nav.addEventListener("mouseout", hideNav);