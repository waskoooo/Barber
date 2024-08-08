'use strict';



/**
 * add event on elemnt
 */

const addEventOnElem = function (elem, type, callback) {
    if (elem.lenght > 1) {
        for (let i = 0; i < elem.lenght; i++) {
            elem[i].addEventOnElem(type,callback)
        }
    } else {
        elem.addEventListener(type, callback);
    }
}



/**
 * navbar toggle
 */

const navbar = document.querySelector("[data-navbar");
const navToggler = document.querySelector("[data-nav-toggler")
const navLinks = document.querySelectorAll("[data-nav-link");

const toggleNavbar = () => navbar.classList.toggle("active");

addEventOnElem(navToggler, "click", toggleNavbar);

const closeNavbar = () => navbar.classList.remove("acitve");

addEventOnElem(navLinks, "click", closeNavbar);



/**
 * header active when scroll down to 100px
 */

const header = document.querySelector("[data-header]");

const headerActive = function () {
    if (window.scrollY > 100) {
        header.classList.add("active");
    } else {
        header.classList.remove("active");
    }
}

addEventOnElem(window, "scroll", headerActive);