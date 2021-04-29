<?php

// require 'php/connection.php';

// // Traemos toda la data
// $sql = $pdo->prepare("SELECT * FROM pricing");
// $sql->execute(); 
// $pricings = $sql->fetchAll();


// // Traemos el dolar
// $sql = $pdo->prepare("SELECT * FROM dolar");
// $sql->execute(); 
// $dolar = $sql->fetch();

// $dolar = $dolar['dolar'];


// // Le agregamos el valor del dolar a los pricings
// foreach ($pricings as $key => $pricing) {
    
//     $ars_to_usd = $pricing['ars'] / $dolar;
//     $ars_to_usd = floor($ars_to_usd);

//     $pricings[$key]['usd'] = $ars_to_usd;

// }


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/882d6fd4b6.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

  <!-- Demo styles -->
  <style>
      @font-face{
            font-family:Product Sans;
            src: url(../slick/fonts/Product-Sans-Regular.ttf);
            font-weight: normal;
            font-style: normal;
        }
    html,
    body {
      position: relative;
      height: 100%;
      font-family:Product Sans;
      overflow: hidden;
    }

    body {
      background: #f4f4f4;
      padding-bottom: 1%;
    }
    .fa, .far, .fas {
    font-family: "Font Awesome 5 Free";
    }

    .swiper-container {
        width: 100%;
        height: 100%;
        cursor: -webkit-grab;
    }

    .swiper-slide {
      /* text-align: center; */
      /* font-size: 18px; */
      /* background: #fff; */

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      /* display: flex; */
      /* -webkit-box-pack: center; */
      /* -ms-flex-pack: center; */
      /* -webkit-justify-content: center; */
      /* justify-content: center; */
      /* -webkit-box-align: center; */
      /* -ms-flex-align: center; */
      /* -webkit-align-items: center; */
      /* align-items: center; */
      width: 40%;
    }

    .swiper-slide:nth-child(2n) {
      width: 40%;
    }

    .swiper-slide:nth-child(3n) {
      width: 20%;
    }
    .card{
        width: 100%;
        background: #fff;
        border-radius: 2%;
        border-left: 4px solid #1E7A5E;
        height: fit-content;
        margin: 5px;
        margin-bottom: 40px;
        box-shadow: 0px 8px 9px 0px rgb(0 0 0 / 26%);
        padding-bottom: 4%
    }
    .precio {
    text-align: center;
    margin-top: 30px;
    font-size: 26px;
    font-weight: bolder;
    color: #003629;
    margin-bottom: 0px;
}
.align2 {
    display: flex;
    align-items: center;
}
.desc {
    text-align: center;
    font-size: 16px;
    font-weight: 400;
    font-style: italic;
    color: #666;
    margin-top: 13px;
}
.ars{
    text-align: center;
    font-size: 16px;
    font-weight: bold;
    color: #003629;
    margin-top: 5px;
    padding: 0!important;
}
.usd {
    text-align: center;
    font-size: 16px;
    font-weight: bold;
    color: #2D2D2D;
    margin-top: 5px;
    padding: 0!important;
}
.botonStart {
    font-size: 17px;
    font-weight: 500;
    color: white;
    background: #1E7A5E;
    border: 1px solid #1E7A5E;
    border-radius: 4px;
    width: fit-content;
    padding: 9px 35px;
    display: block;
    margin: auto;
    font-family:Product Sans;
    margin-top: 10px;
    cursor: pointer;
}
.align3{
    display: flex;
    padding-right: 5%;
}
  </style>
</head>

<body>
  <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <article class="col-11 col-lg-5 card carousel-cell is-selected" style="position: absolute; left: 0%;">
            <div class="row align">
                    <div class="col-12 align3" style="justify-content: flex-end;">
                            <h1 id="icV6" class="fas fa-arrow-circle-left col-6" style="cursor: pointer !important;font-size: 16px;text-align: start;margin-top: 20px;margin-bottom: -5px;display: none;position:absolute; text-align: right;background:white;"></h1>
                            <h1 id="icF6" class="fas fa-info-circle col-6" style="cursor: pointer !important;font-size: 16px;text-align: end;margin-top: 20px;margin-bottom: -5px"><i style="text-align: end;margin-top: 20px;margin-bottom: -20px;font-size: 16px;cursor: pointer;"></i></h1>
                    </div>
                
                <div class="col-10 row" id="precios6">
                    
                    <h1 class="col-12 precio">PLAN FULL</h1>
                    <h1 id="arss6" class="col-12 precio"><strong style="font-size: 19px;font-weight: 400;"> Dsd</strong> <?php //echo $pricings[6]['ars'] ?> /<strong style="font-size: 19px;font-weight: 400;">mes </strong></h1>
                    <h1 id="dolaress6" class="col-12 precio" style="display: none;"><?php //echo $pricings[6]['usd'] ?> /<strong style="font-size: 19px;">mes </strong></h1>
                    <div class="col-12 align2" style="justify-content: center;">
                        <h1 style="cursor: pointer; text-decoration: underline" id="ars6" class="col-2 ars">ARS </h1>-<h1 style="cursor: pointer;" id="usd6" class="col-2 usd"> USD</h1>
                    </div>
                    <h1 class="col-12 desc">30% OFF / $ <?php //echo $pricings[6]['ars'] / 10 ?> c/u</h1>
                    <button class="botonStart col-8">Comenzar ahora</button>
                </div>
                <h1 id="info6" class="col-12 desc" style="display: none; padding: 5%"><?php //echo $pricings[6]['descripcion'] ?></h1>
            </div>
        </article>
      </div>
      <div class="swiper-slide">
            <article class="card carousel-cell card-width">
                <div class="row align">
                        <div class="col-12 align3" style="justify-content: flex-end;">
                            <h1 id="icV7" class="fas fa-arrow-circle-left col-6" style="cursor: pointer !important;font-size: 16px;text-align: start;margin-top: 20px;margin-bottom: -5px;display: none;position:absolute; text-align: right;background:white;"></h1>
                            <h1 id="icF7" class="fas fa-info-circle col-6" style="cursor: pointer !important;font-size: 16px;text-align: end;margin-top: 20px;margin-bottom: -5px"><i style="text-align: end;margin-top: 20px;margin-bottom: -20px;font-size: 16px;cursor: pointer;"></i></h1>
                        </div>
                    
                    <div class="col-10 row align" id="precios7">
                        <h1 class="col-12 precio">PLAN BÁSICO</h1>
                        <h1 id="arss7" class="col-12 precio"><strong style="font-size: 19px;font-weight: 400;"> Dsd</strong> $ <?php //echo $pricings[5]['ars'] ?> /<strong style="font-size: 19px;font-weight: 400;">mes </strong></h1>
                        <h1 id="dolaress7" class="col-12 precio" style="display: none;">$<?php //echo $pricings[5]['usd'] ?> /<strong style="font-size: 19px;">mes </strong></h1>
                        <div class="col-12 align2" style="justify-content: center;">
                            <h1 style="cursor: pointer; text-decoration: underline" id="ars7" class="col-2 ars">ARS </h1>-<h1 style="cursor: pointer;" id="usd7" class="col-2 usd"> USD</h1>
                        </div>
                        <h1 class="col-12 desc">50% OFF / $ <?php //echo $pricings[5]['ars'] / 10 ?> c/u</h1>
                        <button class="botonStart col-8">Comenzar ahora</button>
                        <h1 id="info7" class="col-12 desc" style="display: none;"><?php //echo $pricings[5]['descripcion'] ?></h1>
                    </div>
                    <h1 id="info7" class="col-12 desc" style="display: none;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas, officia nam? Doloribus officiis consequuntur blanditiis tempore quidem corrupti eius? Harum, quisquam ut omnis quaerat consequatur officiis tenetur eius eaque voluptatum?<?php //echo $pricings[5]['descripcion'] ?></h1>
                </div>
            </article>
      </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 'auto',
      centeredSlides: true,
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });


    document.getElementById("icF6").addEventListener("click", function(){
        document.getElementById("precios6").style.display = "none"
        document.getElementById("info6").style.display = "block"
        document.getElementById("icV6").style.display = "inline"
      })
      document.getElementById("icV6").addEventListener("click", function(){
        document.getElementById("icV6").style.display = "none"
        document.getElementById("precios6").style.display = "block"
        document.getElementById("info6").style.display = "none"
      })

      document.getElementById("icF7").addEventListener("click", function(){
          
        document.getElementById("precios7").style.display = "none"
        document.getElementById("info7").style.display = "block"
        document.getElementById("icV7").style.display = "inline"
      })
      document.getElementById("icV7").addEventListener("click", function(){
        document.getElementById("icV7").style.display = "none"
        document.getElementById("precios7").style.display = "block"
        document.getElementById("info7").style.display = "none"
      })
  </script>
</body>

</html>
