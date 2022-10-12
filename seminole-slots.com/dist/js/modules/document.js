document.addEventListener("click",function(e) {
  if(e.target.closest(".popup__exit")) {
    document.querySelector(".popup").classList.remove("popup-active")
  }
})