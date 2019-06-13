let hide = document.querySelector(" aside .form");
if (hide != null) {
  hide.classList.add("hide");
  document.querySelector(".login").addEventListener("click", function() {
    hide.classList.toggle("hide");
  });
}

let aside = document.querySelector("aside");
let burger = document.querySelector(".top > i");
burger.addEventListener("click", function() {
  aside.classList.toggle("show");
});
