const hamburger = document.querySelector(".burger");
const navMenu = document.querySelector(".nav__menu");
hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("active");
  navMenu.classList.toggle("active");
})

document.querySelectorAll(".nav__link").forEach(n => n.addEventListener("click", () => {
  hamburger.classList.remove("active");
  navMenu.classList.remove("active");
}))

document.addEventListener("keydown", function(e){
    if(hamburger.classList.contains('active')){
        if(e.code=='Escape'){
            console.log(e.code);
            hamburger.classList.remove("active");
            navMenu.classList.remove("active");
        }
    }

})
