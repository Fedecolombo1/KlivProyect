window.addEventListener("load", function(){
    var emp = document.querySelector("button.col-3.btn2.emp")
    var age = document.querySelector("button.col-3.btn2.age")
    var divEmp = document.getElementById("empresa")
    var divAge = document.getElementById("agencia")

    age.addEventListener("click", function(){
        divEmp.classList.remove("abierto")
        divEmp.classList.add("cerrado")
        divAge.classList.remove("cerrado")
        divAge.classList.add("abierto")
        
    })
    emp.addEventListener("click", function(){
        if (divEmp.style.display === "none") {
          divEmp.style.display = "block";
        } else {
          divEmp.style.display = "block";
        }
    })
})

