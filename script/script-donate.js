document.querySelector("#option-1").addEventListener("click", function () {
  const inputElement = document.getElementById("donate-amount");
  inputElement.value = 10;
});
document.querySelector("#option-2").addEventListener("click", function () {
  const inputElement = document.getElementById("donate-amount");
  inputElement.value = 20;
});
document.querySelector("#option-3").addEventListener("click", function () {
  const inputElement = document.getElementById("donate-amount");
  inputElement.value = 50;
});
document.querySelector("#option-4").addEventListener("click", function () {
  const inputElement = document.getElementById("donate-amount");
  inputElement.value = 100;
});
document.querySelector("#donate-amount").addEventListener("click", function () {
  document.querySelector("#custom").click();
});
