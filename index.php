<?php

require 'php/connection.php';

// Traemos toda la data
$sql = $pdo->prepare("SELECT * FROM pricing");
$sql->execute(); 
$pricings = $sql->fetchAll();


// Traemos el dolar
$sql = $pdo->prepare("SELECT * FROM dolar");
$sql->execute(); 
$dolar = $sql->fetch();

$dolar = $dolar['dolar'];

$sql = $pdo->prepare("SELECT * FROM socios");
$sql->execute(); 
$socios = $sql->fetchAll();

// // Le agregamos el valor del dolar a los pricings
foreach ($pricings as $key => $pricing) {
    
    $ars_to_usd = $pricing['ars'] / $dolar;
    $ars_to_usd = floor($ars_to_usd);

    $pricings[$key]['usd'] = $ars_to_usd;

}


?>

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
    
    
    
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">


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
                    <img src="./Images/kliv-logo.png" alt="" class="col-10" style="width: 70%!important; max-height: 35px!important;">
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
                
                <br>
                <p style="text-decoration: underline; font-weight: bold;margin-top: 16px" class="ir_a_tarifas"><a href="">Tarifas x Servicios</a></p>
                <br>
                <p class="col-12 textoSaberMas">
                Millones de empresas, grandes y pequeñas, se conectan con las personas a través de anuncios en las redes sociales, convirtiéndolas en clientes y entablando relaciones duraderas. Pero en un contexto en el que los anunciantes aumentan y los usuarios se resisten cada vez más a la publicidad, conseguir rentabilidad sin una buena estrategia es cuestión de azar.
                </p>
                <p class="col-12 textoSaberMas">
                En Kliv llevamos años encontrando la fórmula idónea para diversidad de empresas, ayudando a alcanzar sus objetivos comerciales y garantizando el retorno de inversión con la filosofía del performance marketing. 
                </p>
                
                <br>

                <p class="col-12 textoSaberMas">
                    <strong class="dark">OBJETIVO Y ESTRATEGIA</strong>
                    <br>
                    La efectividad base de toda campaña radica en que sus componentes estén alineados estratégicamente hacia un mismo norte: el objetivo SMART*, siendo la brújula que orienta la ejecución de todo el proceso y permite evaluar el rendimiento. Forjamos estrategias que responden a este objetivo y a los recursos disponibles, documentando todos sus elementos en una ficha de campaña que queda disponible para que todos los equipos involucrados operen con congruencia.  
                    <br>
                    <i>* SMART: Específico, medible, alcanzable, relevante y temporal.</i>
                </p>
                <br>
                <p class="col-12 textoSaberMas">
                    <strong class="dark">FORMATOS PUBLICITARIOS</strong>
                    <br>
                    Entendiendo que no hay dos empresas iguales, las plataformas publicitarias se diseñaron para adaptarse a variedad de objetivos y estrategias en cada fase del embudo de conversión, con gran versatilidad en sus formatos publicitarios. En Kliv identificamos el óptimo para cada campaña.
                </p>
                <br>
                <p class="col-12 textoSaberMas">
                    <strong class="dark">REDACCIÓN Y DISEÑO</strong>
                    <br>
                    Contamos la historia de tu empresa o producto de formas atractivas y eficaces, captando la atención de tu audiencia meta y animándola a realizar acciones específicas. El equipo de redacción, diseñadores gráficos y audiovisuales trabaja a la par con el equipo de performance marketing alineados en la estrategia para optimizar los resultados.
                </p>
                <br>
                <p class="col-12 textoSaberMas">
                    <strong class="dark">MANEJO DE AUDIENCIAS</strong>
                    <br>
                    El mayor potencial de las plataformas publicitarias se encuentra en su capacidad de segmentación y manejo de audiencias. Irónicamente suele ser la herramienta más desaprovechada, limitando su uso a la segmentación por intereses que por sí solos no son del todo precisos. En Kliv generamos audiencias dinámicas y customizadas para cada fase del embudo, identificando patrones de comportamiento en tiempo real mediante el píxel de seguimiento web y segmentaciones lookalike que permiten encontrar a las personas con más probabilidades de realizar las acciones deseadas.
                </p>
                <br>
                <p class="col-12 textoSaberMas">
                    <strong class="dark">SEGUIMIENTO DE CONVERSIONES WEB</strong>
                    <br>
                    Además de optimizar el manejo de audiencias, el pixel de seguimiento permite monitorear el desempeño de cada campaña con redirección a la web. Configurando eventos y parámetros personalizados, medimos todas las acciones específicas que realizan los usuarios que la visitan, con una acción particular como objetivo de conversión. 
                </p>
                <br>
                <p class="col-12 textoSaberMas">
                    <strong class="dark">FOCO EN LA RENTABILIDAD</strong>
                    <br>
                    Fijar las pujas publicitarias en base al costo por impresiones o clics (CPM o CPC) no garantiza rentabilidad, ya que no son métricas vinculadas a las conversiones ni al margen de beneficio. En contraste, la estrategia de puja por adquisición (CPA) regula que el costo publicitario no supere el importe dispuesto a invertir por cada resultado y lo optimiza en el tiempo.  
                </p>
                <br>
                <p class="col-12 textoSaberMas">
                    <strong class="dark">EXPERIMENTACIÓN Y MEJORA CONTINUA</strong>
                    <br>
                    Las herramientas de experimentación de Facebook Ads (A/B Testing + Pruebas de Exclusión), sumado a metodologías que implementamos en Kliv (Smoke Test, Fake Door, Flintstone, entre otras) permiten probar hipótesis o responder preguntas específicas en relación con los objetivos comerciales, logrando identificar oportunidades de mejora e insights para optimizar la comunicación.  
                </p>
                <br>
                <p class="col-12 textoSaberMas">
                    <strong class="dark">MONITOREO E INFORMES</strong>
                    <br>
                    Exportamos los datos a una herramienta que permite crear paneles interactivos y personalizables (Data Studio), facilitando la lectura y comprensión de los resultados de manera precisa y en tiempo real. Interpretar correctamente las métricas es fundamental para conocer el impacto de las campañas en relación con los objetivos planteados. Se monitorean periódicamente para determinar si van bien encaminadas o si es necesario algún ajuste.     
                </p>
                <br>

                
            </div>
            
            
            
        </div>
        <div id="publiGoogle" class="saberMas row align" style="display: none;">
            <i id="esc2" class="fas fa-arrow-circle-left col-12" style="margin-top: 90px;margin-left: 20px; font-size: 30px;color: white;"></i>
                <div class="col-12 col-lg-9 align row serv">
                    <img src="./Images/publi-google.png" alt="" class="col-5 col-lg-2 imgS">
                    <div class="col-7 row align" style="justify-content: space-between;">
                        <h1 class="col-12 servT" style="color: white;">Publicidad en Google</h1>
                        <p class="textT col-12" style="color: white;">Anuncios en los buscadores, Google Maps, Youtube, espacios publicitarios de webs y aplicaciones asociadas, llegando a tu audiencia objetivo en el momento preciso.</p>
                        
                    </div>
                    <br>
                    <p style="text-decoration: underline; font-weight: bold;margin-top: 16px" class="ir_a_tarifas"><a href="">Tarifa x Paquete</a></p>
                    <br>

                    <p class="col-12 textoSaberMas">
                    <strong>RED DE BÚSQUEDA:</strong>
                    <br>
                    Resultados patrocinados en el buscador de Google justo cuando el usuario demuestre interés en tus productos o servicios; guiándolos hacia la conversión en ese preciso momento, ya sea, realizar una acción específica en tu web, visitar tus redes, realizar una llamada o dirigirse hacia tu local con GMaps.
                    </p>
                    <br>
                    <p class="col-12 textoSaberMas">
                    <strong>RED DE DISPLAY:</strong>
                    <br>
                    Alcance a tu audiencia objetivo mientras navega por sitios web, utiliza aplicaciones o revisa su Gmail, con banners de imagen o GIF; ideal para fases tempranas del embudo u orientado a quienes ya realizaron alguna acción en tu sitio web.
                    </p>
                    <br>
                    <p class="col-12 textoSaberMas">
                    <strong>YOUTUBE ADS:</strong>
                    <br>
                    Anuncios de video en la plataforma Youtube que provocan un grado de implicación emocional con el contenido como ningún otro medio puede hacerlo; a través de creativos mensajes audiovisuales que deleitan, logran conectar con tu audiencia e inducen a realizar una acción particular, ya sea en ese momento o en uno posterior. 
                    </p>
                    <br>
                    <p class="col-12 textoSaberMas">
                    <strong>GOOGLE SHOPPING:</strong>
                    <br>
                    Anuncios exclusivos para ecommerce, integrados por fichas con imagen, precio y demás información pertinente a usuarios que buscan tu producto, con vínculo directo al carrito de compras de tu web.  
                    </p>
                    <br>
                    <p class="col-12 textoSaberMas">
                    <strong>GOOGLE MI NEGOCIO:</strong>
                    <br>
                    Literalmente te pone en el mapa, permitiendo que te encuentren desde el buscador de Google o Google Maps y, que con solo un click, te llamen, visiten tu web o lleguen a tu local con GPS. Convertí a desconocidos en clientes reclamando tu perfil y compartiendo fotos de tus productos, menú, promociones, horarios de atención y atendiendo consultas, reseñas o reservas.  
                    </p>
                    <br>
                    

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
                
                <br>
                <p style="text-decoration: underline; font-weight: bold;margin-top: 16px" class="ir_a_tarifas"><a href="">Tarifas x Servicios</a></p>
                <br>
                <i>* En Email Marketing la tarifa aplica por Grupo de Campañas [ De hasta 3 Campañas  ] </i>
                <br>
                <p style="text-decoration: underline; font-weight: bold;margin-top: 16px"><a href="">Planes del Software GetResponse</a></p>
                <br>
                <p style="text-decoration: underline; font-weight: bold;margin-top: 16px"><a href="">Planes del Sortware Doppler</a></p>
                <br>
                
                <p class="col-12 textoSaberMas">El email marketing es una herramienta de comunicación que permite contactar a tu público objetivo a través de su correo electrónico, con mensajes personalizados a lo largo del embudo de conversión.</p>
                <br>
                <p class="col-12 textoSaberMas">En Kliv utilizamos la plataforma GetResponse, un poderoso software de email marketing con herramientas de diseño, automatización, análisis y segmentación de contactos incorporada. </p>
                <br>
                <p class="col-12 textoSaberMas">Alcanza diferentes objetivos con el tipo de email adecuado:</p>
                <br>

                <p class="col-12 textoSaberMas">
                    <strong class="dark">NEWSLETTERS</strong>
                    <br>
                    Envíos periodicos de boletines de interés para tus suscriptores, con contenido relevante del rubro. Cumple una función de fidelización y de posicionamiento de marca, a la vez que genera tráfico hacia el sitio web de la empresa.
                </p>

                <br>

                <p class="col-12 textoSaberMas">
                    <strong class="dark">TRANSACCIONALES</strong>
                    <br>
                    Emails automáticos como respuesta a la interacción del usuario con tu sitio web o aplicación. Confirmación de compra, recordatorio de carrito abandonado, nuevo usuario, cambio de contraseña, descarga de material, entre otros. 
                </p>
                
                <br>

                <p class="col-12 textoSaberMas">
                    <strong class="dark">PROMOCIONALES</strong>
                    <br>
                    Disparos orientados a lograr ventas a través de un llamado a la acción y oferta concisa, segmentado por listas de contactos categorizadas, permitiendo enviar ofertas personalizadas. 
                </p>
                
                <br>

                <p class="col-12 textoSaberMas">
                    <strong class="dark">AUTORESPONDERS</strong>
                    <br>
                    Secuencias de email automatizados que orientan al usuario por cada fase del embudo de conversión, construyendo una relación personalizada desde que se da el primer contacto, conoce más a fondo tu marca y productos, realiza una compra, te recomienda y se vuelve un comprador habitual. 
                </p>
                
                
                <p class="col-12 textoSaberMas"></p>
            
            </div>
            
        </div>
        <div id="gesRedes" class="saberMas row align" style="display: none;">
            <i id="esc4" class="fas fa-arrow-circle-left col-12" style="margin-top: 50px;margin-left: 20px; font-size: 30px;color: white;"></i>
            <div class="col-12 col-lg-9 align row serv">
                <img src="./Images/share.png" alt="" class="col-5 col-lg-2 imgS">
                <div class="col-7 row align" style="justify-content: space-between;">
                    <h1 class="col-12 servT"  style="color: white;">Gestión de Redes</h1>
                    <p class="textT"  style="color: white;">Contenidos relevantes ajustados a los intereses y necesidades de tu público objetivo, creando entornos de valor que refuercen el vínculo con la marca.</p>
                    
                </div>
                
                <!-- ACA -->
                <!-- EMPIEZA ABAJO -->

                <p class="col-12 textoSaberMas">Atención personalizada y generación de contenidos relevantes ajustados a los intereses y necesidades de tu público objetivo, creando entornos de valor que refuercen el vínculo con tu marca.</p>
                <p style="text-decoration: underline; font-weight: bold;margin-top: 16px" class="ir_a_tarifas"><a href="">Tarifa x Paquete</a></p>
                <p class="col-12 textoSaberMas">La gestión estratégica de las redes es un componente indispensable en todas las fases del embudo de conversión. No se debe aplicar como una estrategia aislada, sino que debe estar planificada en concordancia con el resto de estrategias digitales de la empresa. </p>
                <p class="col-12 textoSaberMas">En Kliv desarrollamos contenidos de calidad alineados a objetivos concretos, que se ajustan a los intereses de tu buyer persona y transmiten los valores e identidad de tu marca. Además, monitoreamos tus redes y promovemos una relación cercana con tu público, respondiendo comentarios y atendiendo consultas.</p>
                
                <h3 style="margin: 20px 0">Beneficios</h3>
                
                <p class="col-12 textoSaberMas">
                <strong>CONCIENCIA DE MARCA</strong>
                <br>
                La presencia periódica a través de publicaciones que aporten valor contribuye a la notoriedad, reconocimiento positivo y distinción de tu marca. Las personas tienden a consumir aquellas marcas que le son familiares.
                </p>
                <br>
                <p class="col-12 textoSaberMas">
                <strong>CREA EMBAJADORES</strong>
                <br>
                Fomentar la interacción natural afianza el compromiso de la audiencia con tu marca, creando vínculos más allá de la relación compra-venta. Aquellos que se sienten integrados, escuchados y partícipes, serán aquellos que por propia convicción compartirán el contenido y recomendarán tu marca en sus propias redes.
                </p>
                <p class="col-12 textoSaberMas">
                <strong>EDUCA AL MERCADO</strong>
                <br>
                Instruir sobre las especificaciones de tus productos o servicios y responder las dudas frecuentes de tus clientes facilitará que tomen la decisión de compra y su satisfacción será mayor, ya que conocerán a detalle lo que adquirieron. 
                </p>
                <p class="col-12 textoSaberMas">
                <strong>ATRACCIÓN Y POSICIONAMIENTO</strong>
                <br>
                El contenido relevante genera tráfico de calidad, reforzando el posicionamiento de tus redes y permitiendo que tus propuestas comerciales lleguen a más clientes potenciales.
                </p>
                <p class="col-12 textoSaberMas">
                <strong>CREDIBILIDAD</strong>
                <br>
                La comunicación orgánica elimina el tono publicitario creando relaciones de confianza a través de contenidos cualificados recurrentes que no buscan netamente vender, sino aportar valor y generar conversación con la audiencia. Los consumidores se inclinan por las marcas que reflejan credibilidad.
                </p>
                <p class="col-12 textoSaberMas">
                <strong>FIDELIZA</strong>
                <br>
                Siempre es más rentable vender a un cliente actual que atraer a uno nuevo. Los contenidos relevantes ayudan a mantener a tus clientes comprometidos con tu marca a largo plazo.
                </p>
                <p class="col-12 textoSaberMas">
                <strong>SINERGÍA CON CAMPAÑAS</strong>
                <br>
                Con estrategias planificadas en concordancia, la gestión de redes logra reducir el costo por adquisición de las campañas pagas optimizando las conversiones; siendo que los usuarios tienden a indagar más allá del anuncio que les llamó la atención antes de tomar la decisión de compra. 
                </p>
                
                <h3 style="margin: 20px 0">Como Trabajamos</h3>

                <p class="col-12 textoSaberMas">
                <strong>AUDITORÍA</strong>
                <br>
                Partiendo de un diagnóstico completo de la situación actual de tu marca y la competencia en redes sociales, definimos objetivos concretos e identificamos la audiencia target, el arquetipo de personalidad y la estética en concordancia con la estrategia global de comunicación.
                </p>

                <p class="col-12 textoSaberMas">
                <strong>PLANIFICACIÓN</strong>
                <br>
                Con las bases y el norte definido, ingeniamos contenidos de valor y acciones promocionales que calendarizamos para todo el mes; siempre haciendo partícipe del proceso a un responsable interno de tu empresa que nos oriente desde su perspectiva y criterio. 
                </p>

                <p class="col-12 textoSaberMas">
                <strong>DISEÑO Y REDACCIÓN</strong>
                <br>
                Con grilla de contenidos en mano y mucha creatividad, diseñamos piezas que impacten y redactamos copies que persuadan, adecuado a la identidad de tu marca. Previo a la publicación, cada gráfica, video y texto se comparte para validación y ajustes.
                </p>

                <p class="col-12 textoSaberMas">
                <strong>PUBLICACIÓN Y MONITOREO</strong>
                <br>
                De acuerdo al plan previsto, se programan las publicaciones con su respectiva pieza y copy, monitoreando su desempeño día a día. Y más allá de lo calendarizado, nos mantenemos receptivos a contenido espontáneo que sume valor, especialmente para las stories. 
                <br>
                Además, se responden comentarios y mensajes privados de 09 a 18hs (GMT-3), o se asignan a un responsable de la empresa en los casos que fuera necesario. Predomina la escucha activa para identificar insights de valor, detectando oportunidades y evitando conflictos. 
                </p>
                <p class="col-12 textoSaberMas">
                <strong>REPORTES</strong>
                <br>
                Al cierre de cada período mensual se analiza el rendimiento en contraste con los objetivos planteados, presentando un informe cuantitativo y cualitativo, junto a una propuesta de mejora para el siguiente mes. 
                </p>
                <p class="col-12 textoSaberMas">
                    <div style="background-color: rgba(0,0,0,0.1 );
                    display: flex;
                    justify-content: space-between;
                    padding: 20px 30px;
                    border-radius: 7px;" id="precios-redes">
                        <div><b>Paquete x8/x12/x16</b></div>
                        <div style="display:flex; flex-direction: column; align-items: flex-end">
                            <div><b>$ <?php echo $pricings[9]['ars'] ?> / $ <?php echo $pricings[8]['ars'] ?> / $ <?php echo $pricings[7]['ars'] ?></b></div>
                            <div>*No incluye IVA</div>
                        </div>
                    </div>
                </p>
               <p class="col-12 textoSaberMas">
                    <b>8 / 12 / 16</b> publicaciones / Producción de piezas gráficas y redacción. Incluye hasta 3 GIFS.
                    <br>
                    <br>
                    - Configuración inicial: Portada, perfil, historias destacadas, descripción, info, etc.
                    <br>
                    - Auditoría de tu marca y planificación de contenidos de valor y acciones promocionales.
                    <br>
                    - Edición ligera y publicación de historias de contenido espontáneo, 09:00 a 18:00hs (GMT-3) 
                    <br>
                    - Monitoreo de publicaciones y atención personalizada de consultas y mensajes, 09:00 a 18:00hs (GMT-3) 
                    <br>
                    - Informe de rendimiento del período mensual.
               </p>

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
                <p style="text-decoration: underline; font-weight: bold;margin-top: 16px"><a href="">Tarifa x Paquete</a></p>
                
                <p class="col-12 textoSaberMas">
                En Kliv contamos con un equipo de “desarrolladores full stack”, es decir, programadores con un perfil técnico muy completo que se desenvuelven en front y backend sin usar sistemas de diseño web (Como Wix o Wordpress), posibilitando desarrollos personalizados y funcionales, 100% a medida de los requerimientos de tu empresa.
                </p>
                <br>
                <p class="col-12 textoSaberMas">
                * Interfaces únicas y exclusivas, adaptadas a la identidad de tu marca.
                <br>
                * Plataformas optimizadas para generar acciones de conversión, sin limitaciones en sus funcionalidades.
                <br>
                * Páginas eficientes que se adaptan a todos los dispositivos y navegadores, actualizadas con la última tecnología garantizando navegabilidad ágil y segura.
                <br>
                * Optimización para buscadores, respetando estándares de calidad que favorecen la indexación orgánica aumentando la visibilidad. 
                <br>
                * Junto con tu sitio recibís casillas webmail integradas con el dominio de tu empresa.
                <br>
                * Nos encargamos de realizar la integración a Google Analytics, para que puedas analizar el comportamiento del usuario en el sitio, info demográfica, intereses, flujo de visitas, etc.
                <br>

                </p>

                <p class="col-12 textoSaberMas">
                    <strong>DINÁMICA DE TRABAJO:</strong>
                    Segmentamos el proceso en 2 etapas. 1ro diseñamos el sitio, y una vez que tenemos tu aprobación definitiva avanzamos con la programación. 
                </p>
                <p class="col-12 textoSaberMas">
                    <strong>HOSTING Y DOMINIO:</strong>
                    Nos encargamos de registrar y alojar el dominio (tusitio.com) como los archivos de tu web, con backups mensuales para garantizar la seguridad del contenido. 
                </p>
                <p class="col-12 textoSaberMas">
                    <strong>MANTENIMIENTO Y ACTUALIZACIONES:</strong>
                    Dispones de nuestro soporte técnico para cualquier cambio/innovación que quieras implementar dentro del sitio.
                </p>
                <p class="col-12"><i>* El Dominio, Hosting y Mantenimiento tienen un costo mensual o anual dependiendo del paquete que elijas y las cotizaciones del momento.</i></p>
                <br>
               
                <p class="col-12 textoSaberMas">
                    <strong class="dark">ONE PAGE</strong>
                    <br>
                    Comunica solo lo esencial en un sitio one page. Una sola página, segmentada en secciones. Ideal para sintetizar lo que hace tu negocio, incitando prospectos a ponerse en contacto.
                    <br>
                    <br>
                    -Formulario de contacto integrado.
                    <br>
                    -Casilla de mails propia.
                    <br>
                    -Botón de WhatsApp integrado.
                    <br>
                    -Hasta 1 página.

                </p>
                
                <p class="col-12 textoSaberMas">
                    <strong class="dark">COMPLETO</strong>
                    <br>

                    Tu sitio web profesional completo. Ideal para quienes buscan establecer una imagen más establecida. Tanto para empresas como particulares e instituciones.
                    <br>
                    <br>
                    -Formulario de contacto integrado.
                    <br>
                    -Casilla de mails propia.
                    <br>
                    -Botón de WhatsApp integrado.
                    <br>
                    -Hasta 5 páginas.
                    <br>
                    -Posibilidad de subir videos.
                    <br>
                    -Detalles UX/UI interactivos.


                </p>
                
                <p class="col-12 textoSaberMas">
                    <strong class="dark">A MEDIDA</strong>
                    <br>

                    Tu idea o proyecto escapa de las limitaciones de los tipos de sitios anteriores? No te preocupes, trabajamos 100 % a medida. 
                    <br>
                    <a href="#contacto">Contactate!</a>               

                </p>

                
                    
            </div>
            
        </div>
        <div id="disGrafico" class="saberMas row align" style="display: none;">
            <i id="esc6" class="fas fa-arrow-circle-left col-12" style="margin-top: 50px;margin-left: 20px; font-size: 30px;color: white;"></i>
            <div class="col-12 col-lg-9 align row serv">
                <img src="./Images/dis-grafico.png" alt="" class="col-5 col-lg-2 imgS">
                <div class="col-7 row align" style="justify-content: space-between;">
                    <h1 class="col-12 servT"  style="color: white;">Diseño Gráfico + Audiovisual</h1>
                    <p class="textT"  style="color: white;">Manual de identidad corporativa, logos, brochures, folletos, infografía, fotoproducto, lookbooks, retrato, animaciones motion graphic,guión, rodajes y producciones.</p>
                    
                </div>
                <p style="text-decoration: underline; font-weight: bold;margin-top: 16px"><a href="">Tarifas x Servicios</a></p>
                <p class="col-12 textoSaberMas">Los elementos gráficos y audiovisuales son indispensables en la estrategia comercial para llegar a tu audiencia de una forma dinámica y cautivadora, que transmita la identidad de tu marca. </p>
                <p class="col-12 textoSaberMas">En Kliv trabajamos con equipos de diseño y producción audiovisual experimentados en el rubro publicitario con orientación al performance. </p>
                
                <p class="col-12 textoSaberMas">
                    <div style="
                    display: flex;
                    justify-content: space-between;
                    align-items:center;
                    border-radius: 7px;" id="precios-redes">
                        <div><b>MANUAL DE IDENTIDAD CORPORATIVA</b></div>
                        <div style="display:flex; flex-direction: column; align-items: flex-end">
                            <div><b>$ <?php echo $pricings[13]['ars'] ?></b></div>
                            <div>*No incluye IVA</div>
                        </div>
                    </div>
                </p>
                <p class="col-12 textoSaberMas" style="margin-top: -10px">
                Es un documento que recoge los principales elementos gráficos de una marca, explicando cómo deben aplicarse en cada caso. Herramienta imprescindible que garantiza la cohesión en la comunicación visual, con homogeneidad en cualquier soporte, utilice quien la utilice.
                Desde la elaboración del concepto, naming y logotipo de la marca, su composición y aplicativos correctos e incorrectos, colores definidos, tipografía primaria y complementaria, y todas las aplicaciones, ya sean piezas digitales (Como avatares para redes o firma de emails) o impresas (Tarjetas de presentación, hoja membretada, etc.) 
                Antes de avanzar con cualquier acción publicitaria sugerimos desarrollar un manual de identidad corporativa actualizado como base fundamental para la comunicación, que quede como una herramienta de tu marca.
                </p>
                <br>
                <p class="col-12 textoSaberMas">
                    <div style="
                    display: flex;
                    justify-content: space-between;
                    align-items:center;
                    border-radius: 7px;" id="precios-redes">
                        <div><b>LOGOTIPO</b></div>
                        <div style="display:flex; flex-direction: column; align-items: flex-end">
                            <div><b>$ <?php echo $pricings[14]['ars'] ?></b></div>
                            <div>*No incluye IVA</div>
                        </div>
                    </div>
                </p>
                <p class="col-12 textoSaberMas" style="margin-top: -10px">
                El diseño de un logotipo consiste en representar gráficamente los valores, ideales y características de una marca, mediante un símbolo, imagen o tipografía que sea memorable para sus clientes potenciales. 
                </p>
                <br>

                <p class="col-12 textoSaberMas">
                    <div style="
                    display: flex;
                    justify-content: space-between;
                    align-items:center;
                    border-radius: 7px;" id="precios-redes">
                        <div><b>EDITORIAL</b></div>
                        <div style="display:flex; flex-direction: column; align-items: flex-end">
                            <div><b>A Cotizar</b></div>
                            <div></div>
                        </div>
                    </div>
                </p>
                <p class="col-12 textoSaberMas" style="margin-top: -10px">
                Maquetación y composición de cualquier medio que combine texto e imágenes, ya sean carpetas de presentación, brochures trípticos, folletos simple hoja, infografías, entre otros. Se busca siempre que resulte atractivo y funcional para el lector, consiguiendo una armonía perfecta entre formato y contenido. 
                </p>
                
                <br>

                <p class="col-12 textoSaberMas">
                    <div style="
                    display: flex;
                    justify-content: space-between;
                    align-items:center;
                    border-radius: 7px;" id="precios-redes">
                        <div><b>PACKAGING</b></div>
                        <div style="display:flex; flex-direction: column; align-items: flex-end">
                            <div><b>A Cotizar</b></div>
                            <div></div>
                        </div>
                    </div>
                </p>
                <p class="col-12 textoSaberMas" style="margin-top: -10px">
                El empaque de los productos es un recurso que se utiliza como carta de presentación para transmitir un mensaje atractivo y diferenciar el producto de la competencia, además de garantizar la protección del producto permitiendo su almacenaje y distribución. Diseño de cajas, bolsas, etiquetas, impresión sobre envase y papeles, entre otros. 
                </p>
                
                <p class="col-12 textoSaberMas">
                    <div style="
                    display: flex;
                    justify-content: space-between;
                    align-items:center;
                    border-radius: 7px;" id="precios-redes">
                        <div><b>ANIMACIONES MOTION GRAPHICS</b></div>
                        <div style="display:flex; flex-direction: column; align-items: flex-end">
                            <div><b>A Cotizar</b></div>
                            <div></div>
                        </div>
                    </div>
                </p>
                <p class="col-12 textoSaberMas" style="margin-top: -10px">
                Videos creados con imágenes, fotografías, textos e iconos, a los que se les da movimiento mediante animación digital. Técnica ideal para expresar ideas complejas de manera fácil y entretenida, captando mayor atención del público y aumentando la retención del mensaje. Se usa habitualmente en presentaciones, propaganda del gobierno y con fines publicitarios. 
                </p>

                <p class="col-12 textoSaberMas"></p>
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

                <p style="text-decoration: underline; font-weight: bold;margin-top: 16px"><a href="">Tarifas x Servicios</a></p>

                <p class="col-12 textoSaberMas">Estrategia que utiliza WhatsApp como canal de marketing para optimizar el servicio al cliente, aumentar la fidelización, incrementar tus ventas y enriquecer tu posventa; alineada con el resto de estrategias digitales de la empresa. Canal indispensable para cualquier empresa que desee mantenerse al alcance inmediato de sus clientes, con mayor visibilidad que cualquier otro medio.</p>
                <p class="col-12 textoSaberMas">En Kliv explotamos al máximo el potencial de WhatsApp Business, que dispone de múltiples funciones nativas concebidas para empresas, como perfil con ubicación Google Maps, horario de atención desplegable, catálogo de productos, mensaje de bienvenida y ausencia, entre otras.</p>
                <p class="col-12 textoSaberMas">Además utilizamos softwares complementarios que enriquecen aún más la experiencia de tu audiencia optimizando la comunicación, permitiendo configurar chatbots 100% a medida como apoyo a la atención al público (secuencia de autorespuestas) y hacer campañas de difusión con texto, imagen y archivos a grupos segmentados.</p>
                
                <p class="col-12 textoSaberMas">
                    <div style="
                    display: flex;
                    justify-content: space-between;
                    align-items:center;
                    border-radius: 7px;" id="precios-redes">
                        <div><b>WHATSAPP MARKETING</b></div>
                        <div style="display:flex; flex-direction: column; align-items: flex-end">
                            <div><b>$ <?php echo $pricings[19]['ars'] ?></b></div>
                            <div><i>*No incluye IVA</i></div>
                        </div>
                    </div>
                </p>
                <p class="col-12 textoSaberMas" style="margin-top: -10px">
                La tarifa es mensual e incluye el costo del software de gestión. El servicio contempla todos los siguientes ítems: 
                </p>
                    <ul style="padding-left: 40px; color: white!important">
                        <li><b>CUENTA BUSINESS:</b>  Capacitación y asistencia en la configuración de tu cuenta WhatsApp Business, adaptando todas sus funcionalidades a tu empresa.</li>
                        <li><b>CHATBOT:</b> Desarrollo estratégico y mantenimiento de respuestas automáticas de texto (pueden incluir imagen o archivo), activas lunes a viernes de 09:00 a 18:00 hs (GMT-3).</li>
                        <li><b>CAMPAÑA SEMANAL:</b> Difusión de texto con imagen o archivo a grupos segmentados, sin límite de contactos.</li>
                        <li><b>BASE DE DATOS:</b> Segmentación de contactos en grupos y variables, permitiendo personalizar los mensajes.</li>
                        <li><b>ESTRATEGIA:</b> Planificamos en concordancia con el embudo de conversión y las demás acciones publicitarias de tu empresa.</li>
                        <li><b>DISEÑO GRÁFICO</b> Diseño de placas gráficas adaptadas al formato móvil como parte de las campañas semanales e historias compartidas.</li>
                        
                    </ul>
                
                <p class="col-12 textoSaberMas"></p>
                <p class="col-12 textoSaberMas"></p>
                <p class="col-12 textoSaberMas"></p>
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
                            <image style="overflow:visible;" width="1241" height="1241" xlink:href="Images/Logotipos-07.png"  transform="matrix(9.883400e-02 0 0 9.883400e-02 66.3923 66.7644)">
                            </image>
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
                            <rect x="55.6" y="36.6" class="st1 paso4" width="37.4" height="43.2"/>
                            <text transform="matrix(1 0 0 1 55.6401 72.3594)" class="st2 st3 st4 paso4">4</text>
                            <rect x="187" y="57.2" class="st1 paso2" width="37.4" height="43.2"/>
                            <text transform="matrix(1 0 0 1 187.0001 92.9594)" class="st2 st3 st4 paso1">1</text>
                            <rect x="169.3" y="180.5" class="st1 paso2" width="37.4" height="43.2"/>
                            <text transform="matrix(1 0 0 1 169.3254 216.2657)" class="st2 st3 st4 paso2">2</text>
                            <rect x="41.7" y="160.8" class="st1 paso3" width="37.4" height="43.2"/>
                            <text transform="matrix(1 0 0 1 41.6724 196.6167)" class="st2 st3 st4 paso3">3</text>
                            </svg>
                            <div data-aos="zoom-in" data-aos-duration="900" class="titulos-pasos paso1" id="paso1txt" style="color: #003629">Análisis y<br>Planificación</div>
                            <div data-aos="zoom-in" data-aos-duration="900" class="titulos-pasos paso2" id="paso2txt"><p style="margin: 0% !important;"> Puesta en<br></p> marcha</div>
                            <div data-aos="zoom-in" data-aos-duration="900" class="titulos-pasos paso3" id="paso3txt">Monitoreo y<br>Optimización</div>
                            <div data-aos="zoom-in" data-aos-duration="900" class="titulos-pasos paso4" id="paso4txt">Informe y<br>Propuestas</div>
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
                            <h2 data-aos="zoom-in" class="col-12 subT">Paquetes para empresas<br>de todos los tamaños</h2>
                            
                            <label for="customRange3" class="form-label col-12" style="text-align: center; font-size: 27px; font-weight: 400;margin-bottom: 20px;"><strong id="campanas" class="num" style="font-weight: bolder;font-size: 29px;"> ? </strong> Campañas /mes</label>
                            <!-- <div id="range-cont">
                                <a href="#empresa"><input type="range" class="form-range col-8" value="1" min="1" max="100" step="1" id="customRange3"></a> 
                                <div></div>
                                
                            </div> -->
                            <a href="#empresa" id="drag-cont">
                              

                            </a>
                                
                        </div>

                    <div class="center1 card-cont1 align cont col-12">
                        <article class="col-11 card" data-aos="zoom-in-up" data-aos-duration="900">
                                <div class="row align">
                                    
                                    
                                    <div class="col-11 row align">
                                        <div class="col-12 align" style="justify-content: flex-end;">
                                        <h1 id="icV5" class="fas fa-arrow-circle-left col-6" style="cursor: pointer !important;font-size: 16px;text-align: start;margin-top: 20px;margin-bottom: -5px;display: none;position:absolute; text-align: right;background:white;"></h1>
                                        <h1 id="icF5" class="fas fa-info-circle col-6" style="cursor: pointer !important;font-size: 16px;text-align: end;margin-top: 20px;margin-bottom: -5px"><i style="text-align: end;margin-top: 20px;margin-bottom: -20px;font-size: 16px;"></i></h1>
                                        </div>
                                        <div id="precios5" class="row align">
                                            <h1 id="arss5" class="col-12 precio">$ <?php echo $pricings[0]['ars'] ?><p style="font-size: 19px;"> </p></h1>
                                            <h1 id="dolaress5" class="col-12 precio" style="display: none;">$<?php echo $pricings[0]['usd'] ?> /<p style="font-size: 19px;">mes </p></h1>
                                            <h1 style="cursor: pointer; text-decoration: underline" id="ars5" class="col-2 ars">ARS </h1>-<h1 style="cursor: pointer;" id="usd5" class="col-2 usd"> USD</h1>
                                            <h1 class="col-12 desc" style="font-size: 15px;">¿No sabes cuantas campañas? Relevamiento y embudo a medida</h1>
                                            
                                            <button class="botonStart col-8">Comenzar ahora</button>
                                        </div>
                                        <h1 id="info5" class="col-12 desc" style="display: none;"><?php echo $pricings[0]['descripcion'] ?></h1>
                                    </div>
                                </div>
                        </article>
                        <article class="col-11 card align" data-aos="zoom-in-up" data-aos-duration="900">
                            <div class="row align">
                                <div class="col-11 row align">
                                    <div class="col-12 align" style="justify-content: flex-end;">
                                        <h1 id="icV1" class="fas fa-arrow-circle-left col-6" style="cursor: pointer !important;font-size: 16px;text-align: start;margin-top: 20px;margin-bottom: -5px;display: none;position:absolute; text-align: right;background:white;"></h1>
                                        <h1 id="icF1" class="fas fa-info-circle col-6" style="cursor: pointer !important;font-size: 16px;text-align: end;margin-top: 20px;margin-bottom: -5px"><i style="text-align: end;margin-top: 20px;margin-bottom: -20px;font-size: 16px;cursor: pointer;"></i></h1>
                                    </div>
                                    <div id="precios1" class="row align">
                                        <h1 id="arss" class="col-12 precio">$ <?php echo $pricings[1]['ars'] ?> /<p style="font-size: 19px;">mes </strong></h1>
                                        <h1 id="dolaress1" class="col-12 precio" style="display: none;">$<?php echo $pricings[1]['usd'] ?> /<strong style="font-size: 19px;">mes </strong></h1>
                                        <h1 style="cursor: pointer; text-decoration: underline" id="ars" class="col-2 ars">ARS </h1>-<h1 style="cursor: pointer;" id="usd" class="col-2 usd"> USD</h1>
                                        <h1 id="pesos1" class="col-12 desc"> $ <?php echo $pricings[1]['ars'] / 2 ?> c/u</h1>
                                        <h1 id="dolares1" class="col-12 desc" style="display: none;"> $ <?php echo $pricings[1]['usd'] / 2 ?> c/u</h1>
                                        <button class="botonStart col-8">Comenzar ahora</button>
                                    </div>
                                    <h1 id="info1" class="col-12 desc" style="display: none;"><?php echo $pricings[1]['descripcion'] ?></h1>
                                </div>
                            </div>
                        </article>
                            <article class="col-11 card" data-aos="zoom-in-up" data-aos-duration="900">
                                <div class="row align">
                                    
                                    <div class="col-11 row align">
                                        <div class="col-12 align" style="justify-content: flex-end;">
                                            <h1 id="icV2" class="fas fa-arrow-circle-left col-6" style="cursor: pointer !important;font-size: 16px;text-align: start;margin-top: 20px;margin-bottom: -5px;display: none;position:absolute; text-align: right;background:white;"></h1>
                                            <h1 id="icF2" class="fas fa-info-circle col-6" style="cursor: pointer !important;font-size: 16px;text-align: end;margin-top: 20px;margin-bottom: -5px"><i style="text-align: end;margin-top: 20px;margin-bottom: -20px;font-size: 16px;cursor: pointer;"></i></h1>
                                        </div>
                                        <div id="precios2" class="row align">
                                            <h1 id="arss2" class="col-12 precio">$ <?php echo $pricings[2]['ars'] ?> /<p style="font-size: 19px;">mes </p></h1>
                                            <h1 id="dolaress2" class="col-12 precio" style="display: none;">$<?php echo $pricings[2]['usd'] ?> /<p style="font-size: 19px;">mes </p></h1>
                                            <h1 style="cursor: pointer; text-decoration: underline" id="ars2" class="col-2 ars">ARS </h1>-<h1 style="cursor: pointer;" id="usd2" class="col-2 usd"> USD</h1>
                                            <h1 id="pesos2" class="col-12 desc">10% OFF / $ <?php echo $pricings[2]['ars'] / 3 ?> c/u</h1>
                                            <h1 id="dolares2" class="col-12 desc" style="display: none;">10% OFF / $ <?php echo $pricings[2]['usd'] / 3 ?> c/u</h1>
                                            <button class="botonStart col-8">Comenzar ahora</button>
                                        </div>
                                        <h1 id="info2" class="col-12 desc" style="display: none;"><?php echo $pricings[2]['descripcion'] ?></h1>
                                    </div>
                                </div>
                            </article>
                            <article class="col-11 card" data-aos="zoom-in-up" data-aos-duration="900">
                                <div class="row align">
                                    
                                    <div class="col-11 row align">
                                        <div class="col-12 align" style="justify-content: flex-end;">
                                            <h1 id="icV3" class="fas fa-arrow-circle-left col-6" style="cursor: pointer !important;font-size: 16px;text-align: start;margin-top: 20px;margin-bottom: -5px;display: none;position:absolute; text-align: right;background:white;"></h1>
                                            <h1 id="icF3" class="fas fa-info-circle col-6" style="cursor: pointer !important;font-size: 16px;text-align: end;margin-top: 20px;margin-bottom: -5px"><i style="text-align: end;margin-top: 20px;margin-bottom: -20px;font-size: 16px;cursor: pointer;"></i></h1>
                                        </div>
                                        <div id="precios3" class="row align">
                                            <h1 id="arss3" class="col-12 precio">$ <?php echo $pricings[3]['ars'] ?> /<p style="font-size: 19px;">mes </p></h1>
                                            <h1 id="dolaress3" class="col-12 precio" style="display: none;">$<?php echo $pricings[3]['usd'] ?> /<p style="font-size: 19px;">mes </p></h1>
                                            <h1 style="cursor: pointer; text-decoration: underline" id="ars3" class="col-2 ars">ARS </h1>-<h1 style="cursor: pointer;" id="usd3" class="col-2 usd"> USD</h1>
                                            <h1 id="pesos3" class="col-12 desc">15% OFF / $ <?php echo $pricings[3]['ars'] / 4 ?> c/u</h1>
                                            <h1 id="dolares3" class="col-12 desc" style="display: none;">10% OFF / $ <?php echo $pricings[3]['usd'] / 4 ?> c/u</h1>
                                            <button class="botonStart col-8">Comenzar ahora</button>
                                        </div>
                                        <h1 id="info3" class="col-12 desc" style="display: none;"><?php echo $pricings[3]['descripcion'] ?></h1>
                                    </div>
                                </div>
                            </article>
                            <article class="col-11 card" data-aos="zoom-in-up" data-aos-duration="900">
                                <div class="row align">
                                    
                                    
                                    <div class="col-11 row align">
                                        <div class="col-12 align" style="justify-content: flex-end;">
                                        <h1 id="icV4" class="fas fa-arrow-circle-left col-6" style="cursor: pointer !important;font-size: 16px;text-align: start;margin-top: 20px;margin-bottom: -5px;display: none;position:absolute; text-align: right;background:white;"></h1>
                                        <h1 id="icF4" class="fas fa-info-circle col-6" style="cursor: pointer !important;font-size: 16px;text-align: end;margin-top: 20px;margin-bottom: -5px"><i style="text-align: end;margin-top: 20px;margin-bottom: -20px;font-size: 16px;cursor: pointer;"></i></h1>
                                        </div>
                                        <div id="precios4" class="row align">
                                        <h1 id="arss4" class="col-12 precio"><p style="font-size: 19px;">Dsd </p>$ <?php echo $pricings[4]['ars'] ?> /<p style="font-size: 19px;">mes </p></h1>
                                            <h1 id="dolaress4" class="col-12 precio" style="display: none;">$<?php echo $pricings[4]['usd'] ?> /<p style="font-size: 19px;">mes </p></h1>
                                            <h1 style="cursor: pointer; text-decoration: underline" id="ars4" class="col-2 ars">ARS </h1>-<h1 style="cursor: pointer;" id="usd4" class="col-2 usd"> USD</h1>
                                            <h1 id="pesos4" class="col-12 desc">20% OFF / $ <?php echo $pricings[4]['ars'] / 5 ?> c/u</h1>
                                            <h1 id="dolares4" class="col-12 desc" style="display: none;">10% OFF / $ <?php echo $pricings[4]['usd'] / 5 ?> c/u</h1>
                                            <button class="botonStart col-8">Comenzar ahora</button>
                                        </div>
                                        <h1 id="info4" class="col-12 desc" style="display: none;"><?php echo $pricings[4]['descripcion'] ?></h1>
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


                            $(".center1").on("beforeChange", function (){
                                let sliderWidth = $('#pr-slider').width()
                                console.log(sliderWidth)
                                setTimeout(() => {
                                    console.log('asdddd')
                                    let diapo = parseInt($('.slick-center').attr('data-slick-index') ) +1
                                    if(diapo == 1){ 
                                        $('#campanas').text('?')
                                        $(".stripe").css("width", ""+ (diapo-1)*0 +"%");
                                        $('.handle').css('left', sliderWidth*0.0)
                                    }	
                                    if(diapo == 2){
                                        $('#campanas').text('2')
                                        $(".stripe").css("width", ""+ (diapo-1)*25 +"%");
                                        $('.handle').css('left', sliderWidth*0.25)
                                    }	
                                    if(diapo == 3){
                                        $('#campanas').text('3')
                                        $(".stripe").css("width", ""+ (diapo-1)*25 +"%");
                                        $('.handle').css('left', sliderWidth*0.50)
                                    }
                                    if(diapo == 4){
                                        $('#campanas').text('4')
                                        $(".stripe").css("width", ""+ (diapo-1)*25 +"%");
                                        $('.handle').css('left', sliderWidth*0.75)
                                    }
                                    if(diapo == 5){
                                        $('#campanas').text('+5')
                                        $(".stripe").css("width", ""+ (diapo-1)*25 +"%");
                                        $('.handle').css('left', sliderWidth)
                                    }	
                                    
                                }, 202);
                            })
                        </script>
                    </div>


                    <div id="agencia" class="mobile row align col-12">
                        <div class="col-12 col-lg-5 row align">
                            <h2 class="col-12 subT">Planes para agencias que buscan<br>terecerizar gestión de campañas.</h2>

                            <h1 class="col-12" style="font-weight: 400;text-align: center;font-size: 27px;    margin: 3% 0 16% 0;"><strong style="font-weight: bolder;padding: 0;font-size: 27px;">+10 </strong>Campañas /mes</h1>
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
           

                    <div class="carousel center1 cont agenciaMob" data-flickity='{"prevNextButtons": false }'>
                        <article class="card carousel-cell">
                            <div class="row align">
                                    <div class="col-12 align" style="justify-content: flex-end;">
                                        <h1 id="icV6" class="fas fa-arrow-circle-left col-6" style="cursor: pointer !important;font-size: 16px;text-align: start;margin-top: 20px;margin-bottom: -5px;display: none;position:absolute; text-align: right;background:white;"></h1>
                                        <h1 id="icF6" class="fas fa-info-circle col-6" style="cursor: pointer !important;font-size: 16px;text-align: end;margin-top: 20px;margin-bottom: -5px"><i style="text-align: end;margin-top: 20px;margin-bottom: -20px;font-size: 16px;cursor: pointer;"></i></h1>
                                    </div>
                                
                                <div class="col-10 row align" id="precios6">
                                    
                                    <h1 class="col-12 precio">PLAN FULL</h1>
                                    <h1 id="arss6" class="col-12 precio"><strong style="font-size: 19px;font-weight: 400;"> Dsd</strong> $ <?php echo $pricings[6]['ars'] ?> /<strong style="font-size: 19px;font-weight: 400;">mes </strong></h1>
                                    <h1 id="dolaress6" class="col-12 precio" style="display: none;">$<?php echo $pricings[6]['usd'] ?> /<strong style="font-size: 19px;">mes </strong></h1>
                                    <div class="col-12 align" style="justify-content: center;">
                                        <h1 style="cursor: pointer; text-decoration: underline" id="ars6" class="col-2 ars">ARS </h1>-<h1 style="cursor: pointer;" id="usd6" class="col-2 usd"> USD</h1>
                                    </div>
                                    <h1 class="col-12 desc">30% OFF / $ <?php echo $pricings[6]['ars'] / 10 ?> c/u</h1>
                                    <button class="botonStart col-8">Comenzar ahora</button>
                                </div>
                                <h1 id="info6" class="col-12 desc" style="display: none;"><?php echo $pricings[6]['descripcion'] ?></h1>
                            </div>
                        </article>
                        <article class="card carousel-cell card-width">
                            <div class="row align">
                                    <div class="col-12 align" style="justify-content: flex-end;">
                                        <h1 id="icV7" class="fas fa-arrow-circle-left col-6" style="cursor: pointer !important;font-size: 16px;text-align: start;margin-top: 20px;margin-bottom: -5px;display: none;position:absolute; text-align: right;background:white;"></h1>
                                        <h1 id="icF7" class="fas fa-info-circle col-6" style="cursor: pointer !important;font-size: 16px;text-align: end;margin-top: 20px;margin-bottom: -5px"><i style="text-align: end;margin-top: 20px;margin-bottom: -20px;font-size: 16px;cursor: pointer;"></i></h1>
                                    </div>
                                
                                <div class="col-10 row align" id="precios7">
                                    <h1 class="col-12 precio">PLAN BÁSICO</h1>
                                    <h1 id="arss7" class="col-12 precio"><strong style="font-size: 19px;font-weight: 400;"> Dsd</strong> $ <?php echo $pricings[5]['ars'] ?> /<strong style="font-size: 19px;font-weight: 400;">mes </strong></h1>
                                    <h1 id="dolaress7" class="col-12 precio" style="display: none;">$<?php echo $pricings[5]['usd'] ?> /<strong style="font-size: 19px;">mes </strong></h1>
                                    <div class="col-12 align" style="justify-content: center;">
                                        <h1 style="cursor: pointer; text-decoration: underline" id="ars7" class="col-2 ars">ARS </h1>-<h1 style="cursor: pointer;" id="usd7" class="col-2 usd"> USD</h1>
                                    </div>
                                    <h1 class="col-12 desc">50% OFF / $ <?php echo $pricings[5]['ars'] / 10 ?> c/u</h1>
                                    <button class="botonStart col-8">Comenzar ahora</button>
                                    <h1 id="info7" class="col-12 desc" style="display: none;"><?php echo $pricings[5]['descripcion'] ?></h1>
                                </div>
                                <h1 id="info7" class="col-12 desc" style="display: none;"><?php echo $pricings[5]['descripcion'] ?></h1>
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


                    <div class="agenciaDesk">
                    
                        <iframe src="agencia-slider.php" height="500px" style="overflow: hidden;padding: 0; height:340px"></iframe>
                        
                    </div>

                </section>

                <div class="col-12 align fondo pers">
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
                                <img data-aos="fade-right" data-aos-duration="700" src="socios_imgs/<?php echo $socios[0]['src'] ?>" alt="" class="col-5 sociosImgs">
                                <img data-aos="fade-right" data-aos-duration="700" src="socios_imgs/<?php echo $socios[1]['src'] ?>" alt="" class="col-5 sociosImgs">
                            </div>
                            <div class="col-12 col-lg-12 align" style="justify-content: space-between;">
                                <img data-aos="fade-right" data-aos-duration="700" src="socios_imgs/<?php echo $socios[2]['src'] ?>" alt="" class="col-5 sociosImgs">
                                <img data-aos="fade-right" data-aos-duration="700" src="socios_imgs/<?php echo $socios[3]['src'] ?>" alt="" class="col-5 sociosImgs">
                            </div>
                            <div class="col-12 col-lg-12 align" style="justify-content: space-between;">
                                <img data-aos="fade-right" data-aos-duration="700" src="socios_imgs/<?php echo $socios[4]['src'] ?>" alt="" class="col-5 sociosImgs">
                                <img data-aos="fade-right" data-aos-duration="700" src="socios_imgs/<?php echo $socios[5]['src'] ?>" class="col-5 sociosImgs">
                            </div>
                            <div class="col-12 col-lg-12 align" style="justify-content: space-between;">
                                <img data-aos="fade-right" data-aos-duration="700" src="socios_imgs/<?php echo $socios[6]['src'] ?>" alt="" class="col-5 sociosImgs">
                                <img data-aos="fade-right" data-aos-duration="700" src="socios_imgs/<?php echo $socios[7]['src'] ?>" alt="" class="col-5 sociosImgs">
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
                                <img data-aos="zoom-in" data-aos-duration="700" src="socios_imgs/<?php echo $socios[0]['src'] ?>" alt="" class="col-3 sociosImgs">
                                <img data-aos="zoom-in" data-aos-duration="700" src="socios_imgs/<?php echo $socios[1]['src'] ?>" alt="" class="col-3 sociosImgs">
                            </div>
                            <div class="col-12 col-lg-6 align" style="justify-content: space-around;">
                                <img data-aos="zoom-in" data-aos-duration="700" src="socios_imgs/<?php echo $socios[2]['src'] ?>" alt="" class="col-3 sociosImgs">
                                <img data-aos="zoom-in" data-aos-duration="700" src="socios_imgs/<?php echo $socios[3]['src'] ?>" alt="" class="col-3 sociosImgs">
                            </div>
                            <div class="col-12 col-lg-6 align" style="justify-content: space-around;">
                                <img data-aos="zoom-in" data-aos-duration="700" src="socios_imgs/<?php echo $socios[4]['src'] ?>" alt="" class="col-3 sociosImgs">
                                <img data-aos="zoom-in" data-aos-duration="700" src="socios_imgs/<?php echo $socios[5]['src'] ?>" class="col-3 sociosImgs">
                            </div>
                            <div class="col-12 col-lg-6 align" style="justify-content: space-around;">
                                <img data-aos="zoom-in" data-aos-duration="700" src="socios_imgs/<?php echo $socios[6]['src'] ?>" alt="" class="col-3 sociosImgs">
                                <img data-aos="zoom-in" data-aos-duration="700" src="socios_imgs/<?php echo $socios[7]['src'] ?>" alt="" class="col-3 sociosImgs">
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
                            <!-- <div id="form-mail"> -->
                                <div id="nombre1" class="email input-activo email-campos align col-12 col-lg-7" style="justify-content: space-around;">
                                    <input class="email-input col-10" type="email" placeholder="Nombre"></input>
                                </div>
                                <div id="email1" class="email email-campos align col-12 col-lg-7" style="justify-content: space-around;">
                                    <input class="email-input col-10" type="email" placeholder="Mail"></input>
                                </div>
                                <div id="telefono" class="email email-campos align col-12 col-lg-7" style="justify-content: space-around;">
                                    <input class="email-input col-10" type="email" placeholder="Dejanos tu telefono"></input>
                                </div>
                                <div id="mensaje" class="email email-campos align col-12 col-lg-7" style="justify-content: space-around;">
                                    <input class="email-input col-10" type="email" placeholder="Dejanos tu Mensaje"></input>
                                </div>

                                <div class="enviar-btn" id="enviar-mail">
                                <div>
                                    ENVIAR
                                </div>
                                </div>

                                <div id="grax1" class="col-12 col-lg-7 email-campos" style="justify-content: space-around;display: none; padding: 3%; text-align: center">
                                    <h3>Gracias, nos contactaremos a la brevedad.</h3>
                                </div>
                            <!-- </div> -->

                        </div>





                        <div data-aos="fade-up" data-aos-duration="700" data-aos-anchor-placement="top-bottom" id="calen" class="align row" style="display: none;">
                            <h3 class="msj col-11">/ Agendá una videollamada</h3>
                            
                            <!-- <div id="form-calendario"> -->
                                <div id="fecha" class="email input-activo calen-campos align col-12 col-lg-7" style="justify-content: space-around;">
                                    <input class="email-input col-10" type="email" placeholder="Fecha"></input>
                                </div>
                                <div id="hora" class="email calen-campos align col-12 col-lg-7" style="justify-content: space-around;">
                                    <input class="email-input col-10" type="text" placeholder="Hora"></input>
                                </div>
                                <div id="email2" class="email calen-campos align col-12 col-lg-7" style="justify-content: space-around;">
                                    <input class="email-input col-10" type="email" placeholder="Email"></input>
                                </div>
                                <div id="nombre" class="email calen-campos align col-12 col-lg-7" style="justify-content: space-around;">
                                    <input class="email-input col-10" type="email" placeholder="Nombre"></input>
                                </div>
                                <div id="asunto" class="email calen-campos align col-12 col-lg-7" style="justify-content: space-around;">
                                    <input class="email-input col-10" type="email" placeholder="Asunto"></input>
                                </div>

                                <div class="enviar-btn" id="enviar-videollamada">
                                    <div>ENVIAR</div>
                                </div>

                                <div id="grax2" class="col-12 col-lg-7 calen-campos" style="justify-content: space-around;display: none; padding: 3%; text-align: center">
                                    <h3>Gracias, nos contactaremos a la brevedad.</h3>
                                </div>
                            <!-- </div> -->

                            
                        </div>
                        <script type="text/javascript">
                         
                            // $("#horaClick").click(function(){
                            //     $("#email1").fadeOut();
                            //     $("#nombre").fadeOut();
                            //     $("#asunto").fadeOut();
                            //     $("#hora").fadeIn();
                                
                            //     document.getElementById("asunto").style.display = "none"
                            //     document.getElementById("nombre").style.display = "none"
                            //     document.getElementById("email2").style.display = "none"
                            //     document.getElementById("hora").style.display = "flex"
                            // });
                            // $("#emailClick2").click(function(){
                            //     $("#asunto").fadeOut();
                            //     $("#nombre").fadeOut();
                            //     $("#hora").fadeOut();
                            //     $("#email2").fadeIn();
                                
                            //     document.getElementById("hora").style.display = "none"
                            //     document.getElementById("asunto").style.display = "none"
                            //     document.getElementById("nombre").style.display = "none"
                            //     document.getElementById("email2").style.display = "flex"
                            // });
                            
                            // $("#nombreClick").click(function(){
                            //     $("#asunto").fadeOut();
                            //     $("#email2").fadeOut();
                            //     $("#hora").fadeOut();
                            //     $("#nombre").fadeIn();
                                
                            //     document.getElementById("hora").style.display = "none"
                            //     document.getElementById("asunto").style.display = "none"
                            //     document.getElementById("email2").style.display = "none"
                            //     document.getElementById("nombre").style.display = "flex"
                            // });
                            // $("#asuntoClick").click(function(){
                            //     $("#nombre").fadeOut();
                            //     $("#email2").fadeOut();
                            //     $("#hora").fadeOut();
                            //     $("#asunto").fadeIn();
                                
                            //     document.getElementById("hora").style.display = "none"
                            //     document.getElementById("nombre").style.display = "none"
                            //     document.getElementById("email2").style.display = "none"
                            //     document.getElementById("asunto").style.display = "flex"
                            // });
                        </script>




                        <div data-aos="fade-up" data-aos-duration="700" data-aos-anchor-placement="top-bottom" id="num" class="align row" style="display: none;">
                            <h3 class="msj col-11">/ Llamanos</h3>

                            <div class="email align col-12 col-lg-7" style="justify-content: space-around;">
                                <a href="https://api.whatsapp.com/send?phone=541167048339&text=Hola."><p class="numWhats col-12">+54 9 351 702-0235</p></a>
                            </div>

                            <div class="col-12 col-lg-8 align">
                                <h3 class="opciones col-12">Atención de lunes a viernes, de 9 a 18 hs. GMT-0300 (hora estándar de Argentina)<br><br>De <cite class="hora-start"></cite> a <cite class="hora-end"></cite> hs horario local.</h3>
                                
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="700" data-aos-anchor-placement="top-bottom" id="wpp" class="align row" style="display: none;">
                            <h3 class="msj col-11">/ Whatsappeanos</h3>

                            <div class="email align col-12 col-lg-7" style="justify-content: space-around;">
                                <a href="https://api.whatsapp.com/send?phone=541167048339&text=Hola."><p class="numWhats col-12">+54 9 351 702-0235</p></a>
                            </div>

                            <div class="col-12 col-lg-8 align">
                                <!-- <h3 class="opciones col-12">Atención de lunes a viernes, de 9 a 18 hs.</h3> -->
                                <h3 class="opciones col-12">Atención de lunes a viernes, de 9 a 18 hs. GMT-0300 (hora estándar de Argentina)<br><br>De <cite class="hora-start"></cite> a <cite class="hora-end"></cite> hs horario local.</h3>
                            </div>
                        </div>


                        <div data-aos="zoom-in-up" data-aos-duration="700" class="col-12 col-lg-7 align iconos" style="justify-content: space-around;">
                            <button id="mail" class="col-3 iconBut contact-option-selected"><img class="imgLogos" src="./Images/samsung-mail.png" alt="" style="width: 100%;"></button>
                            <button id="calendar" class="col-3 iconBut"><img class="imgLogos" src="./Images/samsung-calendar.png" alt="" style="width: 100%;"></i></button>
                            <button id="numero" class="col-3 iconBut"><img class="imgLogos" src="./Images/samsung-phone.png" alt="" style="width: 100%;"></i></button>
                            <button id="whats" class="col-3 iconBut"><img class="imgLogos" src="./Images/samsung-wpp2.png" alt="" style="width: 100%;"></i></button>
                        </div>




                        <script type="text/javascript">
                            $("#mail").click(function(){

                                $('#calen, #phone, #wpp, #num').hide()
                                $('#email').fadeIn()

                               
                        });
                        </script>
                        <script type="text/javascript">
                            $("#calendar").click(function(){

                                $('#email, #phone, #wpp, #num').hide()
                                $('#calen').fadeIn()


                               
                        });
                        </script>
                        <script type="text/javascript">
                            $("#numero").click(function(){
                                // $("#email").fadeOut();
                                // $("#phone").fadeOut();
                                $("#calen, #phone, #email, #wpp").hide();
                                $("#num").fadeIn();

                                
                        });
                        </script>
                        <script type="text/javascript">
                            $("#whats").click(function(){
                                // $("#email").fadeOut();
                                // $("#phone").fadeOut();
                                $("#calen, #phone, #email, #num").hide();
                                $("#wpp").fadeIn();
 
                        });
                        </script>

                        <script>

                        $(document).on('click', '.iconBut', function(){

                        $('.contact-option-selected').removeClass('contact-option-selected')
                                                        $(this).addClass('contact-option-selected')

                        })

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


// $('.agenciaDesk').load('agencia-slider.php')

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

$('.hora-start').text(new Date( start_date ).getHours() )
$('.hora-end').text(new Date( end_date ).getHours() )



setTimeout(() => {
    $('#drag-cont').load('draggable.php')
    $('#empresa .slick-track>article:first-child').addClass('not-shadow')
    $('#mis').click()
}, 3000);



// var mail_step = 1;
// $('#email button').click(function() {
//     if ($('#email .input-activo input').val() != '') {
//         let padresin =  $('#email .input-activo')
//         padresin.removeClass('input-activo');
//         padresin.fadeOut();
//         padresin.next('.email-campos').addClass('input-activo')
//         padresin.next('.email-campos').delay('300').fadeIn();
//         $('#email .input-activo input').focus()
//         $('#tags-cont-email h3').removeClass('active-step')
//         mail_step += 1;
//         $('#tags-cont-email h3:nth-child('+mail_step+')').addClass('active-step')

//         if ( $('.input-activo').is(':nth-child(6)') ) {
//             envioMail();
//         }
//     }
// })

// Handler para cuando envian el mail
$(document).on('click', '#enviar-mail', envioMail)


function envioMail(){

    console.log('envio mail ejecutada!')

var nombre = $('#nombre1 input').val();
var email = $('#email1 input').val();
var telefono = $('#telefono input').val();
var mensaje = $('#mensaje input').val();

if($.trim(email) != ''){
    $.ajax({
        url:'contacto.php',
        method:'POST',
        cache: false,
        data:{
            nombre:nombre,
            email:email,
            telefono:telefono,
            mensaje:mensaje
        },
        dataType:'text',

        success:function(data){
            console.log(data);
        }
    });
}

}


// var calen_step = 1;
// $('#calen button').click(function() {
//     if ($('#calen .input-activo input').val() != '') {
//         let padresin =  $('#calen .input-activo')
//         padresin.removeClass('input-activo');
//         padresin.fadeOut();
//         padresin.next('.calen-campos').addClass('input-activo')
//         padresin.next('.calen-campos').delay('300').fadeIn();
//         $('#tags-cont-calen h3').removeClass('active-step')
//         calen_step += 1;
//         $('#tags-cont-calen h3:nth-child('+calen_step+')').addClass('active-step')
        
//         if ( $('.input-activo').is(':nth-child(7)') ) {
//             envioCalen();
//         }
//     }
// }) 


// Handler para cuando envian el mail
$(document).on('click', '#enviar-videollamada', envioCalen)

function envioCalen(){

    console.log('envioCalen() ejecutada!')

var fecha = $('#fecha input').val();
var hora = $('#hora input').val();
var email = $('#email2 input').val();
var nombre = $('#nombre input').val();
var asunto = $('#asunto input').val();


if($.trim(mail) != ''){
    $.ajax({
        url:'contacto.php',
        method:'POST',
        cache: false,
        data:{
            fecha:fecha,
            hora:hora,
            email:email,
            nombre:nombre,
            asunto:asunto
        },
        dataType:'text',

        success:function(data){
            console.log(data);
        }
    });
}

}

$(document).on('click', '.ir_a_tarifas', function(e){

    e.preventDefault()

    $('.saberMas').fadeOut()

    $("html, body").animate({ scrollTop: $('#tarifas').offset().top }, 100);

})

$('startBoton').click(function () {
    $("html, body").animate({ scrollTop: $('#contacto').offset().top }, 300);
    
})

$('iframe').on('load', function() {
    $('iframe').contents().find('button').click(function() {
        $("html, body").animate({ scrollTop: $('#contacto').offset().top }, 300);

    });
});
$('iframe').on('load', function() {
    $('iframe').contents().find('button').click(function() {
    });
});

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
</script>
</html>