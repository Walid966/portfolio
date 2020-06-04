const nav = document.querySelector("header");
const navBar = document.querySelector(".nav");
const hamburger = document.querySelector(".hamburger");

// hide/show header onscroll
let previous = window.scrollY;
window.addEventListener("scroll", function () {
    if (window.scrollY > previous) {
        nav.style.top = "-64.64px";
    } else {
        nav.style.top = "0px";
    }

    if (window.scrollY > previous || window.scrollY < previous) {
        navBar.classList.remove("slide");

    }
    previous = window.scrollY;
});

// open/close nav bar on mobile devices
hamburger.addEventListener("click", function () {
    navBar.classList.toggle("slide");
});

// hide nav bar when clicking outside of it
main.addEventListener("click", function (e) {
    if (e.target.id !== "nav-link") {
        navBar.classList.remove("slide");
    }
});