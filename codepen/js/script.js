/**
 * index.js
 * - All our useful JS goes here, awesome!
 */
 let menu = document.getElementById("js-menu");
 let navbarToggle = document.getElementById("js-navbar-toggle");
 navbarToggle.addEventListener("click",function(){
     menu.classList.toggle("active");
 })
 
 /************************************************ */
 
 let navbar = document.getElementById("js-navbar");
 window.addEventListener('scroll',function(){
    if(window.pageYOffset>90){
     navbar.classList.add('navbar-strick');
   }else{
        navbar.classList.remove('navbar-strick');  
   }
 })
 /************************************************** */
 
 let btnTop = document.getElementById("js-btn-top");
 window.addEventListener("scroll",function(){
   if(document.body.scrollTop>150){
     btnTop.style.display="block"
   }else{
     btnTop.style.display="none"
   }
 
 })
 
 btnTop.addEventListener("click",function(){
  document.body.scrollTop=0;
 })
 
 