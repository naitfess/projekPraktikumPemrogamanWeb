window.addEventListener("scroll", function () {
  if (document.documentElement.scrollTop > 20) {
    document
      .querySelector(".navbar.navbar-expand-lg.fixed-top.py-4")
      .classList.add("active");
  } else {
    document
      .querySelector(".navbar.navbar-expand-lg.fixed-top.py-4")
      .classList.remove("active");
  }
});
