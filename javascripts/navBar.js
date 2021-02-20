window.addEventListener("load", function(){
    var navbar = document.querySelector("nav.mobile.cerrado")
    var iconoBars = document.querySelector("i.fas.fa-bars")
    var iconoC = document.querySelector("i.fab.fa-mixer")
    var aSec1 = document.querySelector("a.link.aSec1")
    var aSec2 = document.querySelector("a.link.aSec2")
    var aSec3 = document.querySelector("a.link.aSec3")
    var aSec4 = document.querySelector("a.link.aSec4")
    var aSec5 = document.querySelector("a.link.aSec5")

    var info = document.querySelector("div.saberMas.cerrado")
    var saberBtn = document.getElementById(btn1)
    var saberBtn2 = document.querySelector("button.col-7.btnS2")

    saberBtn.addEventListener("click", function(){
        info.classList.toggle("abierto")
    })

    saberBtn2.addEventListener("click", function(){
        info.classList.toggle("abierto")
    })



    

})
