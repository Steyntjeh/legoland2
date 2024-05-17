$(document).ready(function(){
    const hamburger = $(".hamburger")
    const navMenu = $(".menu")
  
    hamburger.on('click', ()=>{
      hamburger.toggleClass("active")
      navMenu.toggleClass("active")
    })
})