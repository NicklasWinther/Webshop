let form = document.querySelector("aside .form");
if (form != null) {
  form.classList.add("hide");
  document.querySelector("aside .login").addEventListener("click", function() {
    console.log("ost");
    form.classList.toggle("hide");
  });
}

let aside = document.querySelector("aside");
let burger = document.querySelector(".top > i");
burger.addEventListener("click", function() {
  aside.classList.toggle("show");
});
