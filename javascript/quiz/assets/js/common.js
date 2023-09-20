// hljs.highlightAll();

// modal
const modalBtn = document.querySelector(".modal__btn");
const madalClose = document.querySelector(".modal__close");
const modalCont = document.querySelector(".modal__cont");

// 소스보기 버튼
modalBtn.addEventListener("click", () => {
    modalCont.classList.add("show");
    modalCont.classList.remove("hide");
});

// 소스보기 닫기버튼
madalClose.addEventListener("click", () => {
    modalCont.classList.add("hide");
});