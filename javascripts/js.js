window.addEventListener("load", function(){

    window.scroll(0, 0)
    $(document).ready(function() {
      //Set the carousel options
      $('#quote-carousel').carousel({
        pause: true,
        interval: 5000,
      });
    });

    $("#age").click(function(){
                                
      
      document.getElementById("agencia").style.position = "relative"
      
  });

    document.querySelector(".aSec").addEventListener("click", function(){
      quit()
    })
    
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
        document.getElementById("iicono45").classList.toggle("fa-cerrado")
          document.getElementById("iicono45").classList.toggle("fa-abierto")
      })
      document.getElementById("icono46").addEventListener("click", function(){
        document.getElementById("iicono46").classList.toggle("fa-cerrado")
          document.getElementById("iicono46").classList.toggle("fa-abierto")
      })
      document.getElementById("icono47").addEventListener("click", function(){
        document.getElementById("iicono47").classList.toggle("fa-cerrado")
          document.getElementById("iicono47").classList.toggle("fa-abierto")
      })
      document.getElementById("icono48").addEventListener("click", function(){
        document.getElementById("iicono48").classList.toggle("fa-cerrado")
          document.getElementById("iicono48").classList.toggle("fa-abierto")
      })
      document.getElementById("icono49").addEventListener("click", function(){
        document.getElementById("iicono49").classList.toggle("fa-cerrado")
          document.getElementById("iicono49").classList.toggle("fa-abierto")
      })
      document.getElementById("icono50").addEventListener("click", function(){
        document.getElementById("iicono50").classList.toggle("fa-cerrado")
          document.getElementById("iicono50").classList.toggle("fa-abierto")
      })
      document.getElementById("icono51").addEventListener("click", function(){
        document.getElementById("iicono51").classList.toggle("fa-cerrado")
          document.getElementById("iicono51").classList.toggle("fa-abierto")
      })
      document.getElementById("icono52").addEventListener("click", function(){
        document.getElementById("iicono52").classList.toggle("fa-cerrado")
          document.getElementById("iicono52").classList.toggle("fa-abierto")
      })
      document.getElementById("icono53").addEventListener("click", function(){
        document.getElementById("iicono53").classList.toggle("fa-cerrado")
          document.getElementById("iicono53").classList.toggle("fa-abierto")
      })
    


      document.getElementById("ars").addEventListener("click", function(){
        document.getElementById("pesos1").style.display = "inline"
        document.getElementById("dolares1").style.display = "none"
        document.getElementById("arss").style.display = "inline"
        document.getElementById("dolaress1").style.display = "none"
        document.getElementById("ars").style.textDecoration = "underline"
        document.getElementById("usd").style.textDecoration = "none"
        document.getElementById("ars").style.color = "#003629"
        document.getElementById("usd").style.color = "#2D2D2D"
      })
      document.getElementById("usd").addEventListener("click", function(){
          document.getElementById("pesos1").style.display = "none"
          document.getElementById("arss").style.display = "none"
          document.getElementById("dolares1").style.display = "inline"
          document.getElementById("dolaress1").style.display = "inline"
          document.getElementById("usd").style.textDecoration = "underline"
          document.getElementById("ars").style.textDecoration = "none"
          document.getElementById("ars").style.color = "#2D2D2D"
          document.getElementById("usd").style.color = "#003629"
      })
      document.getElementById("ars2").addEventListener("click", function(){
        document.getElementById("pesos2").style.display = "inline"
        document.getElementById("dolares2").style.display = "none"
        document.getElementById("arss2").style.display = "inline"
        document.getElementById("dolaress2").style.display = "none"
        document.getElementById("ars2").style.textDecoration = "underline"
        document.getElementById("usd2").style.textDecoration = "none"
        document.getElementById("ars2").style.color = "#003629"
        document.getElementById("usd2").style.color = "#2D2D2D"
      })
      document.getElementById("usd2").addEventListener("click", function(){
          document.getElementById("pesos2").style.display = "none"
          document.getElementById("dolares2").style.display = "inline"
          document.getElementById("arss2").style.display = "none"
          document.getElementById("dolaress2").style.display = "inline"
          document.getElementById("usd2").style.textDecoration = "underline"
          document.getElementById("ars2").style.textDecoration = "none"
          document.getElementById("ars2").style.color = "#2D2D2D"
          document.getElementById("usd2").style.color = "#003629"
      })
      document.getElementById("ars3").addEventListener("click", function(){
        document.getElementById("pesos3").style.display = "inline"
        document.getElementById("dolares3").style.display = "none"
        document.getElementById("arss3").style.display = "inline"
        document.getElementById("dolaress3").style.display = "none"
        document.getElementById("ars3").style.textDecoration = "underline"
        document.getElementById("usd3").style.textDecoration = "none"
        document.getElementById("ars3").style.color = "#003629"
        document.getElementById("usd3").style.color = "#2D2D2D"
      })
      document.getElementById("usd3").addEventListener("click", function(){
          document.getElementById("pesos3").style.display = "none"
          document.getElementById("dolares3").style.display = "inline"
          document.getElementById("arss3").style.display = "none"
          document.getElementById("dolaress3").style.display = "inline"
          document.getElementById("usd3").style.textDecoration = "underline"
          document.getElementById("ars3").style.textDecoration = "none"
          document.getElementById("ars3").style.color = "#2D2D2D"
          document.getElementById("usd3").style.color = "#003629"
      })
      document.getElementById("ars4").addEventListener("click", function(){
        document.getElementById("pesos4").style.display = "inline"
        document.getElementById("dolares4").style.display = "none"
        document.getElementById("arss4").style.display = "inline"
        document.getElementById("dolaress4").style.display = "none"
        document.getElementById("ars4").style.textDecoration = "underline"
        document.getElementById("usd4").style.textDecoration = "none"
        document.getElementById("ars4").style.color = "#003629"
        document.getElementById("usd4").style.color = "#2D2D2D"
        
      })
      document.getElementById("usd4").addEventListener("click", function(){
        document.getElementById("pesos4").style.display = "none"
        document.getElementById("dolares4").style.display = "inline"
        document.getElementById("arss4").style.display = "none"
        document.getElementById("dolaress4").style.display = "inline"
        document.getElementById("usd4").style.textDecoration = "underline"
        document.getElementById("ars4").style.textDecoration = "none"
        document.getElementById("ars4").style.color = "#2D2D2D"
        document.getElementById("usd4").style.color = "#003629"
      })
      // document.getElementById("ars5").addEventListener("click", function(){     
      //   document.getElementById("arss5").style.display = "inline"
      //   document.getElementById("dolaress5").style.display = "none"
      //   document.getElementById("ars5").style.textDecoration = "underline"
      //   document.getElementById("usd5").style.textDecoration = "none"
      // })
      // document.getElementById("usd5").addEventListener("click", function(){
      //     document.getElementById("arss5").style.display = "none"
      //     document.getElementById("dolaress5").style.display = "inline"
      //     document.getElementById("usd5").style.textDecoration = "underline"
      //     document.getElementById("ars5").style.textDecoration = "none"
      // })
      document.getElementById("ars6").addEventListener("click", function(){
        document.getElementById("arss6").style.display = "inline"
        document.getElementById("dolaress6").style.display = "none"
        document.getElementById("ars6").style.textDecoration = "underline"
        document.getElementById("usd6").style.textDecoration = "none"
        document.getElementById("ars6").style.color = "#003629"
        document.getElementById("usd6").style.color = "#2D2D2D"

      })
      document.getElementById("usd6").addEventListener("click", function(){
          
          document.getElementById("arss6").style.display = "none"
          document.getElementById("dolaress6").style.display = "inline"
          document.getElementById("usd6").style.textDecoration = "underline"
          document.getElementById("ars6").style.textDecoration = "none"
          document.getElementById("ars6").style.color = "#2D2D2D"
          document.getElementById("usd6").style.color = "#003629"
      })
      document.getElementById("ars7").addEventListener("click", function(){
        document.getElementById("arss7").style.display = "inline"
        document.getElementById("dolaress7").style.display = "none"
        document.getElementById("ars7").style.textDecoration = "underline"
        document.getElementById("usd7").style.textDecoration = "none"
        document.getElementById("ars6").style.color = "#003629"
        document.getElementById("usd6").style.color = "#2D2D2D"
      })
      document.getElementById("usd7").addEventListener("click", function(){
          
          document.getElementById("arss7").style.display = "none"
          document.getElementById("dolaress7").style.display = "inline"
          document.getElementById("usd7").style.textDecoration = "underline"
          document.getElementById("ars7").style.textDecoration = "none"
          document.getElementById("ars7").style.color = "#2D2D2D"
          document.getElementById("usd7").style.color = "#003629"
      })

      document.getElementById("ars8").addEventListener("click", function(){
        document.getElementById("arss8").style.display = "flex"
        document.getElementById("dolaress8").style.display = "none"
        document.getElementById("ars8").style.textDecoration = "underline"
        document.getElementById("usd8").style.textDecoration = "none"
        document.getElementById("ars8").style.color = "#003629"
        document.getElementById("usd8").style.color = "#2D2D2D"
      })
      document.getElementById("usd8").addEventListener("click", function(){
          document.getElementById("arss8").style.display = "none"
          document.getElementById("dolaress8").style.display = "flex"
          document.getElementById("usd8").style.textDecoration = "underline"
          document.getElementById("ars8").style.textDecoration = "none"
          document.getElementById("ars8").style.color = "#2D2D2D"
          document.getElementById("usd8").style.color = "#003629"
      })
      document.getElementById("ars9").addEventListener("click", function(){
        document.getElementById("arss9").style.display = "flex"
        document.getElementById("dolaress9").style.display = "none"
        document.getElementById("ars9").style.textDecoration = "underline"
        document.getElementById("usd9").style.textDecoration = "none"
        document.getElementById("ars9").style.color = "#003629"
        document.getElementById("usd9").style.color = "#2D2D2D"
      })
      document.getElementById("usd9").addEventListener("click", function(){
          document.getElementById("arss9").style.display = "none"
          document.getElementById("dolaress9").style.display = "flex"
          document.getElementById("usd9").style.textDecoration = "underline"
          document.getElementById("ars9").style.textDecoration = "none"
          document.getElementById("ars9").style.color = "#2D2D2D"
          document.getElementById("usd9").style.color = "#003629"
      })


      document.getElementById("icF1").addEventListener("click", function(){
          
        document.getElementById("precios1").style.display = "none"
        document.getElementById("info1").style.display = "inline"
        document.getElementById("icV1").style.display = "inline"
      })
      document.getElementById("icV1").addEventListener("click", function(){
        document.getElementById("icV1").style.display = "none"
        document.getElementById("precios1").style.display = "flex"
        document.getElementById("info1").style.display = "none"
      })

      document.getElementById("icF2").addEventListener("click", function(){
          
        document.getElementById("precios2").style.display = "none"
        document.getElementById("info2").style.display = "inline"
        document.getElementById("icV2").style.display = "inline"
      })
      document.getElementById("icV2").addEventListener("click", function(){
        document.getElementById("icV2").style.display = "none"
        document.getElementById("precios2").style.display = "flex"
        document.getElementById("info2").style.display = "none"
      })

      document.getElementById("icF3").addEventListener("click", function(){
          
        document.getElementById("precios3").style.display = "none"
        document.getElementById("info3").style.display = "inline"
        document.getElementById("icV3").style.display = "inline"
      })
      document.getElementById("icV3").addEventListener("click", function(){
        document.getElementById("icV3").style.display = "none"
        document.getElementById("precios3").style.display = "flex"
        document.getElementById("info3").style.display = "none"
      })

      document.getElementById("icF4").addEventListener("click", function(){
          
        document.getElementById("precios4").style.display = "none"
        document.getElementById("info4").style.display = "inline"
        document.getElementById("icV4").style.display = "inline"
      })
      document.getElementById("icV4").addEventListener("click", function(){
        document.getElementById("icV4").style.display = "none"
        document.getElementById("precios4").style.display = "flex"
        document.getElementById("info4").style.display = "none"
      })

      document.getElementById("icF5").addEventListener("click", function(){
          
        document.getElementById("precios5").style.display = "none"
        document.getElementById("info5").style.display = "inline"
        document.getElementById("icV5").style.display = "inline"
      })
      document.getElementById("icV5").addEventListener("click", function(){
        document.getElementById("icV5").style.display = "none"
        document.getElementById("precios5").style.display = "flex"
        document.getElementById("info5").style.display = "none"
      })

      document.getElementById("icF6").addEventListener("click", function(){
        document.getElementById("precios6").style.display = "none"
        document.getElementById("info6").style.display = "inline"
        document.getElementById("icV6").style.display = "inline"
      })
      document.getElementById("icV6").addEventListener("click", function(){
        document.getElementById("icV6").style.display = "none"
        document.getElementById("precios6").style.display = "flex"
        document.getElementById("info6").style.display = "none"
      })

      document.getElementById("icF7").addEventListener("click", function(){
          
        document.getElementById("precios7").style.display = "none"
        document.getElementById("info7").style.display = "inline"
        document.getElementById("icV7").style.display = "inline"
      })
      document.getElementById("icV7").addEventListener("click", function(){
        document.getElementById("icV7").style.display = "none"
        document.getElementById("precios7").style.display = "flex"
        document.getElementById("info7").style.display = "none"
      })
      
})


