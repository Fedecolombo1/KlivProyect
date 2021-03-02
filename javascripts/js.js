window.addEventListener("load", function(){

    $(document).ready(function() {
      //Set the carousel options
      $('#quote-carousel').carousel({
        pause: true,
        interval: 5000,
      });
    });
    
    document.getElementById("flecha1").addEventListener("click", function(){
        document.querySelector("#flecha1 .st0").style = "fill: #003629 !important"
        document.querySelector("#flecha2 .st0").style = "fill: #1D7A5F !important"
        document.querySelector("#flecha3 .st0").style = "fill: #1D7A5F !important"
        document.querySelector("#flecha4 .st0").style = "fill: #1D7A5F !important"

        document.getElementById("paso1txt").style = "color: #003629 !important"
        document.getElementById("paso2txt").style = "color: ##adadad !important"
        document.getElementById("paso3txt").style = "color: ##adadad !important"
        document.getElementById("paso4txt").style = "color: ##adadad !important"

        $("#conten20").fadeOut();
          $("#conten30").fadeOut();
          $("#conten40").fadeOut();
          $("#conten10").fadeIn();
          document.getElementById("content20").style.display = "none"
          document.getElementById("content30").style.display = "none"
          document.getElementById("content40").style.display = "none"
          document.getElementById("content10").style.display = "flex"
    })
    document.getElementById("flecha2").addEventListener("click", function(){
        document.querySelector("#flecha2 .st0").style = "fill: #003629 !important"
        document.querySelector("#flecha1 .st0").style = "fill: #1D7A5F !important"
        document.querySelector("#flecha3 .st0").style = "fill: #1D7A5F !important"
        document.querySelector("#flecha4 .st0").style = "fill: #1D7A5F !important"

        document.getElementById("paso2txt").style = "color: #003629 !important"
        document.getElementById("paso1txt").style = "color: ##adadad !important"
        document.getElementById("paso3txt").style = "color: ##adadad !important"
        document.getElementById("paso4txt").style = "color: ##adadad !important"

        
          $("#conten10").fadeOut();
          $("#conten30").fadeOut();
          $("#conten40").fadeOut();
          $("#conten20").fadeIn();
          document.getElementById("content10").style.display = "none"
          document.getElementById("content30").style.display = "none"
          document.getElementById("content40").style.display = "none"
          document.getElementById("content20").style.display = "flex"
          
      
    })
    document.getElementById("flecha3").addEventListener("click", function(){
        document.querySelector("#flecha3 .st0").style = "fill: #003629 !important"
        document.querySelector("#flecha2 .st0").style = "fill: #1D7A5F !important"
        document.querySelector("#flecha1 .st0").style = "fill: #1D7A5F !important"
        document.querySelector("#flecha4 .st0").style = "fill: #1D7A5F !important"

        document.getElementById("paso3txt").style = "color: #003629 !important"
        document.getElementById("paso2txt").style = "color: ##adadad !important"
        document.getElementById("paso1txt").style = "color: ##adadad !important"
        document.getElementById("paso4txt").style = "color: ##adadad !important"

        
          $("#conten20").fadeOut();
          $("#conten10").fadeOut();
          $("#conten40").fadeOut();
          $("#conten30").fadeIn();
          document.getElementById("content20").style.display = "none"
          document.getElementById("content10").style.display = "none"
          document.getElementById("content40").style.display = "none"
          document.getElementById("content30").style.display = "flex"
          
  
    })
    document.getElementById("flecha4").addEventListener("click", function(){
        document.querySelector("#flecha4 .st0").style = "fill: #003629 !important"
        document.querySelector("#flecha2 .st0").style = "fill: #1D7A5F !important"
        document.querySelector("#flecha3 .st0").style = "fill: #1D7A5F !important"
        document.querySelector("#flecha1 .st0").style = "fill: #1D7A5F !important"

        document.getElementById("paso4txt").style = "color: #003629 !important"
        document.getElementById("paso2txt").style = "color: ##adadad !important"
        document.getElementById("paso3txt").style = "color: ##adadad !important"
        document.getElementById("paso1txt").style = "color: ##adadad !important"

        
          $("#conten20").fadeOut();
          $("#conten30").fadeOut();
          $("#conten10").fadeOut();
          $("#conten40").fadeIn();
          document.getElementById("content20").style.display = "none"
          document.getElementById("content30").style.display = "none"
          document.getElementById("content10").style.display = "none"
          document.getElementById("content40").style.display = "flex"
        

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
