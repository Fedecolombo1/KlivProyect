<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kliv</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel='stylesheet' href='./stylesheets/style.css' />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/882d6fd4b6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://egkoppel.github.io/product-sans/google-fonts.css"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.0/fullpage.css" integrity="sha512-hGBKkjAVJUXoImyDezOKpzuY4LS1eTvJ4HTC/pbxn47x5zNzGA1vi3vFQhhOehWLTNHdn+2Yqh/IRNPw/8JF/A==" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

    

    <link rel="stylesheet" href="./stylesheets/aos.scss">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->

</head>
<body>

    <header class="desk" id="inicio">
        <div class="container-fluid">
          <div class="row head align" style="justify-content: start;">
            
                <img class="col-5 logo12" src="./images/kliv-logo.png" alt="">
        
                <div class="col-7" style="display: flex;justify-content: center;align-items: center;">
                    <div class="col-12 nav align">
                        <a href="#servicios" class="col 1 sec aSec">Servicios</a>
                        <a href="#trabajamos" class="col 1 sec aSec">Como Trabajamos</a>
                        <a href="#tarifas" class="col 1 sec aSec">Tarifas</a>
                        <a href="#faqs" class="col 1 sec aSec">FAQs</a>
                        <a href="#socios2" class="col 1 sec aSec">Nuestros Socios</a>
                        <a href="#nosotros" class="col 1 sec aSec">Nosotros</a>
                    </div>
                </div>
            
                <div class="col-3 align" style="justify-content: flex-end;">
                    <a href="#contacto"><button href="#contacto" class="col-1 icon23">Contactanos</button></a>
                </div>
            
          </div>
          
        </div>
      </header>

    <header class="mobile">
            
        
        
            <script type="text/javascript">
                function myFunction() {
                    var x = document.getElementById("myLinks");
                    if (x.style.display === "block") {
                      x.style.left = "none";
                    } else {
                      x.style.display = "block";
                    }
                  }
            </script>
            <!-- Top Navigation Menu -->
            <div class="topnav">
                <a href="#home" class="active"><div class="col-5 col-lg-3 logo1">
                    <img src="./Images/kliv-logo.png" alt="" class="col-10" style="width: 70%;">
                </div></a>
                <!-- Navigation links (hidden by default) -->
                <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
                <script type="text/javascript">
                    function burger(){
                        var burger = document.getElementById('burger');
                        var links = document.getElementById('links');
                        var quit = document.getElementById('quit');
                        burger.style.padding = '10px 16px 200vw 200vw';
                        burger.style.left = "0%"
                        quit.style.right = "0%"
                        links.style.display = 'flex';
                        quit.style.display = 'inline';
                        }
                
                        function quit(){
                        var burger = document.getElementById('burger');
                        var links = document.getElementById('links');
                        var quit = document.getElementById('quit');
                        burger.style.padding = '10px 16px 11px 32px';
                        links.style.display = 'none';
                        quit.style.display = 'none';
                        burger.style.left = "82%"
                    }
                </script>
            <i id="burger" class="material-icons" onclick="burger()" style="padding: 10px 16px 11px 28px;">menu</i>
            <i id="quit" class="material-icons" onclick="quit()" style="padding: 10px 16px 11px 28px;">clear</i>
        
            <div id="links" class="align" style="height: 100vh;padding-bottom: 90%;
            padding-top: 45%;">
                <a href="#servicios" onclick="quit()" class="col 1 sec aSec align" style="display: flex;align-items: center;">Servicios</a>
                <a href="#trabajamos" onclick="quit()" class="col 1 sec aSec align" style="display: flex;align-items: center;">Como Trabajamos</a>
                <a href="#tarifas" onclick="quit()" class="col 1 sec aSec align" style="display: flex;align-items: center;">Tarifas</a>
                <a href="#faqs" onclick="quit()" class="col 1 sec aSec align" style="display: flex;align-items: center;">FAQs</a>
                <a href="#socios" onclick="quit()" class="col 1 sec aSec align" style="display: flex;align-items: center;">Nuestros Socios</a>
                <a href="#nosotros" onclick="quit()" class="col 1 sec aSec align" style="display: flex;align-items: center;">Nosotros</a>


                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
                <a href="https://api.whatsapp.com/send?phone=541167048339&text=Hola." class="float" target="_blank">
                <i class="fa fa-whatsapp my-float"></i>
                </a>
            </div>
            </div>

            
    </header>

    <!--<header class="desk">
        <div class="container-fluid">
            <div class="row align" style="justify-content: space-between;">
                <img src="./Images/kliv-logo.png" alt="" class="col-4 logoH">
                <nav class="col-7 row">
                    <h3 class="col-3 navT">Servicios</h3>
                    <h3 class="col-3 navT">Tarifas</h3>
                    <h3 class="col-3 navT">Nosotros</h3>
                    <h3 class="col-3 navT">Contacto</h3>
                </nav>
            </div>
        </div>
    </header>-->

    <div class="saberMas cerrado">
        <button id="btn1" class="col-7 btnS2">Saber Mas <i class="fas fa-arrow-right flechita"></i></button>
    </div>
    <div class="container-fluid">
        <div id="publiRedes" class="saberMas row align" style="display: none;">

            <i id="esc" class="fas fa-arrow-circle-left col-12" style="margin-top: 90px;margin-left: 20px; font-size: 30px;color: white;"></i>
            <div class="col-12 col-lg-9 align row serv" style="margin-top: 20px;">
                <img src="./Images/publi-redes.png" alt="" class="col-5 col-lg-2 imgS">
                <div class="col-7 row align" style="justify-content: space-between;">
                    <h1 class="col-12 servT" style="color: white;">Publicidad en Redes</h1>
                    <p class="textT col-12" style="color: white;">Estrategias creativas y formatos acordes a cada fase del embudo, con diseño y redacción que capte la atención de tu audencia meta en las redes e induzca a la conversión.</p>
                </div>
                <p class="col-12 textoSaberMas">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt modi corrupti reprehenderit autem quas quasi debitis facilis voluptate! A nobis, cumque vel earum placeat perferendis aliquam sunt ab quos sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo consequuntur totam, expedita temporibus magnam exercitationem nisi, cumque nobis iste corrupti quidem. Aspernatur mollitia aliquid debitis perspiciatis delectus officia corrupti nobis.</p>
                <p class="col-12 textoSaberMas">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt modi corrupti reprehenderit autem quas quasi debitis facilis voluptate! A nobis, cumque vel earum placeat perferendis aliquam sunt ab quos sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo consequuntur totam, expedita temporibus magnam exercitationem nisi, cumque nobis iste corrupti quidem. Aspernatur mollitia aliquid debitis perspiciatis delectus officia corrupti nobis.</p>
            </div>
            
            
            
        </div>
        <div id="publiGoogle" class="saberMas row align" style="display: none;">
            <i id="esc2" class="fas fa-arrow-circle-left col-12" style="margin-top: 90px;margin-left: 20px; font-size: 30px;color: white;"></i>
                <div class="col-12 col-lg-9 align row serv">
                    <div class="col-7 row align" style="justify-content: space-between;">
                        <h1 class="col-12 servT" style="color: white;">Publicidad en Google</h1>
                        <p class="textT col-12" style="color: white;">Anuncios en los buscadores, Google Maps, Youtube, espacios publicitarios de webs y aplicaciones asociadas, llegando a tu audiencia objetivo en el momento preciso.</p>
                        
                    </div>
                    <img src="./Images/publi-google.png" alt="" class="col-5 col-lg-2 imgS">
                    <p class="col-12 textoSaberMas">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt modi corrupti reprehenderit autem quas quasi debitis facilis voluptate! A nobis, cumque vel earum placeat perferendis aliquam sunt ab quos sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo consequuntur totam, expedita temporibus magnam exercitationem nisi, cumque nobis iste corrupti quidem. Aspernatur mollitia aliquid debitis perspiciatis delectus officia corrupti nobis.</p>
                <p class="col-12 textoSaberMas">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt modi corrupti reprehenderit autem quas quasi debitis facilis voluptate! A nobis, cumque vel earum placeat perferendis aliquam sunt ab quos sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo consequuntur totam, expedita temporibus magnam exercitationem nisi, cumque nobis iste corrupti quidem. Aspernatur mollitia aliquid debitis perspiciatis delectus officia corrupti nobis.</p>
                </div>
                
        </div>
        <div id="emailMkt" class="saberMas row align" style="display: none;">
            <i id="esc3" class="fas fa-arrow-circle-left col-12" style="margin-top: 90px;margin-left: 20px; font-size: 30px;color: white;"></i>
            <div class="col-12 col-lg-9 align row serv">
                <img src="./Images/email-mkt.png" alt="" class="col-5 col-lg-2 imgS">
                <div class="col-7 row align" style="justify-content: space-between;">
                    <h1 class="col-12 servT"  style="color: white;">Email Marketing</h1>
                    <p class="textT"  style="color: white;">Newsletters, emails transaccionales, promocionales y secuenciales, convirtiendo contactos en clientes y luego en embajadores de tu marca.</p>
                    
                </div>
                <p class="col-12 textoSaberMas">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt modi corrupti reprehenderit autem quas quasi debitis facilis voluptate! A nobis, cumque vel earum placeat perferendis aliquam sunt ab quos sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo consequuntur totam, expedita temporibus magnam exercitationem nisi, cumque nobis iste corrupti quidem. Aspernatur mollitia aliquid debitis perspiciatis delectus officia corrupti nobis.</p>
            <p class="col-12 textoSaberMas">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt modi corrupti reprehenderit autem quas quasi debitis facilis voluptate! A nobis, cumque vel earum placeat perferendis aliquam sunt ab quos sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo consequuntur totam, expedita temporibus magnam exercitationem nisi, cumque nobis iste corrupti quidem. Aspernatur mollitia aliquid debitis perspiciatis delectus officia corrupti nobis.</p>
            </div>
            
        </div>
        <div id="gesRedes" class="saberMas row align" style="display: none;">
            <i id="esc4" class="fas fa-arrow-circle-left col-12" style="margin-top: 50px;margin-left: 20px; font-size: 30px;color: white;"></i>
            <div class="col-12 col-lg-9 align row serv">
                <div class="col-7 row align" style="justify-content: space-between;">
                    <h1 class="col-12 servT"  style="color: white;">Gestión de Redes</h1>
                    <p class="textT"  style="color: white;">Contenidos relevantes ajustados a los intereses y necesidades de tu público objetivo, creando entornos de valor que refuercen el vínculo con la marca.</p>
                    
                </div>
                <img src="./Images/share.png" alt="" class="col-5 col-lg-2 imgS">
                <p class="col-12 textoSaberMas">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt modi corrupti reprehenderit autem quas quasi debitis facilis voluptate! A nobis, cumque vel earum placeat perferendis aliquam sunt ab quos sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo consequuntur totam, expedita temporibus magnam exercitationem nisi, cumque nobis iste corrupti quidem. Aspernatur mollitia aliquid debitis perspiciatis delectus officia corrupti nobis.</p>
            <p class="col-12 textoSaberMas">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt modi corrupti reprehenderit autem quas quasi debitis facilis voluptate! A nobis, cumque vel earum placeat perferendis aliquam sunt ab quos sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo consequuntur totam, expedita temporibus magnam exercitationem nisi, cumque nobis iste corrupti quidem. Aspernatur mollitia aliquid debitis perspiciatis delectus officia corrupti nobis.</p>
            </div>
            
        </div>
        <div id="disWeb" class="saberMas row align" style="display: none;">
            <i id="esc5" class="fas fa-arrow-circle-left col-12" style="margin-top: 50px;margin-left: 20px; font-size: 30px;color: white;"></i>
            <div class="col-12 col-lg-9 align row serv">
                <img src="./Images/dis-web.png" alt="" class="col-5 col-lg-2 imgS">
                <div class="col-7 row align" style="justify-content: space-between;">
                    <h1 class="col-12 servT"  style="color: white;">Diseño Web</h1>
                    <p class="textT"  style="color: white;">Plataformas web optimizadas para generar acciones de conversión, con navegabilidad ágil y segura, excelente indexación orgánica en buscadores y adaptables a múltiples dispositivos.</p>
                    
                </div>
                <p class="col-12 textoSaberMas">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt modi corrupti reprehenderit autem quas quasi debitis facilis voluptate! A nobis, cumque vel earum placeat perferendis aliquam sunt ab quos sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo consequuntur totam, expedita temporibus magnam exercitationem nisi, cumque nobis iste corrupti quidem. Aspernatur mollitia aliquid debitis perspiciatis delectus officia corrupti nobis.</p>
            <p class="col-12 textoSaberMas">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt modi corrupti reprehenderit autem quas quasi debitis facilis voluptate! A nobis, cumque vel earum placeat perferendis aliquam sunt ab quos sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo consequuntur totam, expedita temporibus magnam exercitationem nisi, cumque nobis iste corrupti quidem. Aspernatur mollitia aliquid debitis perspiciatis delectus officia corrupti nobis.</p>
            </div>
            
        </div>
        <div id="disGrafico" class="saberMas row align" style="display: none;">
            <i id="esc6" class="fas fa-arrow-circle-left col-12" style="margin-top: 50px;margin-left: 20px; font-size: 30px;color: white;"></i>
            <div class="col-12 col-lg-9 align row serv">
                <div class="col-7 row align" style="justify-content: space-between;">
                    <h1 class="col-12 servT"  style="color: white;">Diseño Gráfico + Audiovisual</h1>
                    <p class="textT"  style="color: white;">Manual de identidad corporativa, logos, brochures, folletos, infografía, fotoproducto, lookbooks, retrato, animaciones motion graphic,guión, rodajes y producciones.</p>
                    
                </div>
                <img src="./Images/dis-grafico.png" alt="" class="col-5 col-lg-2 imgS">
                <p class="col-12 textoSaberMas">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt modi corrupti reprehenderit autem quas quasi debitis facilis voluptate! A nobis, cumque vel earum placeat perferendis aliquam sunt ab quos sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo consequuntur totam, expedita temporibus magnam exercitationem nisi, cumque nobis iste corrupti quidem. Aspernatur mollitia aliquid debitis perspiciatis delectus officia corrupti nobis.</p>
                <p class="col-12 textoSaberMas">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt modi corrupti reprehenderit autem quas quasi debitis facilis voluptate! A nobis, cumque vel earum placeat perferendis aliquam sunt ab quos sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo consequuntur totam, expedita temporibus magnam exercitationem nisi, cumque nobis iste corrupti quidem. Aspernatur mollitia aliquid debitis perspiciatis delectus officia corrupti nobis.</p>
            </div>
           
        </div>
        <div id="wppMkt" class="saberMas row align" style="display: none;">
            <i id="esc7" class="fas fa-arrow-circle-left col-12" style="margin-top: 50px;margin-left: 20px; font-size: 30px;color: white;"></i>
            <div class="col-12 col-lg-9 align row serv">
                <img src="./Images/wpp-mkt.png" alt="" class="col-5 col-lg-2 imgS">
                <div class="col-7 row align" style="justify-content: space-between;">
                    <h1 class="col-12 servT"  style="color: white;">WhatsApp Marketing</h1>
                    <p class="textT"  style="color: white;">Chatbot, campañas de difusión a grupos segmentados e historias periódicas, garantizando el contacto permanente con tu audiencia y enriqueciendo la experiencia con tu marca.</p>
                    
                </div>
                <p class="col-12 textoSaberMas">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt modi corrupti reprehenderit autem quas quasi debitis facilis voluptate! A nobis, cumque vel earum placeat perferendis aliquam sunt ab quos sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo consequuntur totam, expedita temporibus magnam exercitationem nisi, cumque nobis iste corrupti quidem. Aspernatur mollitia aliquid debitis perspiciatis delectus officia corrupti nobis.</p>
                <p class="col-12 textoSaberMas">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt modi corrupti reprehenderit autem quas quasi debitis facilis voluptate! A nobis, cumque vel earum placeat perferendis aliquam sunt ab quos sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo consequuntur totam, expedita temporibus magnam exercitationem nisi, cumque nobis iste corrupti quidem. Aspernatur mollitia aliquid debitis perspiciatis delectus officia corrupti nobis.</p>
            </div>
            
        </div>
        
        
    </div>

    <main id="home">
        <div class="container-fluid">
            <div class="row align">


                <section data-aos="fade-up" data-aos-duration="900" class="row align pres desk">
                    
                    <div class="col-12 row align">
                        <div class="col-6">
                            
                            <div id="textoTitle2" class="col-12 row align" style="margin-left: 0px;">
                                <h1 class="col-12 col-lg-12 title align" style="text-align: start;margin-top: 4%;margin-bottom:0%">Optimiza tu inversión publicitaria con </h1>
                                <h1 class="col-12 col-lg-12 title align" style="text-align: start;margin-top: 4%;margin-bottom:0%">Logra tus objetivos publicitarios con </h1>
                            </div>
                            <script type="text/javascript">
                                $('#textoTitle2').slick({
                                    arrows:false,
                                    dots:false,
                                    autoplay: true
                                });
                            </script> 
                                
                            <h1 class="col-12 col-lg-12 title" style="text-align: start;margin-top: 0%;"><strong class="verde">PERFORMANCE MKT</strong></h1>


                            

                            <h2 class="col-12 col-lg-12 subtitle" style="text-align: start;">Estrategias 100% orientadas a resultados</h2>
                            
                            <div class="desk align col-12" style="justify-content: start;padding-left: 15px;">
                                <a href="#contacto"><button class="boton col-5 desk">Comenzar Ahora</button></a>
                            </div>
                        </div>
                        
                        <video class="col-6 gif" autoplay muted loop style="margin-top: 120px;">
                            <source src="./Images/Motion Embudo KLIV.mp4" type="video/mp4">
                        </video>
                    </div>
                    
                </section>


                <section data-aos="fade-up" data-aos-duration="900" class="row align pres mobile">
                    <div class="row align" style="margin-left: 0px;">
                        <div id="textoTitle" class="col-12 row align">
                            <h1 class="col-12 col-lg-12 title align" style="text-align: center;margin-top: 4%;margin-bottom:0%">Optimiza tu inversión publicitaria con </h1>
                            <h1 class="col-12 col-lg-12 title align" style="text-align: center;margin-top: 4%;margin-bottom:0%">Logra tus objetivos publicitarios con </h1>
                        </div>
                        <script type="text/javascript">
                            $('#textoTitle').slick({
                                arrows:false,
                                dots:false,
                                autoplay: true
                            });
                        </script> 

                        <h1 class="col-12 col-lg-12 title" style="text-align: center;margin-top: 0%;"><strong class="verde">PERFORMANCE MKT</strong></h1>


                        <h2 class="col-12 col-lg-9 subtitle">Estrategias 100% orientadas a resultados</h2>
                        <div class="col-12 align">
                        <a href="#contacto" class="col-5"><button class="boton mobile col-12">Comenzar ahora</button></a>
                        </div>
                    </div>
                    
                    
                    
                    <video class="col-12 col-lg-6 gif" style="height: 50vh;" autoplay muted loop>
                        <source src="./Images/Motion Embudo KLIV.mp4" type="video/mp4">
                    </video>
                    
                </section>

                




                <section data-aos="fade-down" data-aos-duration="900" class="row align car mobile">
                    <h1 class="col-12 titles">¿POR QUÉ NOS ELIGEN?</h1>

                      <div class="porqCar row col-lg-5">
                        <div class="item active align">
                          <img src="./Images/return-of-investment.svg" alt="" class="col-10 col-lg-8 imgPq">
                          <h2 class="col-10 cSubtitle">+ Retorno de inversión</h2>
                          <p class="col-11 cText">Maximizamos el rendimiento de tu presupuesto publicitario, ya que solo pagas por los resultados conseguidos a un costo por adquisición asignado que garantize rentabilidad.</p>
                        </div>
                    
                        <div class="item align">
                          <img src="./Images/selective.svg" alt="" class="col-10 col-lg-8 imgPq">
                          <h2 class="col-10 cSubtitle">+ Tasa de conversión</h2>
                          <p class="col-11 cText">Aumentamos la eficiencia de cada fase del embudo; incrementando la proporción de objetivos cumplidos sobre usuarios alcanzados.</p>
                        </div>
                    
                        <div class="item align">
                            <img src="./Images/profits.svg" alt="" class="col-10 col-lg-8 imgPq">
                          <h2 class="col-10 cSubtitle">Escalable</h2>
                          <p class="col-11 cText">Adaptamos las campañas constantemente en función de los resultados que se van obteniendo para mejorar su efectividad y bajar los costos.Optimización y mejora continua.</p>
                        </div>

                        <div class="item align">
                          <img src="./Images/information.svg" alt="" class="col-10 col-lg-8 imgPq">
                          <h2 class="col-10 cSubtitle">Transparente</h2>
                          <p class="col-11 cText">Medimos el rendimiento de las campañas con indicadores concretos en tiempo real, sin métricas de vanidad ni percepciones subjetivas.</p>
                        </div>

                        <div class="item align">
                            <img src="./Images/full-size.svg" alt="" class="col-12 col-lg-8 imgPq">
                          <h2 class="col-10 cSubtitle">Versátil</h2>
                          <p class="col-11 cText">Modelo adaptable a cualquier tipo de negocio, tipo de embudo y diversidad de plataformas. Diseñamos un plan 100% a medida.</p>
                        </div>
                      </div>

                      <script type="text/javascript">
                        $('.porqCar').slick({
                            infinite: true,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            prevArrow: false,
                            nextArrow: false,
                            dots: true
                        });
                      </script>




                        

                </section>

                <section data-aos="fade-right" class="row align car desk">
                    <h1 class="col-12 titles">¿POR QUÉ NOS ELIGEN?</h1>

                      <div id="pq-car-cont">
                        <div data-aos="zoom-in" data-aos-duration="900">
                            <img src="./Images/return-of-investment.svg" alt="" class="icon-pq">
                            <h2 class="tit-pq">+ Retorno de inversión</h2>
                            <p class="text-pq">Maximizamos el rendimiento de tu presupuesto publicitario, ya que solo pagas por los resultados conseguidos a un costo por adquisición asignado que garantize rentabilidad.</p>
                        </div>
                        <div data-aos="zoom-in" data-aos-duration="900">
                            <img src="./Images/selective.svg" alt="" class="icon-pq">
                            <h2 class="tit-pq">+ Tasa de conversión</h2>
                            <p class="text-pq">Aumentamos la eficiencia de cada fase del embudo; incrementando la proporción de objetivos cumplidos sobre usuarios alcanzados.</p>
                        </div>
                        <div data-aos="zoom-in" data-aos-duration="900">
                            <img src="./Images/profits.svg" alt="" class="icon-pq">
                            <h2 class="tit-pq">Escalable</h2>
                            <p class="text-pq">Adaptamos las campañas constantemente en función de los resultados que se van obteniendo para mejorar su efectividad y bajar los costos.Optimización y mejora continua.</p>
                        </div>
                        <div data-aos="zoom-in" data-aos-duration="900">
                            <img src="./Images/information.svg" alt="" class="icon-pq">
                            <h2 class="tit-pq">Transparente</h2>
                            <p class="text-pq">Medimos el rendimiento de las campañas con indicadores concretos en tiempo real, sin métricas de vanidad ni percepciones subjetivas.</p>
                        </div>
                        <div data-aos="zoom-in" data-aos-duration="900">
                            <img src="./Images/full-size.svg" alt="" class="icon-pq">
                            <h2 class="tit-pq">Versátil</h2>
                            <p class="text-pq">Modelo adaptable a cualquier tipo de negocio, tipo de embudo y diversidad de plataformas. Diseñamos un plan 100% a medida.</p>
                        </div>
                        
                      </div>

                      <script type="text/javascript">
                        $('.porqCar').slick({
                            infinite: true,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            prevArrow: false,
                            nextArrow: false,
                            dots: true
                        });
                      </script>




                        

                </section>

                <section data-aos="fade-up" data-aos-duration="900" data-aos-delay="100" class="row align services" id="servicios">

                    <h1 class="col-12 titles nues">NUESTROS SERVICIOS</h1>

                    <div data-aos="fade-up" data-aos-duration="900" class="col-12 col-lg-6 row serv">
                        <img src="./Images/publi-redes.png" alt="" class="col-3 col-lg-3 imgS iconServ">
                        <div class="col-9 col-lg-7 row" style="display: flex; justify-content: start;align-items: center;">
                            <h1 class="col-12 servT">Publicidad en Redes</h1>
                            <p class="textT col-12">Estrategias creativas y formatos acordes a cada fase del embudo, con diseño y redacción que capte la atención de tu audencia meta en las redes e induzca a la conversión.</p>
                            <button id="btn12" class="col-7 btnS align">Saber Mas <i class="fas fa-arrow-right flechita"></i></button>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="900" class="col-12 col-lg-6 row serv">
                        <div class="col-9 col-lg-7 row align" style="justify-content: space-between;">
                            <h1 class="col-12 servT">Publicidad en Google</h1>
                            <p class="textT col-12">Anuncios en los buscadores, Google Maps, Youtube, espacios publicitarios de webs y aplicaciones asociadas, llegando a tu audiencia objetivo en el momento preciso.</p>
                            <button id="btn13" class="col-7 btnS align">Saber Mas <i class="fas fa-arrow-right flechita"></i></button>
                        </div>
                        <img src="./Images/publi-google.png" alt="" class="col-3 col-lg-3 imgS iconServ">
                    </div>

                    <div data-aos="fade-up" data-aos-duration="900" class="col-12 col-lg-6 row serv">
                        <img src="./Images/email-mkt.png" alt="" class="col-3 col-lg-3 imgS iconServ">
                        <div class="col-9 col-lg-7 row align" style="justify-content: space-between;">
                            <h1 class="col-12 servT">Email Marketing</h1>
                            <p class="textT">Newsletters, emails transaccionales, promocionales y secuenciales, convirtiendo contactos en clientes y luego en embajadores de tu marca.</p>
                            <button id="btn14" class="col-7 btnS align">Saber Mas <i class="fas fa-arrow-right flechita"></i></button>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="900" class="col-12 col-lg-6 row serv">
                        <div class="col-9 col-lg-7 row align" style="justify-content: space-between;">
                            <h1 class="col-12 servT">Gestión de Redes</h1>
                            <p class="textT">Contenidos relevantes ajustados a los intereses y necesidades de tu público objetivo, creando entornos de valor que refuercen el vínculo con la marca.</p>
                            <button id="btn15" class="col-7 btnS align">Saber Mas <i class="fas fa-arrow-right flechita"></i></button>
                        </div>
                        <img src="./Images/share.png" alt="" class="col-3 col-lg-3 imgS iconServ">
                    </div>

                    <div data-aos="fade-up" data-aos-duration="900" class="col-12 col-lg-6 row serv">
                        <img src="./Images/dis-web.png" alt="" class="col-3 col-lg-3 imgS iconServ">
                        <div class="col-9 col-lg-7 row align" style="justify-content: space-between;">
                            <h1 class="col-12 servT">Diseño Web</h1>
                            <p class="textT">Plataformas web optimizadas para generar acciones de conversión, con navegabilidad ágil y segura, excelente indexación orgánica en buscadores y adaptables a múltiples dispositivos.</p>
                            <button id="btn16" class="col-7 btnS align">Saber Mas <i class="fas fa-arrow-right flechita"></i></button>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="900" class="col-12 col-lg-6 row serv">
                        <div class="col-9 col-lg-7 row align" style="justify-content: space-between;">
                            <h1 class="col-12 servT">Diseño Gráfico + Audiovisual</h1>
                            <p class="textT">Manual de identidad corporativa, logos, brochures, folletos, infografía, fotoproducto, lookbooks, retrato, animaciones motion graphic,guión, rodajes y producciones.</p>
                            <button id="btn17" class="col-7 btnS align">Saber Mas <i class="fas fa-arrow-right flechita"></i></button>
                        </div>
                        <img src="./Images/dis-grafico.png" alt="" class="col-3 col-lg-3 imgS iconServ">
                    </div>

                    <div data-aos="fade-up" data-aos-duration="900" class="col-12 col-lg-6 row serv">
                        <div class="col-12 col-lg-12 row serv">
                            <img src="./Images/wpp-mkt.png" alt="" class="col-3 col-lg-3 imgS iconServ">
                            <div class="col-9 col-lg-7 row align" style="justify-content: space-between;">
                                <h1 class="col-12 servT">WhatsApp Marketing</h1>
                                <p class="textT">Chatbot, campañas de difusión a grupos segmentados e historias periódicas, garantizando el contacto permanente con tu audiencia y enriqueciendo la experiencia con tu marca.</p>
                                <button id="btn18" class="col-7 btnS align">Saber Mas <i class="fas fa-arrow-right flechita"></i></button>
                            </div>
                        </div>
                    </div>



                    <script type="text/javascript">
                        $("#btn12").click(function(){
                            $("#publiRedes").fadeIn();
                            
                        });
                        $("#esc").click(function(){
                            $("#publiRedes").fadeOut();
                        });
                        $("#esc2").click(function(){
                            $("#publiGoogle").fadeOut();
                        });
                    </script>
                    <script type="text/javascript">
                        $("#btn13").click(function(){
                            $("#publiGoogle").fadeIn();
                            
                        });
                        $("#esc2").click(function(){
                            $("#publiGoogle").fadeOut();
                        });
                    </script>
                    <script type="text/javascript">
                        $("#btn14").click(function(){
                            $("#emailMkt").fadeIn();
                            
                        });
                        $("#esc3").click(function(){
                            $("#emailMkt").fadeOut();
                        });
                    </script>
                    <script type="text/javascript">
                        $("#btn15").click(function(){
                            $("#gesRedes").fadeIn();
                            
                        });
                        $("#esc4").click(function(){
                            $("#gesRedes").fadeOut();
                        });
                    </script>
                    <script type="text/javascript">
                        $("#btn16").click(function(){
                            $("#disWeb").fadeIn();
                            
                        });
                        $("#esc5").click(function(){
                            $("#disWeb").fadeOut();
                        });
                    </script>
                    <script type="text/javascript">
                        $("#btn17").click(function(){
                            $("#disGrafico").fadeIn();
                            
                        });
                        $("#esc6").click(function(){
                            $("#disGrafico").fadeOut();
                        });
                    </script>
                    <script type="text/javascript">
                        $("#btn18").click(function(){
                            $("#wppMkt").fadeIn();
                            
                        });
                        $("#esc7").click(function(){
                            $("#wppMkt").fadeOut();
                        });
                    </script>

                </section>
                <div class="align col-12 fondo" style="padding: 0;">
                    <section id="trabajamos" class="row align como" style="width: 100% !important;">
                        <h1 class="col-12 titles comoT">COMO TRABAJAMOS</h1>
                        <div id="svg-cont" class="col-lg-5 align">
                           
                            <!-- Generator: Adobe Illustrator 23.0.2, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                            <svg class="col-10 col-lg-5" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 255 255" style="enable-background:new 0 0 255 255;" xml:space="preserve">
                            <style type="text/css">
                                .st0{fill:#1D7A5F;}
                                .st1{fill:none;}
                                .st2{fill:#FFFFFF;}
                                .st3{font-family: Product Sans!important;font-size: 50px!important}
                                .st4{font-size:50px!important;}
                            </style>
                            <g id="flecha3"  class="paso3">
                                <path class="st0" d="M2.7,130.9l34.9-21.2L71.9,131l0.2,0.2c1.6,19.9,14.3,37.9,32.6,46c5.2,2.3,10.8,3.8,16.5,4.4l0.2,0L100,217.2
                                    l21.1,34.1h-0.3c-13.8-0.7-27.4-3.8-40.1-9c-22-8.9-41.2-24.1-54.9-43.4c-14.1-19.8-22.3-43.6-23.2-67.9L2.7,130.9z"/>
                            </g>
                            <g id="flecha4"  class="paso4">
                                <path class="st0" d="M123.9,2.6l21.2,34.9l-21.4,34.4l-0.2,0.2c-19.9,1.6-37.9,14.3-46,32.6c-2.3,5.2-3.8,10.8-4.4,16.5l0,0.2
                                    L37.6,99.9L3.4,121v-0.3c0.7-13.8,3.8-27.4,9-40.1c8.9-22,24.1-41.2,43.4-54.9C75.6,11.4,99.3,3.3,123.7,2.4L123.9,2.6z"/>
                            </g>
                            <g class="paso1" id="flecha1">
                                <path class="st0" style="fill: #003629" d="M252.5,123.5l-34.9,21.2l-34.4-21.4l-0.2-0.2c-1.6-19.9-14.3-37.9-32.6-46c-5.2-2.3-10.8-3.8-16.5-4.4l-0.2,0
                                    l21.5-35.6L134.1,3.1h0.3c13.8,0.7,27.4,3.8,40.1,9c22,8.9,41.2,24.1,54.9,43.4c14.1,19.8,22.3,43.6,23.2,67.9L252.5,123.5z"/>
                            </g>
                            <g class="paso2" id="flecha2">
                                <path class="st0" d="M131.4,251.7l-21.2-34.9l21.4-34.4l0.2-0.2c19.9-1.6,37.9-14.3,46-32.6c2.3-5.2,3.8-10.8,4.4-16.5l0-0.2
                                    l35.6,21.5l34.1-21.1v0.3c-0.7,13.8-3.8,27.4-9,40.1c-8.9,22-24.1,41.2-43.4,54.9c-19.8,14.1-43.6,22.3-67.9,23.2L131.4,251.7z"/>
                            </g>
                            <image style="overflow:visible;" width="1241" height="1241" xlink:href="Images/Logotipos-07.png"  transform="matrix(9.883400e-02 0 0 9.883400e-02 66.3923 66.7644)">
                            </image>
                            <rect x="55.6" y="36.6" class="st1 paso4" width="37.4" height="43.2"/>
                            <text transform="matrix(1 0 0 1 55.6401 72.3594)" class="st2 st3 st4 paso4">4</text>
                            <rect x="187" y="57.2" class="st1 paso2" width="37.4" height="43.2"/>
                            <text transform="matrix(1 0 0 1 187.0001 92.9594)" class="st2 st3 st4 paso1">1</text>
                            <rect x="169.3" y="180.5" class="st1 paso2" width="37.4" height="43.2"/>
                            <text transform="matrix(1 0 0 1 169.3254 216.2657)" class="st2 st3 st4 paso2">2</text>
                            <rect x="41.7" y="160.8" class="st1 paso3" width="37.4" height="43.2"/>
                            <text transform="matrix(1 0 0 1 41.6724 196.6167)" class="st2 st3 st4 paso3">3</text>
                            </svg>
                            <div data-aos="zoom-in" data-aos-duration="900" class="titulos-pasos paso1" id="paso1txt" style="color: #003629">Análisis y Planificación</div>
                            <div data-aos="zoom-in" data-aos-duration="900" class="titulos-pasos paso2" id="paso2txt"><p style="margin: 0% !important;"> Puesta en </p> marcha</div>
                            <div data-aos="zoom-in" data-aos-duration="900" class="titulos-pasos paso3" id="paso3txt">Monitoreo y optimización</div>
                            <div data-aos="zoom-in" data-aos-duration="900" class="titulos-pasos paso4" id="paso4txt">Informe y Propuestas</div>
                        </div>

                        <div id="content10" class="col-12 align" style="display: flex;">
                            <p class="col-12 col-lg-6 textC">Partiendo de un relevamiento 360 grados de tu empresa y al mercado, diseñamos un embudo de conversión 100% a medida, ajustada a sus recursos y objetivos</p>
                        </div>
 
                        <div id="content20" class="col-12 align" style="display: none;">
                            <p class="col-12 col-lg-6 textC">Damos curso a lo planificado, ensamblando todos los elementos que conforman cada campaña coordinados entre nuestro equipo interdisciplinario.</p>
                        </div>
                        <div id="content30" class="col-12 align" style="display: none;">
                            <p class="col-12 col-lg-6 textC">Monitoreamos diariamente los indicadores de desempeño (KPI), haciendo ajustes en función de los resultados que se van obteniendo para mejorar la efectividad y bajar los costos.</p>
                        </div>
                        <div id="content40" class="col-12 align" style="display: none;">
                            <p class="col-12 col-lg-6 textC">Al finalizar las campañas, se presentan las métricas resultantes en paneles interactivos, permitiendo interpretarlas y detectar oportunidades de mejora para el siguiente período.</p>
                        </div>

                        <script type="text/javascript">
                            $(".paso1").click(function(){
                                $('#flecha2>path,#flecha3>path,#flecha4>path').css('fill', '#1d7a5f')                    
                                $('#flecha1>path').css('fill', '#003629');
                                $('#paso2txt, #paso3txt, #paso4txt').css('color','#adadad')
                                $('#paso1txt').css('color', '#003629')
                                $("#content20,#content30,#content40").css('display','none');
                                $("#content10").css('display','flex');
                            });
                        
                            $(".paso2").click(function(){
                                $('#flecha1>path,#flecha3>path,#flecha4>path').css('fill', '#1d7a5f')                    
                                $('#flecha2>path').css('fill', '#003629');
                                $('#paso1txt, #paso3txt, #paso4txt').css('color','#adadad')
                                $('#paso2txt').css('color', '#003629')
                                $("#content10,#content30,#content40").css('display','none');
                                $("#content20").css('display','flex');
                                
                        });

                            $(".paso3").click(function(){
                                $('#flecha1>path,#flecha2>path,#flecha4>path').css('fill', '#1d7a5f')                    
                                $('#flecha3>path').css('fill', '#003629');
                                $('#paso1txt, #paso2txt, #paso4txt').css('color','#adadad')
                                $('#paso3txt').css('color', '#003629')
                                $("#content10,#content20,#content40").css('display','none');
                                $("#content30").css('display','flex');
                                
                        });

                            $(".paso4").click(function(){
                                $('#flecha1>path,#flecha3>path,#flecha2>path').css('fill', '#1d7a5f')                    
                                $('#flecha4>path').css('fill', '#003629');
                                $('#paso1txt, #paso3txt, #paso2txt').css('color','#adadad')
                                $('#paso4txt').css('color', '#003629')
                                $("#content10,#content30,#content20").css('display','none');
                                $("#content40").css('display','flex');
                                
                        });
                        </script>
                    </section>
                </div>

                <section id="tarifas" class="row align tarifas">
                    <h1 class="col-12 titles tarifasT">TARIFAS POR CAMPAÑA</h1>
                    <div class="col-8 col-lg-5 align" style="display: flex; justify-content: space-evenly;">
                        <button id="emp" class="col-4 col-lg-3 btn2 emp seleccionado"><i class="fas fa-city"></i> Empresa</button>
                        <button id="age" class="col-4 col-lg-3 btn2 age deseleccionado"><i class="fas fa-building"></i> Agencia</button>
                    </div>

                    
    
                    <div id="empresa" class="row align col-12" style="position: relative;">
                        <div class="empresa row align col-lg-5">
                            <h2 data-aos="zoom-in" class="col-12 subT">Paquetes para empresas de todos los tamaños</h2>
                            
                            <label for="customRange3" class="form-label col-12" style="text-align: center; font-size: 27px; font-weight: 400;margin-bottom: 20px;"><strong id="campanas" class="num" style="font-weight: bolder;font-size: 29px;"> ? </strong> Campañas /mes</label>
                            <!-- <div id="range-cont">
                                <a href="#empresa"><input type="range" class="form-range col-8" value="1" min="1" max="100" step="1" id="customRange3"></a> 
                                <div></div>
                                
                            </div> -->
                            <a href="#empresa" id="drag-cont">
                              

                            </a>
                                
                        </div>

                        <div class="center1 align cont col-12">
                        <article class="col-11 card" data-aos="zoom-in-up" data-aos-duration="900">
                                <div class="row align">
                                    
                                    
                                    <div class="col-11 row align">
                                        <div class="col-12 align" style="justify-content: flex-end;">
                                        <h1 id="icV5" class="fas fa-arrow-circle-left col-6" style="cursor: pointer !important;font-size: 16px;text-align: start;margin-top: 20px;margin-bottom: -5px;display: none;"></h1>
                                        <h1 id="icF5" class="fas fa-info-circle col-6" style="cursor: pointer !important;font-size: 16px;text-align: end;margin-top: 20px;margin-bottom: -5px"><i style="text-align: end;margin-top: 20px;margin-bottom: -20px;font-size: 16px;"></i></h1>
                                        </div>
                                        <div id="precios5" class="row align">
                                            <h1 id="arss5" class="col-12 precio">$ 5.000 /<strong style="font-size: 19px;">mes </strong></h1>
                                            <h1 id="dolaress5" class="col-12 precio" style="display: none;">$105 /<strong style="font-size: 19px;">mes </strong></h1>
                                            <h1 style="cursor: pointer; text-decoration: underline" id="ars5" class="col-2 ars">ARS </h1>-<h1 style="cursor: pointer;" id="usd5" class="col-2 usd"> USD</h1>
                                            <h1 class="col-12 desc" style="font-size: 15px;">¿No sabes cuantas campañas? Relevamiento y embudo a medida</h1>
                                            
                                            <button class="botonStart col-8">Comenzar ahora</button>
                                        </div>
                                        <h1 id="info5" class="col-12 desc" style="display: none;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas, officia nam? Doloribus officiis consequuntur blanditiis tempore quidem corrupti eius? Harum, quisquam ut omnis quaerat consequatur officiis tenetur eius eaque voluptatum?</h1>
                                    </div>
                                </div>
                            </article>
                            <article class="col-11 card align" data-aos="zoom-in-up" data-aos-duration="900">
                                <div class="row align">
                                    <div class="col-11 row align">
                                        <div class="col-12 align" style="justify-content: flex-end;">
                                            <h1 id="icV1" class="fas fa-arrow-circle-left col-6" style="cursor: pointer !important;font-size: 16px;text-align: start;margin-top: 20px;margin-bottom: -5px;display: none;"></h1>
                                            <h1 id="icF1" class="fas fa-info-circle col-6" style="cursor: pointer !important;font-size: 16px;text-align: end;margin-top: 20px;margin-bottom: -5px"><i style="text-align: end;margin-top: 20px;margin-bottom: -20px;font-size: 16px;cursor: pointer;"></i></h1>
                                        </div>
                                        <div id="precios1" class="row align">
                                            <h1 id="arss" class="col-12 precio">$ 10.000 /<strong style="font-size: 19px;">mes </strong></h1>
                                            <h1 id="dolaress1" class="col-12 precio" style="display: none;">$105 /<strong style="font-size: 19px;">mes </strong></h1>
                                            <h1 style="cursor: pointer; text-decoration: underline" id="ars" class="col-2 ars">ARS </h1>-<h1 style="cursor: pointer;" id="usd" class="col-2 usd"> USD</h1>
                                            <h1 id="pesos1" class="col-12 desc"> $ 5.000 c/u</h1>
                                            <h1 id="dolares1" class="col-12 desc" style="display: none;"> $ 52 c/u</h1>
                                            <button class="botonStart col-8">Comenzar ahora</button>
                                        </div>
                                        <h1 id="info1" class="col-12 desc" style="display: none;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas, officia nam? Doloribus officiis consequuntur blanditiis tempore quidem corrupti eius? Harum, quisquam ut omnis quaerat consequatur officiis tenetur eius eaque voluptatum?</h1>
                                    </div>
                                </div>
                            </article>
                            <article class="col-11 card" data-aos="zoom-in-up" data-aos-duration="900">
                                <div class="row align">
                                    
                                    <div class="col-11 row align">
                                        <div class="col-12 align" style="justify-content: flex-end;">
                                            <h1 id="icV2" class="fas fa-arrow-circle-left col-6" style="cursor: pointer !important;font-size: 16px;text-align: start;margin-top: 20px;margin-bottom: -5px;display: none;"></h1>
                                            <h1 id="icF2" class="fas fa-info-circle col-6" style="cursor: pointer !important;font-size: 16px;text-align: end;margin-top: 20px;margin-bottom: -5px"><i style="text-align: end;margin-top: 20px;margin-bottom: -20px;font-size: 16px;cursor: pointer;"></i></h1>
                                        </div>
                                        <div id="precios2" class="row align">
                                            <h1 id="arss2" class="col-12 precio">$ 13.500 /<strong style="font-size: 19px;">mes </strong></h1>
                                            <h1 id="dolaress2" class="col-12 precio" style="display: none;">$105 /<strong style="font-size: 19px;">mes </strong></h1>
                                            <h1 style="cursor: pointer; text-decoration: underline" id="ars2" class="col-2 ars">ARS </h1>-<h1 style="cursor: pointer;" id="usd2" class="col-2 usd"> USD</h1>
                                            <h1 id="pesos2" class="col-12 desc">10% OFF / $ 4.500 c/u</h1>
                                            <h1 id="dolares2" class="col-12 desc" style="display: none;">10% OFF / $ 48 c/u</h1>
                                            <button class="botonStart col-8">Comenzar ahora</button>
                                        </div>
                                        <h1 id="info2" class="col-12 desc" style="display: none;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas, officia nam? Doloribus officiis consequuntur blanditiis tempore quidem corrupti eius? Harum, quisquam ut omnis quaerat consequatur officiis tenetur eius eaque voluptatum?</h1>
                                    </div>
                                </div>
                            </article>
                            <article class="col-11 card" data-aos="zoom-in-up" data-aos-duration="900">
                                <div class="row align">
                                    
                                    <div class="col-11 row align">
                                        <div class="col-12 align" style="justify-content: flex-end;">
                                            <h1 id="icV3" class="fas fa-arrow-circle-left col-6" style="cursor: pointer !important;font-size: 16px;text-align: start;margin-top: 20px;margin-bottom: -5px;display: none;"></h1>
                                            <h1 id="icF3" class="fas fa-info-circle col-6" style="cursor: pointer !important;font-size: 16px;text-align: end;margin-top: 20px;margin-bottom: -5px"><i style="text-align: end;margin-top: 20px;margin-bottom: -20px;font-size: 16px;cursor: pointer;"></i></h1>
                                        </div>
                                        <div id="precios3" class="row align">
                                            <h1 id="arss3" class="col-12 precio">$ 17.000 /<strong style="font-size: 19px;">mes </strong></h1>
                                            <h1 id="dolaress3" class="col-12 precio" style="display: none;">$105 /<strong style="font-size: 19px;">mes </strong></h1>
                                            <h1 style="cursor: pointer; text-decoration: underline" id="ars3" class="col-2 ars">ARS </h1>-<h1 style="cursor: pointer;" id="usd3" class="col-2 usd"> USD</h1>
                                            <h1 id="pesos3" class="col-12 desc">15% OFF / $ 4.250 c/u</h1>
                                            <h1 id="dolares3" class="col-12 desc" style="display: none;">10% OFF / $ 48 c/u</h1>
                                            <button class="botonStart col-8">Comenzar ahora</button>
                                        </div>
                                        <h1 id="info3" class="col-12 desc" style="display: none;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas, officia nam? Doloribus officiis consequuntur blanditiis tempore quidem corrupti eius? Harum, quisquam ut omnis quaerat consequatur officiis tenetur eius eaque voluptatum?</h1>
                                    </div>
                                </div>
                            </article>
                            <article class="col-11 card" data-aos="zoom-in-up" data-aos-duration="900">
                                <div class="row align">
                                    
                                    
                                    <div class="col-11 row align">
                                        <div class="col-12 align" style="justify-content: flex-end;">
                                        <h1 id="icV4" class="fas fa-arrow-circle-left col-6" style="cursor: pointer !important;font-size: 16px;text-align: start;margin-top: 20px;margin-bottom: -5px;display: none;"></h1>
                                        <h1 id="icF4" class="fas fa-info-circle col-6" style="cursor: pointer !important;font-size: 16px;text-align: end;margin-top: 20px;margin-bottom: -5px"><i style="text-align: end;margin-top: 20px;margin-bottom: -20px;font-size: 16px;cursor: pointer;"></i></h1>
                                        </div>
                                        <div id="precios4" class="row align">
                                            <h1 id="arss4" class="col-12 precio">$ 20.000 /<strong style="font-size: 19px;">mes </strong></h1>
                                            <h1 id="dolaress4" class="col-12 precio" style="display: none;">$105 /<strong style="font-size: 19px;">mes </strong></h1>
                                            <h1 style="cursor: pointer; text-decoration: underline" id="ars4" class="col-2 ars">ARS </h1>-<h1 style="cursor: pointer;" id="usd4" class="col-2 usd"> USD</h1>
                                            <h1 id="pesos4" class="col-12 desc">20% OFF / $ 4.000 c/u</h1>
                                            <h1 id="dolares4" class="col-12 desc" style="display: none;">10% OFF / $ 48 c/u</h1>
                                            <button class="botonStart col-8">Comenzar ahora</button>
                                        </div>
                                        <h1 id="info4" class="col-12 desc" style="display: none;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas, officia nam? Doloribus officiis consequuntur blanditiis tempore quidem corrupti eius? Harum, quisquam ut omnis quaerat consequatur officiis tenetur eius eaque voluptatum?</h1>
                                    </div>
                                </div>
                            </article>
                            
                        </div>
                        <script type="text/javascript">
                            $('.center1').slick({
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 5,
                            infinite: false,
                            dots: true,
                            arrows: false,
                            responsive: [
                                {
                                breakpoint: 768,
                                settings: {
                                    arrows: false,
                                    centerMode: true,
                                    centerPadding: '40px',
                                    slidesToShow: 3
                                }
                                },
                                {
                                breakpoint: 480,
                                settings: {
                                    arrows: false,
                                    centerMode: true,
                                    centerPadding: '40px',
                                    slidesToShow: 1
                                }
                                }
                            ]
                            });
                        </script>
                    </div>


                    <div id="agencia" class="mobile row align col-12">
                        <div class="col-12 col-lg-5 row align">
                            <h2 class="col-12 subT">Planes para agencias que buscan terecerizar gestión de campañas.</h2>

                            <h1 class="col-12" style="font-weight: 400;text-align: center;font-size: 27px;margin-bottom: 15%;"><strong style="font-weight: bolder;padding: 20px;font-size: 27px;">+10</strong>Campañas /Mes</h1>
                        </div>

                        <!--<div id="planAgencia" class="center1 align cont">
                            <article class="col-11 card">
                                <div class="row align">
                                    
                                    <div class="col-10 row align">
                                        <h1 class="col-12 precio">PLAN FULL</h1>
                                        <h1 id="arss6" class="col-12 precio"><strong style="font-size: 19px;font-weight: 400;"> Dsd</strong> $35.000 /<strong style="font-size: 19px;font-weight: 400;">mes </strong></h1>
                                        <h1 id="dolaress6" class="col-12 precio" style="display: none;">$105 /<strong style="font-size: 19px;">mes </strong></h1>
                                        <div class="col-12 align" style="justify-content: center;">
                                            <h1 style="cursor: pointer; text-decoration: underline" id="ars6" class="col-2 ars">ARS </h1>-<h1 style="cursor: pointer;" id="usd6" class="col-2 usd"> USD</h1>
                                        </div>
                                        <h1 class="col-12 desc">30% OFF / $ 3.500 c/u</h1>
                                        <button class="botonStart col-8">Comenzar ahora</button>
                                    </div>
                                </div>
                            </article>
                            <article class="col-11 card">
                                <div class="row align">
                                    
                                    <div class="col-10 row align">
                                        <h1 class="col-12 precio">PLAN BÁSICO</h1>
                                        <h1 id="arss7" class="col-12 precio"><strong style="font-size: 19px;font-weight: 400;"> Dsd</strong> $25.000 /<strong style="font-size: 19px;font-weight: 400;">mes </strong></h1>
                                        <h1 id="dolaress7" class="col-12 precio" style="display: none;">$105 /<strong style="font-size: 19px;">mes </strong></h1>
                                        <div class="col-12 align" style="justify-content: center;">
                                            <h1 style="cursor: pointer; text-decoration: underline" id="ars7" class="col-2 ars">ARS </h1>-<h1 style="cursor: pointer;" id="usd7" class="col-2 usd"> USD</h1>
                                        </div>
                                        <h1 class="col-12 desc">50% OFF / $ 2.500 c/u</h1>
                                        <button class="botonStart col-8">Comenzar ahora</button>
                                    </div>
                                </div>
                            </article>
                            
                        </div>
                        <script type="text/javascript">
                            $('#planAgencia').slick({
                            centerMode: true,
                            centerPadding: '60px',
                            slidesToShow: 1,
                            infinite: false,
                            dots: true,
                            arrows: false,
                            adaptiveHeight:true,
                            responsive: [
                                {
                                breakpoint: 768,
                                settings: {
                                    arrows: false,
                                    centerMode: true,
                                    centerPadding: '40px',
                                    slidesToShow: 3
                                }
                                },
                                {
                                breakpoint: 480,
                                settings: {
                                    arrows: false,
                                    centerMode: true,
                                    centerPadding: '40px',
                                    slidesToShow: 1
                                }
                                }
                            ]
                            });
                        </script>-->
           

                        <div class="carousel center1 cont" data-flickity='{"prevNextButtons": false }'>
                            <article class="col-11 col-lg-5 card carousel-cell">
                                <div class="row align">
                                    
                                    <div class="col-10 row align">
                                        <h1 class="col-12 precio">PLAN FULL</h1>
                                        <h1 id="arss6" class="col-12 precio"><strong style="font-size: 19px;font-weight: 400;"> Dsd</strong> $ 35.000 /<strong style="font-size: 19px;font-weight: 400;">mes </strong></h1>
                                        <h1 id="dolaress6" class="col-12 precio" style="display: none;">$105 /<strong style="font-size: 19px;">mes </strong></h1>
                                        <div class="col-12 align" style="justify-content: center;">
                                            <h1 style="cursor: pointer; text-decoration: underline" id="ars6" class="col-2 ars">ARS </h1>-<h1 style="cursor: pointer;" id="usd6" class="col-2 usd"> USD</h1>
                                        </div>
                                        <h1 class="col-12 desc">30% OFF / $ 3.500 c/u</h1>
                                        <button class="botonStart col-8">Comenzar ahora</button>
                                    </div>
                                </div>
                            </article>
                            <article class="col-11 col-lg-5 card carousel-cell">
                                <div class="row align">
                                    
                                    <div class="col-10 row align">
                                        <h1 class="col-12 precio">PLAN BÁSICO</h1>
                                        <h1 id="arss7" class="col-12 precio"><strong style="font-size: 19px;font-weight: 400;"> Dsd</strong> $ 25.000 /<strong style="font-size: 19px;font-weight: 400;">mes </strong></h1>
                                        <h1 id="dolaress7" class="col-12 precio" style="display: none;">$105 /<strong style="font-size: 19px;">mes </strong></h1>
                                        <div class="col-12 align" style="justify-content: center;">
                                            <h1 style="cursor: pointer; text-decoration: underline" id="ars7" class="col-2 ars">ARS </h1>-<h1 style="cursor: pointer;" id="usd7" class="col-2 usd"> USD</h1>
                                        </div>
                                        <h1 class="col-12 desc">50% OFF / $ 2.500 c/u</h1>
                                        <button class="botonStart col-8">Comenzar ahora</button>
                                    </div>
                                </div>
                            </article>
                        </div>

                        
                        

                    
                    


                    <script type="text/javascript">
                        $("#emp").click(function(){
                            document.getElementById("empresa").style.left = "0%"
                            document.getElementById("agencia").style.left = "-100%"
                            document.getElementById("agencia").style.display = "none"
                            document.getElementById("empresa").style.display = "flex"
                            
                            document.getElementById("emp").classList.add("seleccionado")
                            document.getElementById("emp").classList.remove("deseleccionado")
                            document.getElementById("age").classList.add("deseleccionado")
                            document.getElementById("age").classList.remove("seleccionado")
                        });
                        </script>
                        <script type="text/javascript">
                            $("#age").click(function(){
                                document.getElementById("agencia").style.left = "0%"
                                document.getElementById("empresa").style.left = "-100%"
                                document.getElementById("empresa").style.display = "none"
                                document.getElementById("agencia").style.display = "flex"
                                document.getElementById("agencia").style.position = "relative"
                                document.getElementById("age").classList.add("seleccionado")
                                document.getElementById("age").classList.remove("deseleccionado")
                                document.getElementById("emp").classList.add("deseleccionado")
                                document.getElementById("emp").classList.remove("seleccionado")
                            });
                    </script>



                </section>

                <div class="col-12 align fondo">
                    <section id="faqs" class="row align preguntas" style="width: 100% !important; padding-top: 21px;">
                        <p id="icono45" class="preg col-11 col-lg-7" style="display: flex;justify-content: space-between;" data-toggle="collapse" data-target="#content">
                            ¿Qué comprende la tarifa por campaña? <i id="iicono45" class="fas fa-chevron-down 1 fa-cerrado"></i>
                        </p>
                        <p class="col-12 pregRta col-lg-7 collapse" id="content" style="justify-content: space-between;">
                           data-aos="fade-right" data-aos-duration="1300"  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos esse nisi ipsa natus totam sint voluptatum soluta, hic dolorum in. Similique error nemo cumque numquam, est optio natus quas reiciendis?
                        </p>

                        <p id="icono46" class="preg col-11 col-lg-7" data-toggle="collapse" data-target="#content2" style="display: flex;justify-content: space-between;">
                            ¿Qué delimita cada campaña? <i id="iicono46" class="fas fa-chevron-down 2 fa-cerrado"></i>
                        </p>
                        <p class="col-12 pregRta col-lg-7 collapse" id="content2" style="justify-content: space-between;">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos esse nisi ipsa natus totam sint voluptatum soluta, hic dolorum in. Similique error nemo cumque numquam, est optio natus quas reiciendis?
                        </p>
                        <p id="icono47" class="preg col-11 col-lg-7" data-toggle="collapse" data-target="#content3" style="display: flex;justify-content: space-between;">
                            ¿Qué costos adicionales a los exhibidos hay? <i id="iicono47" class="fas fa-chevron-down 3 fa-cerrado"></i>
                        </p>
                        <p class="col-12 pregRta col-lg-7 collapse" id="content3" style="justify-content: space-between;">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos esse nisi ipsa natus totam sint voluptatum soluta, hic dolorum in. Similique error nemo cumque numquam, est optio natus quas reiciendis?
                        </p>
                        <p id="icono48" class="preg col-11 col-lg-7" data-toggle="collapse" data-target="#content4" style="display: flex;justify-content: space-between;">
                            ¿Cuántas campañas son adecuadas para mi organización? <i id="iicono48"  class="fas fa-chevron-down  fa-cerrado"></i>
                        </p>
                        <p class="col-12 pregRta col-lg-7 collapse" id="content4" style="justify-content: space-between;">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos esse nisi ipsa natus totam sint voluptatum soluta, hic dolorum in. Similique error nemo cumque numquam, est optio natus quas reiciendis?
                        </p>
                        <p id="icono49" class="preg col-11 col-lg-7" data-toggle="collapse" data-target="#content5" style="display: flex;justify-content: space-between;">
                            ¿Qué metodos de pago aceptan? <i id="iicono49" class="fas fa-chevron-down  fa-cerrado"></i>
                        </p>
                        <p class="col-12 pregRta col-lg-7 collapse" id="content5" style="justify-content: space-between;">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos esse nisi ipsa natus totam sint voluptatum soluta, hic dolorum in. Similique error nemo cumque numquam, est optio natus quas reiciendis?
                        </p>
                        <p id="icono50" class="preg col-11 col-lg-7" data-toggle="collapse" data-target="#content6" style="display: flex;justify-content: space-between;">
                            ¿Cuándo se paga por los servicios? <i id="iicono50"  class="fas fa-chevron-down  fa-cerrado"></i>
                        </p>
                        <p class="col-12 pregRta col-lg-7 collapse" id="content6" style="justify-content: space-between;">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos esse nisi ipsa natus totam sint voluptatum soluta, hic dolorum in. Similique error nemo cumque numquam, est optio natus quas reiciendis?
                        </p>
                        <p id="icono51" class="preg col-11 col-lg-7" data-toggle="collapse" data-target="#content7" style="display: flex;justify-content: space-between;">
                            ¿Hay devolución en caso de cancelación de servicios? <i id="iicono51" class="fas fa-chevron-down  fa-cerrado"></i>
                        </p>
                        <p class="col-12 pregRta col-lg-7 collapse" id="content7" style="justify-content: space-between;">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos esse nisi ipsa natus totam sint voluptatum soluta, hic dolorum in. Similique error nemo cumque numquam, est optio natus quas reiciendis?
                        </p>
                        <p id="icono52" class="preg col-11 col-lg-7" data-toggle="collapse" data-target="#content8" style="display: flex;justify-content: space-between;">
                            ¿Ofrecen planes con descuento? <i id="iicono52" class="fas fa-chevron-down  fa-cerrado"></i>
                        </p>
                        <p class="col-12 pregRta col-lg-7 collapse" id="content8" style="justify-content: space-between;">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos esse nisi ipsa natus totam sint voluptatum soluta, hic dolorum in. Similique error nemo cumque numquam, est optio natus quas reiciendis?
                        </p>
                        <p id="icono53" class="preg col-11 col-lg-7" data-toggle="collapse" data-target="#content9" style="display:flex;justify-content: space-between;">
                            ¿Hay garantía de resultados? <i id="iicono53" class="fas fa-chevron-down fa-cerrado"></i></i>
                        </p>
                        <p class="col-12 pregRta col-lg-7 collapse" id="content9" style="justify-content: space-between;">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos esse nisi ipsa natus totam sint voluptatum soluta, hic dolorum in. Similique error nemo cumque numquam, est optio natus quas reiciendis?
                        </p>
                    </section>
                </div>

                <section class="row align socios mobile" id="socios">
                    <div class="socios row align col-12" style="margin-left: 0px !important;">
                        <h1 class="col-12 align nuestrosS">NUESTROS SOCIOS</h1>
                        <div class="col-11 row align" style="justify-content: space-around;">
                            <div class="col-12 col-lg-12 align" style="justify-content: space-between;">
                                <img data-aos="fade-right" data-aos-duration="700" src="./Images/Logo-PaP.png" alt="" class="col-5 sociosImgs">
                                <img data-aos="fade-right" data-aos-duration="700" src="./Images/Logo-OCIO2.png" alt="" class="col-5 sociosImgs">
                            </div>
                            <div class="col-12 col-lg-12 align" style="justify-content: space-between;">
                                <img data-aos="fade-right" data-aos-duration="700" src="./Images/LOGO-LIMA1.png" alt="" class="col-5 sociosImgs">
                                <img data-aos="fade-right" data-aos-duration="700" src="./Images/LOGO-EEAF2.png" alt="" class="col-5 sociosImgs">
                            </div>
                            <div class="col-12 col-lg-12 align" style="justify-content: space-between;">
                                <img data-aos="fade-right" data-aos-duration="700" src="./Images/LOGO-LED2.png" alt="" class="col-5 sociosImgs">
                                <img data-aos="fade-right" data-aos-duration="700" src="./Images/LOGO-ESM2.png" class="col-5 sociosImgs">
                            </div>
                            <div class="col-12 col-lg-12 align" style="justify-content: space-between;">
                                <img data-aos="fade-right" data-aos-duration="700" src="./Images/LOGO-AMAN2.png" alt="" class="col-5 sociosImgs">
                                <img data-aos="fade-right" data-aos-duration="700" src="./Images/Logo-SET-IDEAS.png" alt="" class="col-5 sociosImgs">
                            </div>
                        </div>
                        <p data-aos="fade-right" data-aos-duration="700" class="col-12 muchos">y muchos más!</p>
                    </div>
                </section>
                <section class="row align socios desk" id="socios2">
                    <div class="socios align row col-12" >
                        <h1 class="col-12 align nuestrosS">NUESTROS SOCIOS</h1>
                        <div class="col-12 row align" style="justify-content: space-around;">
                            <div class="col-12 col-lg-6 align" style="justify-content: space-around;">
                                <img data-aos="zoom-in" data-aos-duration="700" src="./Images/Logo-PaP.png" alt="" class="col-3 sociosImgs">
                                <img data-aos="zoom-in" data-aos-duration="700" src="./Images/Logo-OCIO2.png" alt="" class="col-3 sociosImgs">
                            </div>
                            <div class="col-12 col-lg-6 align" style="justify-content: space-around;">
                                <img data-aos="zoom-in" data-aos-duration="700" src="./Images/LOGO-LIMA1.png" alt="" class="col-3 sociosImgs">
                                <img data-aos="zoom-in" data-aos-duration="700" src="./Images/LOGO-EEAF2.png" alt="" class="col-3 sociosImgs">
                            </div>
                            <div class="col-12 col-lg-6 align" style="justify-content: space-around;">
                                <img data-aos="zoom-in" data-aos-duration="700" src="./Images/LOGO-LED2.png" alt="" class="col-3 sociosImgs">
                                <img data-aos="zoom-in" data-aos-duration="700" src="./Images/LOGO-ESM2.png" class="col-3 sociosImgs">
                            </div>
                            <div class="col-12 col-lg-6 align" style="justify-content: space-around;">
                                <img data-aos="zoom-in" data-aos-duration="700" src="./Images/LOGO-AMAN2.png" alt="" class="col-3 sociosImgs">
                                <img data-aos="zoom-in" data-aos-duration="700" src="./Images/Logo-SET-IDEAS.png" alt="" class="col-3 sociosImgs">
                            </div>
                        </div>
                        <p class="col-12 muchos" style="font-size: 26px;">y muchos más!</p>
                    </div>
                </section>

                <div class="col-12 row align fondo"  style="padding: 0px;">
                    <section id="nosotros" class="row align nosotros" id="nosotros" style="padding: 0px;">
                        <h1 class="col-12 align nuestrosS">NOSOTROS</h1>


                        <div class="col-12 col-lg-6 align nosotrosDiv">
                            <div data-aos="zoom-in" data-aos-duration="700" id="mis" class="col-4 col-lg-3 logosT row align" style="cursor: pointer; opacity: 20%;">
                                <img src="./Images/logo-mision2.png" alt="" class="col-12 col-lg-6 loguitos">
                                <h1 class="tituloNos1 col-12">MISIÓN</h1>
                            </div>
                            <div data-aos="zoom-in" data-aos-duration="700" id="vis" class="col-4 col-lg-3 logosT row align" style="opacity: 20%; cursor: pointer;">
                                <img src="./Images/logo-vision2.png" alt="" class="col-12 col-lg-6 loguitos">
                                <h1 class="tituloNos1 col-12">VISIÓN</h1>
                            </div>
                            <div data-aos="zoom-in" data-aos-duration="700" id="val" class="col-4 col-lg-3 logosT row align" style=" cursor: pointer;">
                                <img src="./Images/logo-valores2.png" alt="" class="col-12 col-lg-6 loguitos">
                                <h1 class="tituloNos1 col-12">VALORES</h1>
                            </div>


                        </div>

                        <div data-aos="zoom-in" data-aos-duration="700" id="mision" class="single-item row align car2 col-lg-7" style="margin-bottom: 0px !important;margin-top: 30px !important;display: none;">
                            <p class="item active col-12 textNos2">Ayudar a tu empresa a alcanzar todo el potencial de sus canales digitales, maximizando las conversiones en cada fase del embudo al menor costo posible.</p>
                        </div>

                        <div data-aos="zoom-in" data-aos-duration="700" id="vision" class="single-item row align car2 col-lg-7" style="margin-bottom: 0px !important;margin-top: 30px !important;display: none;">
                            <p class="item active col-12 textNos2">Que cualquier empresa del mundo pueda acceder ágilmente a nuestras soluciones ajustadas a sus recursos, revolucionando el marketing digital con la filosofía del performance.</p>
                        </div>

                        <!-- Wrapper for slides -->
                        <div data-aos="zoom-in" data-aos-duration="700" id="valores" class="single-item2 row align car2 col-lg-7" style="margin-bottom: 0px !important;margin-top: 30px !important;">
                            <div class="item col-12">
                                <p class="textNos2 col-12" style="padding-bottom: 0px;">AMBICIOSOS</p>
                                <p class="active textNos2 col-12">No nos conformamos con alcanzar las metas, nuestro dogma es la mejora continua.</p>
                            </div>
                    
                            <div class="item col-12">
                                <p class="textNos2 col-12" style="padding-bottom: 0px;">CIENTÍFICOS</p>
                                <p class="active textNos2 col-12">Todo lo que hacemos se fundamenta con datos, analítica y experimentación.</p>
                            </div>
                    
                            <div class="item col-12">
                                <p class="textNos2 col-12" style="padding-bottom: 0px;">VERSÁTILES</p>
                                <p class="active textNos2 col-12">Nos adaptamos a cualquier contexto: diversidad de mercados, recursos y equipos de trabajo.</p>
                            </div>

                            <div class="item col-12">
                                <p class="textNos2 col-12" style="padding-bottom: 0px;">PASIÓN</p>
                                <p class="active textNos2 col-12">Nos entusiasma lo que hacemos y la forma en que lo hacemos. Tenemos pasión por los resultados.</p>
                            </div>

                            <div class="item col-12">
                                <p class="textNos2 col-12" style="padding-bottom: 0px;">EFICIENTES</p>
                                <p class="active textNos2 col-12">Conscientes de los recursos con que contamos para lograr los objetivos. Garantizar el ROL es nuestro primer mandamiento.</p>
                            </div>

                            <div class="item col-12">
                                <p class="textNos2 col-12" style="padding-bottom: 0px;">COMPROMETIDOS</p>
                                <p class="active textNos2 col-12">Las metas de nuestros clientes se vuelven nuestras metas y haremos todo para cumplirlas, respondiendo proactivamente ante cualquier adversidad.</p>
                            </div>

                            <div class="item col-12">
                                <p class="textNos2 col-12" style="padding-bottom: 0px;">PIONEROS</p>
                                <p class="active textNos2 col-12">En este rubro en constante evolución nos mantenemos siempre en la cresta de la ola, atentos a nuevas tecnologías para sumar a nuestro arsenal.</p>
                            </div>
                        </div>

                        <script type="text/javascript">
                            $('#valores').slick({
                                arrows:false,
                                dots:true,
                                autoplay: false
                            });
                        </script> 

                        

                    

                        

                        <script type="text/javascript">
                            $("#mis").click(function(){
                                $("#vision").fadeOut();
                                $("#valores").fadeOut();
                                $("#mision").fadeIn();
                                document.getElementById("mis").style.opacity = "100%"
                                document.getElementById("val").style.opacity = "20%"
                                document.getElementById("vis").style.opacity = "20%"
                                document.getElementById("vision").style.display = "none"
                                document.getElementById("valores").style.display = "none"
                                document.getElementById("mision").style.display = "flex"
                            });
                        </script>
                        <script type="text/javascript">
                            $("#vis").click(function(){
                                $("#mision").fadeOut();
                                $("#valores").fadeOut();
                                $("#vision").fadeIn();
                                document.getElementById("vis").style.opacity = "100%"
                                document.getElementById("val").style.opacity = "20%"
                                document.getElementById("mis").style.opacity = "20%"
                                document.getElementById("mision").style.display = "none"
                                document.getElementById("valores").style.display = "none"
                                document.getElementById("vision").style.display = "flex"
                            });
                        </script>
                        <script type="text/javascript">
                            $("#val").click(function(){
                                $("#mision").fadeOut();
                                $("#vision").fadeOut();
                                $("#valores").fadeIn();
                                document.getElementById("val").style.opacity = "100%"
                                document.getElementById("vis").style.opacity = "20%"
                                document.getElementById("mis").style.opacity = "20%"
                                document.getElementById("mision").style.display = "none"
                                document.getElementById("vision").style.display = "none"
                                document.getElementById("valores").style.display = "flex"
                            });
                        </script>


                        <!--<article class="col-8 cardNos mobile">
                            <img src="./Images/logo-mision.png" alt="" class="col-4 logo">
                            <h1 class="tituloNos col-12">MISIÓN</h1>
                            <p class="col-12 textNos">Ayudar a tu empresa a alcanzar todo el potencial de sus canales digitales, maximizando las conversiones en cada fase del embudo al menor costo posible.</p>
                        </article>
                        <article class="col-8 cardNos mobile">
                            <img src="./Images/logo-vision.png" alt="" class="col-4 logo">
                            <h1 class="tituloNos col-12">MISIÓN</h1>
                            <p class="col-12 textNos">Ayudar a tu empresa a alcanzar todo el potencial de sus canales digitales, maximizando las conversiones en cada fase del embudo al menor costo posible.</p>
                        </article>
                        <article class="col-8 cardNos mobile">
                            <img src="./Images/logo-valores.png" alt="" class="col-4 logo">
                            <h1 class="tituloNos col-12">MISIÓN</h1>-->
                            
                            
                                <!-- Wrapper for slides -->
                                <!--<div class="single-item row align car2">
                                    <p class="item active col-12 textNos1">Ayudar a tu empresa a alcanzar todo el potencial de sus canales digitales, maximizando las conversiones en cada fase del embudo al menor costo posible.</p>
                            
                                    <p class="item col-12 textNos1">Ayudar a tu empresa a alcanzar todo el potencial de sus canales digitales, maximizando las conversiones en cada fase del embudo al menor costo posible.</p>
                            
                                    <p class="item col-12 textNos1">Ayudar a tu empresa a alcanzar todo el potencial de sus canales digitales, maximizando las conversiones en cada fase del embudo al menor costo posible.</p>
        
                                    <p class="item col-12 textNos1">Ayudar a tu empresa a alcanzar todo el potencial de sus canales digitales, maximizando las conversiones en cada fase del embudo al menor costo posible.</p>
        
                                    <p class="item col-12 textNos1">Ayudar a tu empresa a alcanzar todo el potencial de sus canales digitales, maximizando las conversiones en cada fase del embudo al menor costo posible.</p>
                                </div>

                            <script type="text/javascript">
                                $('.single-item').slick({
                                    prevArrow: false,
                                    nextArrow: false,
                                    dots:true
                                });
                            </script>
                                
                            </article>-->
                        

                            <div data-aos="zoom-in-up" data-aos-duration="700" data-aos-delay="50" class="nosCar align col-12 col-lg-9" style="justify-content: space-around; width: 100%;padding: 0px;">
                                <div class="imgNos col-5" style="height: 370px !important;">
                                    <img src="./Images/FOTO 1.png" alt="" class="foto col-12">
                                    <h1 class="col-12 nombre">Agustín Ibañez</h1>
                                    <p class="col-12 puesto">PLANNING DIRECTOR
                                         <br> /Co-fundador </br>
                                    </p>
                                </div>
                                <div class="imgNos col-5" style="height: 370px !important;">
                                    <img src="./Images/FOTO-Gonzalo Nazar.png" alt="" class="foto col-12">
                                    <h1 class="col-12 nombre">Gonzalo Nazar</h1>
                                    <p class="col-12 puesto">OPERATIONS DIRECTOR <br> /Co-Fundador </br></p>
                                </div>
                                <div class="imgNos col-5" style="height: 370px !important;">
                                    <img src="./Images/computer.png" alt="" class="foto col-12">
                                    <h1 class="col-12 nombre">EQUIPO GRÁFICO Y AUDIOVISUAL</h1>
                                    
                                </div>
                                <div class="imgNos col-5" style="height: 370px !important;">
                                    <img src="./Images/web-programming.png" alt="" class="foto col-12">
                                    <h1 class="col-12 nombre">EQUIPO UX y PROGRAMACIÓN</h1>
                                    
                                </div>
                                <div class="imgNos col-5" style="height: 370px !important;">
                                    <img src="./Images/equipo-contenido.png" alt="" class="foto col-12">
                                    <h1 class="col-12 nombre">EQUIPO CONTENIDO Y COMUNIDAD</h1>
                                
                                </div>
                                <div class="imgNos col-5" style="height: 370px !important;">
                                    <img src="./Images/email-mktt.png" alt="" class="foto col-12">
                                    <h1 class="col-12 nombre" style="padding: 8px;padding-top: 0;">EQUIPO EMAIL MKT SEM Y SMM</h1>
                                
                                </div>
                                <div class="imgNos col-5" style="height: 370px !important;">
                                    <img src="./Images/analitica.png" alt="" class="foto col-12">
                                    <h1 class="col-12 nombre">EQUIPO ANALÍTICA Y MEDICIÓN</h1>
                                
                                </div>
                                <div class="imgNos col-5" style="height: 370px !important;">
                                    <img src="./Images/unirse-equipo.png" alt="" class="foto col-12">
                                    <h1 class="col-12 nombre">UNITE A NUESTRO EQUIPO</h1>
                                
                                </div>
                            </div>                
                            <script type="text/javascript">
                                $('.nosCar').slick({
                                    infinite: true,
                                    slidesToScroll: 4,
                                    arrows: true,
                                    slidesToShow: 4,
                                    responsive: [
                                        {
                                        breakpoint: 768,
                                        settings: {
                                            arrows: false,
                                            centerMode: false,
                                            centerPadding: '40px',
                                            swipeToSlide: true,
                                            slidesToShow: 2
                                        }
                                        },
                                        {
                                        breakpoint: 480,
                                        settings: {
                                            arrows: false,
                                            centerMode: false,
                                            centerPadding: '15px',
                                            swipeToSlide: true,
                                            slidesToShow: 2
                                        }
                                        }
                                    ]
                                });
                            </script>           
                    </section>
                </div>

                <div class="col-12 row align fondo2">
                    <section class="row align contacto" id="contacto">
                        <h1 class="col-12 align contactoT">CONTACTO</h1>

                        <h3 data-aos="fade-in" class="subtitle1">Contactanos para hacer <br> crecer tu negocio </br></h3>
                        

                        <div data-aos="fade-up" data-aos-duration="700" data-aos-anchor-placement="top-bottom" id="email" class="align row">
                            <h3 class="msj col-11">/ Dejanos tu mensaje</h3>

                            <div id="email1" class="email align col-12 col-lg-7" style="justify-content: space-around;">
                                <input class="email-input col-10" type="email" placeholder="Nombre"></input>
                                <button type="submit" class="btnSub"><i class="fas fa-arrow-right col-1"></i></button>
                            </div>
                            <div id="telefono" class="email align col-12 col-lg-7" style="justify-content: space-around;display: none;">
                                <input class="email-input col-10" type="email" placeholder="Dejanos tu telefono"></input>
                                <button type="submit" class="btnSub"><i class="fas fa-arrow-right col-1"></i></button>
                            </div>
                            <div id="mensaje" class="email align col-12 col-lg-7" style="justify-content: space-around;display: none;">
                                <input class="email-input col-10" type="email" placeholder="Dejanos tu Mensaje"></input>
                                <button type="submit" class="btnSub"><i class="fas fa-arrow-right col-1"></i></button>
                            </div>

                            <div class="col-12 col-lg-8 align">
                                <h3 id="emailClick" class="opciones col-3">Email</h3>
                                <h3 id="telClick" class="opciones col-3">Telefono</h3>
                                <h3 id="msjClick" class="opciones col-3">Mensaje</h3>
                            </div>
                        </div>
                        <script type="text/javascript">
                            $("#emailClick").click(function(){
                                $("#mensaje").fadeOut();
                                $("#telefono").fadeOut();
                                $("#email1").fadeIn();
                                
                                document.getElementById("mensaje").style.display = "none"
                                document.getElementById("telefono").style.display = "none"
                                document.getElementById("email1").style.display = "flex"
                            });
                            $("#telClick").click(function(){
                                $("#email1").fadeOut();
                                $("#mensaje").fadeOut();
                                $("#telefono").fadeIn();
                                
                                document.getElementById("mensaje").style.display = "none"
                                document.getElementById("email1").style.display = "none"
                                document.getElementById("telefono").style.display = "flex"
                            });
                            $("#msjClick").click(function(){
                                $("#email1").fadeOut();
                                $("#telefono").fadeOut();
                                $("#mensaje").fadeIn();
                                
                                document.getElementById("telefono").style.display = "none"
                                document.getElementById("email1").style.display = "none"
                                document.getElementById("mensaje").style.display = "flex"
                            });
                        </script>




                        <div data-aos="fade-up" data-aos-duration="700" data-aos-anchor-placement="top-bottom" id="calen" class="align row" style="display: none;">
                            <h3 class="msj col-11">/ Agendá una videollamada</h3>

                            <div id="hora" class="email align col-12 col-lg-7" style="justify-content: space-around;">
                                <input class="email-input col-10" type="email" placeholder="Fecha"></input>
                                <button type="submit" class="btnSub"><i class="fas fa-arrow-right col-1"></i></button>
                            </div>
                            <div id="email2" class="email align col-12 col-lg-7" style="justify-content: space-around;display: none;">
                                <input class="email-input col-10" type="email" placeholder="Cual es tu mail?"></input>
                                <button type="submit" class="btnSub"><i class="fas fa-arrow-right col-1"></i></button>
                            </div>
                            <div id="nombre" class="email align col-12 col-lg-7" style="justify-content: space-around;display: none;">
                                <input class="email-input col-10" type="email" placeholder="Nombre"></input>
                                <button type="submit" class="btnSub"><i class="fas fa-arrow-right col-1"></i></button>
                            </div>
                            <div id="asunto" class="email align col-12 col-lg-7" style="justify-content: space-around;display: none;">
                                <input class="email-input col-10" type="email" placeholder="Asunto"></input>
                                <button type="submit" class="btnSub"><i class="fas fa-arrow-right col-1"></i></button>
                            </div>

                            <div class="col-12 col-lg-7 align">
                                <h3 id="horaClick" class="opciones col-3">Hora</h3>
                                <h3 id="emailClick2" class="opciones col-3">Email</h3>
                                <h3 id="nombreClick" class="opciones col-3">Nombre</h3>
                                <h3 id="asuntoClick" class="opciones col-3">Asunto</h3>
                            </div>
                        </div>
                        <script type="text/javascript">
                            $("#horaClick").click(function(){
                                $("#email1").fadeOut();
                                $("#nombre").fadeOut();
                                $("#asunto").fadeOut();
                                $("#hora").fadeIn();
                                
                                document.getElementById("asunto").style.display = "none"
                                document.getElementById("nombre").style.display = "none"
                                document.getElementById("email2").style.display = "none"
                                document.getElementById("hora").style.display = "flex"
                            });
                            $("#emailClick2").click(function(){
                                $("#asunto").fadeOut();
                                $("#nombre").fadeOut();
                                $("#hora").fadeOut();
                                $("#email2").fadeIn();
                                
                                document.getElementById("hora").style.display = "none"
                                document.getElementById("asunto").style.display = "none"
                                document.getElementById("nombre").style.display = "none"
                                document.getElementById("email2").style.display = "flex"
                            });
                            
                            $("#nombreClick").click(function(){
                                $("#asunto").fadeOut();
                                $("#email2").fadeOut();
                                $("#hora").fadeOut();
                                $("#nombre").fadeIn();
                                
                                document.getElementById("hora").style.display = "none"
                                document.getElementById("asunto").style.display = "none"
                                document.getElementById("email2").style.display = "none"
                                document.getElementById("nombre").style.display = "flex"
                            });
                            $("#asuntoClick").click(function(){
                                $("#nombre").fadeOut();
                                $("#email2").fadeOut();
                                $("#hora").fadeOut();
                                $("#asunto").fadeIn();
                                
                                document.getElementById("hora").style.display = "none"
                                document.getElementById("nombre").style.display = "none"
                                document.getElementById("email2").style.display = "none"
                                document.getElementById("asunto").style.display = "flex"
                            });
                        </script>




                        <div data-aos="fade-up" data-aos-duration="700" data-aos-anchor-placement="top-bottom" id="num" class="align row" style="display: none;">
                            <h3 class="msj col-11">/ Llamanos</h3>

                            <div class="email align col-12 col-lg-7" style="justify-content: space-around;">
                                <a href="https://api.whatsapp.com/send?phone=541167048339&text=Hola."><p class="numWhats col-12">+54 9 351 702-0235</p></a>
                            </div>

                            <div class="col-12 col-lg-8 align">
                                <h3 class="opciones col-12">Atención de lunes a viernes, de 9 a 18 hs. GMT-0300 (hora estándar de Argentina)<br><br>De <cite id="hora-start"></cite> a <cite id="hora-end"></cite> hs horario local.</h3>
                                
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="700" data-aos-anchor-placement="top-bottom" id="wpp" class="align row" style="display: none;">
                            <h3 class="msj col-11">/ Whatsappeanos</h3>

                            <div class="email align col-12 col-lg-7" style="justify-content: space-around;">
                                <a href="https://api.whatsapp.com/send?phone=541167048339&text=Hola."><p class="numWhats col-12">+54 9 351 702-0235</p></a>
                            </div>

                            <div class="col-12 col-lg-8 align">
                                <h3 class="opciones col-12">Atención de lunes a viernes, de 9 a 18 hs.</h3>
                            </div>
                        </div>


                        <div data-aos="zoom-in-up" data-aos-duration="700" class="col-12 col-lg-7 align iconos" style="justify-content: space-around;">
                            <button id="mail" class="col-3 iconBut" style="border-bottom: 1px solid grey;"><img class="imgLogos" src="./Images/samsung-mail.png" alt="" style="width: 100%;"></button>
                            <button id="calendar" class="col-3 iconBut"><img class="imgLogos" src="./Images/samsung-calendar.png" alt="" style="width: 100%;"></i></button>
                            <button id="numero" class="col-3 iconBut"><img class="imgLogos" src="./Images/samsung-phone.png" alt="" style="width: 100%;"></i></button>
                            <button id="whats" class="col-3 iconBut"><img class="imgLogos" src="./Images/samsung-wpp2.png" alt="" style="width: 100%;"></i></button>
                        </div>




                        <script type="text/javascript">
                            $("#mail").click(function(){
                                $("#calen").fadeOut();
                                $("#phone").fadeOut();
                                $("#wpp").fadeOut();
                                $("#mail").fadeIn();
                                document.getElementById("email").style.display = "flex"
                                document.getElementById("calen").style.display = "none"
                                document.getElementById("num").style.display = "none"
                                document.getElementById("wpp").style.display = "none"
                                document.getElementById("mail").style.borderBottom = "1px solid grey"
                                document.getElementById("calendar").style.borderBottom = "none"
                                document.getElementById("numero").style.borderBottom = "none"
                                document.getElementById("whats").style.borderBottom= "none"
                        });
                        </script>
                        <script type="text/javascript">
                            $("#calendar").click(function(){
                                $("#email").fadeOut();
                                $("#phone").fadeOut();
                                $("#wpp").fadeOut();
                                $("#calen").fadeIn();
                                document.getElementById("email").style.display = "none"
                                document.getElementById("num").style.display = "none"
                                document.getElementById("wpp").style.display = "none"
                                document.getElementById("calen").style.display = "flex"
                                document.getElementById("calendar").style.borderBottom = "1px solid grey"
                                document.getElementById("mail").style.borderBottom = "none"
                                document.getElementById("numero").style.borderBottom = "none"
                                document.getElementById("whats").style.borderBottom = "none"
                                
                        });
                        </script>
                        <script type="text/javascript">
                            $("#numero").click(function(){
                                $("#email").fadeOut();
                                $("#phone").fadeOut();
                                $("#calen").fadeOut();
                                $("#num").fadeIn();
                                document.getElementById("email").style.display = "none"
                                document.getElementById("calen").style.display = "none"
                                document.getElementById("wpp").style.display = "none"
                                document.getElementById("num").style.display = "flex"
                                document.getElementById("numero").style.borderBottom = "1px solid grey"
                                document.getElementById("calendar").style.borderBottom = "none"
                                document.getElementById("mail").style.borderBottom = "none"
                                document.getElementById("whats").style.borderBottom = "none"
                                
                        });
                        </script>
                        <script type="text/javascript">
                            $("#whats").click(function(){
                                $("#email").fadeOut();
                                $("#phone").fadeOut();
                                $("#calen").fadeOut();
                                $("#wpp").fadeIn();
                                document.getElementById("email").style.display = "none"
                                document.getElementById("calen").style.display = "none"
                                document.getElementById("num").style.display = "none"
                                document.getElementById("wpp").style.display = "flex"
                                document.getElementById("whats").style.borderBottom = "1px solid grey"
                                document.getElementById("calendar").style.borderBottom = "none"
                                document.getElementById("numero").style.borderBottom = "none"
                                document.getElementById("mail").style.borderBottom = "none"
                        });
                        </script>



                    </section>
                </div>
            </div>
        </div>       
    </main>

    <footer class="mobile">
        <div class="container-fluid">
            <div class="row align" style="justify-content: space-between;">

                <img src="./Images/kliv-logo-blanco.png" alt="" class="col-5 col-lg-2 logoFoot">
                <div class="col-6 align iconosFoot" style="justify-content: center;"> 
                    <i class="fab fa-facebook-square col-2 icFoot"></i>
                    <i class="fab fa-instagram col-2 icFoot" style="margin-left: 20px;"></i>
                </div>
                <p class="direc col-12 col-lg-8">Rosario de Sta Fé 1106 · piso 6 · Of. E · x5004 · Córdoba, Argentina</p>
                

            </div>
        </div>
    </footer>

    <footer class="desk col-12">
        <div class="container-fluid">
            <div class="row align" style="width: 90% !important;margin: auto;">
                <div class="col-6 row align">
                    <img src="./Images/kliv-logo-blanco.png" alt="" class="col-3  logoFoot">
                </div>
                <div class="col-6 align iconosFoot" style="justify-content: center;"> 
                    <p class="direc col-2" style="margin:0">Seguinos:</p>
                    <i class="fab fa-facebook-square col-2 icFoot" style="cursor: pointer;"></i>
                    <i class="fab fa-instagram col-2 icFoot" style="cursor: pointer;"></i>
                </div>
                
                <p class="direc col-12">Rosario de Sta Fé 1106 · piso 6 · Of. E · x5004 · Córdoba, Argentina</p>
                

            </div>
        </div>
    </footer>

    
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="./javascripts/aos.js"></script>

    <script src="//code.jquery.com/jquery-latest.min.js"></script>
    <script src="//unslider.com/unslider.js"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    
    <script>
      AOS.init();
    </script>
    
</body>

<script src="./javascripts/js.js"></script>

<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>


<script type="text/javascript">
$(document).ready(function() {

    // $('#customRange3').change(function(){
    //     console.log($(this).val())
    //     var porcen = parseInt( $(this).val() /100*5) + 1
    //     // var porcen = porcen 
    //     console.log(porcen)
    //     if (porcen == 6) {
    //         porcen = 5;
    //     }
    //     $('.slick-dots li:nth-child('+ porcen +')').click()

    //     $('#range-cont>div').css('background-image','linear-gradient(90deg, #1E7A5E '+ $(this).val() +'% , transparent '+ $(this).val() +'% )')

    // })
var d = new Date()
var gmtHours = -d.getTimezoneOffset()/60;


var dt = new Date();
var test = dt.setHours( dt.getHours() - gmtHours );
let date = new Date( test );

var start_date = dt.setHours( 9 + 3 + gmtHours );
var end_date = dt.setHours( 18 + 3 + gmtHours );

$('#hora-start').text(new Date( start_date ).getHours() )
$('#hora-end').text(new Date( end_date ).getHours() )



setTimeout(() => {
    $('#drag-cont').load('draggable.php')
    $('#empresa .slick-track>article:first-child').addClass('not-shadow')
}, 3000);


})

</script>
</html>