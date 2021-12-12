
$(document).ready(function(){

const navbar = document.querySelector("#nav");
const navBtn = document.querySelector("#nav-btn");
const closeBtn = document.querySelector("#close-btn");
const sidebar = document.querySelector("#sidebar");
const date = document.querySelector("#date");
const closeSidebar = document.querySelector(".closeSidebar");
const closeSidebar1 = document.querySelector(".closeSidebar1")

closeSidebar.addEventListener("click", function(){
  sidebar.classList.remove("show-sidebar");
})
closeSidebar1.addEventListener("click", function(){
  sidebar.classList.remove("show-sidebar");
})

// add fixed class to navbar
window.addEventListener("scroll",  ()=>{
  if (window.pageYOffset > 80) {
    navbar.classList.add("navbar-fixed");
  } else {   
    navbar.classList.remove("navbar-fixed");
  }
});
// show sidebar
navBtn.addEventListener("click", ()=> {
  sidebar.classList.add("show-sidebar");
});
closeBtn.addEventListener("click", ()=> {
  sidebar.classList.remove("show-sidebar");
});
// set year
date.innerHTML = new Date().getFullYear();

//Intro fade in

// $("#hi").fadeIn(3000);
// $("#comma").fadeIn(6000);
// $("#me").fadeIn(7000);
// $("#webdev").fadeIn(8000);
// $(".social-icon").fadeIn(9000);
//$(".section-about").
});