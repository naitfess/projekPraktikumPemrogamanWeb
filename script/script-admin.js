document.querySelector("#req").addEventListener("click", function () {
    document.querySelector(".newdonate").classList.add("active"),
    document.querySelector(".donor").classList.remove("active"),
    document.querySelector(".volunteer").classList.remove("active"),
    document.querySelector(".req.nav-link.text-dark.font-2").classList.add("active"),
    document.querySelector(".don.nav-link.text-dark.font-2").classList.remove("active"),
    document.querySelector(".vol.nav-link.text-dark.font-2").classList.remove("active")
  });
document.querySelector("#don").addEventListener("click", function () {
    document.querySelector(".donor").classList.add("active")
    document.querySelector(".newdonate").classList.remove("active"),
    document.querySelector(".volunteer").classList.remove("active"),
    document.querySelector(".don.nav-link.text-dark.font-2").classList.add("active"),
    document.querySelector(".req.nav-link.text-dark.font-2").classList.remove("active"),
    document.querySelector(".vol.nav-link.text-dark.font-2").classList.remove("active")
  });
document.querySelector("#vol").addEventListener("click", function () {
    document.querySelector(".volunteer").classList.add("active")
    document.querySelector(".newdonate").classList.remove("active"),
    document.querySelector(".donor").classList.remove("active"),
    document.querySelector(".vol.nav-link.text-dark.font-2").classList.add("active"),
    document.querySelector(".req.nav-link.text-dark.font-2").classList.remove("active"),
    document.querySelector(".don.nav-link.text-dark.font-2").classList.remove("active")
  });

  