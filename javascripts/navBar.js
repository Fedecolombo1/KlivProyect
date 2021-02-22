window.addEventListener("load", function(){
    
    document.getElementById("flecha1").addEventListener("click", function(){
        document.querySelector("#flecha1 .st0").style = "fill: #003629"
        document.querySelector("#flecha2 .st0").style = "fill: #1D7A5F"
        document.querySelector("#flecha3 .st0").style = "fill: #1D7A5F"
        document.querySelector("#flecha4 .st0").style = "fill: #1D7A5F"

        document.getElementById("paso1txt").style = "color: #003629"
        document.getElementById("paso2txt").style = "color: ##adadad"
        document.getElementById("paso3txt").style = "color: ##adadad"
        document.getElementById("paso4txt").style = "color: ##adadad"
    })
    document.getElementById("flecha2").addEventListener("click", function(){
        document.querySelector("#flecha2 .st0").style = "fill: #003629"
        document.querySelector("#flecha1 .st0").style = "fill: #1D7A5F"
        document.querySelector("#flecha3 .st0").style = "fill: #1D7A5F"
        document.querySelector("#flecha4 .st0").style = "fill: #1D7A5F"

        document.getElementById("paso2txt").style = "color: #003629"
        document.getElementById("paso1txt").style = "color: ##adadad"
        document.getElementById("paso3txt").style = "color: ##adadad"
        document.getElementById("paso4txt").style = "color: ##adadad"
    })
    document.getElementById("flecha3").addEventListener("click", function(){
        document.querySelector("#flecha3 .st0").style = "fill: #003629"
        document.querySelector("#flecha2 .st0").style = "fill: #1D7A5F"
        document.querySelector("#flecha1 .st0").style = "fill: #1D7A5F"
        document.querySelector("#flecha4 .st0").style = "fill: #1D7A5F"

        document.getElementById("paso3txt").style = "color: #003629"
        document.getElementById("paso2txt").style = "color: ##adadad"
        document.getElementById("paso1txt").style = "color: ##adadad"
        document.getElementById("paso4txt").style = "color: ##adadad"
    })
    document.getElementById("flecha4").addEventListener("click", function(){
        document.querySelector("#flecha4 .st0").style = "fill: #003629"
        document.querySelector("#flecha2 .st0").style = "fill: #1D7A5F"
        document.querySelector("#flecha3 .st0").style = "fill: #1D7A5F"
        document.querySelector("#flecha1 .st0").style = "fill: #1D7A5F"

        document.getElementById("paso4txt").style = "color: #003629"
        document.getElementById("paso2txt").style = "color: ##adadad"
        document.getElementById("paso3txt").style = "color: ##adadad"
        document.getElementById("paso1txt").style = "color: ##adadad"
    })

    document.getElementById("icono45").addEventListener("click", function(){
        document.getElementById("icono45").classList.toggle("fa-cerrado")
          document.getElementById("icono45").classList.toggle("fa-abierto")
      })
      document.getElementById("icono46").addEventListener("click", function(){
        document.getElementById("icono46").classList.toggle("fa-cerrado")
          document.getElementById("icono46").classList.toggle("fa-abierto")
      })
      document.getElementById("icono47").addEventListener("click", function(){
        document.getElementById("icono47").classList.toggle("fa-cerrado")
          document.getElementById("icono47").classList.toggle("fa-abierto")
      })
      document.getElementById("icono48").addEventListener("click", function(){
        document.getElementById("icono48").classList.toggle("fa-cerrado")
          document.getElementById("icono48").classList.toggle("fa-abierto")
      })
      document.getElementById("icono49").addEventListener("click", function(){
        document.getElementById("icono49").classList.toggle("fa-cerrado")
          document.getElementById("icono49").classList.toggle("fa-abierto")
      })
      document.getElementById("icono50").addEventListener("click", function(){
        document.getElementById("icono50").classList.toggle("fa-cerrado")
          document.getElementById("icono50").classList.toggle("fa-abierto")
      })
      document.getElementById("icono51").addEventListener("click", function(){
        document.getElementById("icono51").classList.toggle("fa-cerrado")
          document.getElementById("icono51").classList.toggle("fa-abierto")
      })
      document.getElementById("icono52").addEventListener("click", function(){
        document.getElementById("icono52").classList.toggle("fa-cerrado")
          document.getElementById("icono52").classList.toggle("fa-abierto")
      })
      document.getElementById("icono53").addEventListener("click", function(){
        document.getElementById("icono53").classList.toggle("fa-cerrado")
          document.getElementById("icono53").classList.toggle("fa-abierto")
      })
    

})
