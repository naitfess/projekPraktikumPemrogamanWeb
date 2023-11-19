document.querySelector("#show-create").addEventListener("click", function () {
  document.querySelector(".create-popup-bg").classList.add("active");
});

document.querySelector("#close-create").addEventListener("click", function () {
  document.querySelector(".create-popup-bg").classList.remove("active");
});
