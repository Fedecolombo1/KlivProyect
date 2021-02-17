window.addEventListener("load", function(){
    var navbar = document.querySelector("nav.mobile.cerrado")
    var iconoBars = document.querySelector("i.fas.fa-bars")
    var iconoC = document.querySelector("i.fab.fa-mixer")
    var aSec1 = document.querySelector("a.link.aSec1")
    var aSec2 = document.querySelector("a.link.aSec2")
    var aSec3 = document.querySelector("a.link.aSec3")
    var aSec4 = document.querySelector("a.link.aSec4")
    var aSec5 = document.querySelector("a.link.aSec5")

    iconoBars.addEventListener("click", function(){
        iconoBars.classList.toggle("celeste")
        navbar.classList.toggle("abierto")
    })   

    aSec1.addEventListener("click", function(){
        navbar.classList.remove("abierto")
    })
    aSec2.addEventListener("click", function(){
        navbar.classList.remove("abierto")
    })
    aSec3.addEventListener("click", function(){
        navbar.classList.remove("abierto")
    })
    aSec4.addEventListener("click", function(){
        navbar.classList.remove("abierto")
    })
    aSec5.addEventListener("click", function(){
        navbar.classList.remove("abierto")
    })

})
