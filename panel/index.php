<?php

session_start();

if(!isset($_SESSION['id_user'])){
    header('location: login.php');
}

require '../php/connection.php';

// Traemos los elementos que tienen precio
$sql = $pdo->prepare("SELECT * FROM pricing");
$sql->execute(); 
$pricings = $sql->fetchAll();

// Traemos el dolar
$sql = $pdo->prepare("SELECT * FROM dolar");
$sql->execute(); 
$dolar = $sql->fetch();

$dolar = $dolar['dolar'];

// var_dump($sql);

$sql = $pdo->prepare("SELECT * FROM socios");
$sql->execute(); 
$socios = $sql->fetchAll();



?>

<head>
<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>

<style>

@font-face{
	font-family:Product Sans;
    src: url(../slick/fonts/Product-Sans-Regular.ttf);
    font-weight: normal;
    font-style: normal;
}

*{
    font-family:  Product Sans;
}

body{
    margin: 0;
    overflow-x: hidden;
}

#big-container{

    width: 100vw;
    height: 100vh;
    display: flex;
    /* align-items: center; */
    justify-content: center;

}

#panel-area{
    display: flex;
    flex-direction: column;
    margin-top: 18vh;

}

.row{
    display:flex;
}

.cell{
    padding: 20px 30px;
    border: 1px solid black;
    width: 200px;
    height: 25px;
}

.th .cell{
    overflow-y: unset!important;
    height: fit-content;
    background-color: #eaeaea;
    font-weight: bold;
    text-transform: uppercase;
}

.descripcion{
    overflow-y: scroll;
}

.nombre{
    font-weight: bold;
    text-transform: uppercase;
}

#dolar{
    display: flex;
    margin-bottom: 15px;
}

.dolar-label{
    font-weight: bold;
    margin-right: 10px;
    text-transform: uppercase;
}

#guardar-container{

    justify-content: center;
    align-items: center;
    padding: 40px;

}

#guardar{

    font-weight: 500;
    color: white;
    background: #1E7A5E;
    border: 1px solid #1E7A5E;
    border-radius: 2px;
    padding: 10px 25px;
    transition: .15s;
    opacity: 0.4;
}

.clickable{
    opacity: 1!important;
    cursor: pointer;
}

.clickable:hover{

    background-color: #0d543f;

}

#logo img{
    height: 50px;
    position: absolute;
    top: 25px;
}

.categoria{
    font-weight: bold;
    text-transform: uppercase;
}

#row1 .ars{
    color: #1E7A5E;
    font-weight: bold;
}

#socios{
    width: 100%;
    padding: 50px;
    box-sizing: border-box;
}

#socios-container{
    display: flex;
    justify-content:center;
    align-items:center;
}

.socio{
    width: 80px;
    height: 50px;
    border-radius: 5px;
    background-color: #e8e8e8;
    margin-right: 35px;
    cursor: pointer;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
    border: 1px solid gray;
}

#socios-inputs input{
    opacity: 0;
    width: 1px;
    height: 1px;
}

</style>

<body>

<div id="big-container">

    <div id="panel-area">

        <div id="logo">
            <img src="../Images/kliv-logo.png" alt="">
        </div>

        <div id="dolar">
        
            <div class="dolar-label">Cotización Dolar: </div>
            <div class="numero" contenteditable="true"><?php echo $dolar ?></div>

        </div>

        <div class="row th not-editable">
            <div class="cell">Nombre</div>
            <div class="cell">Descripcion</div>
            <div class="cell">ARS</div>
            <div class="cell">Categoría</div>
        </div>

        <?php 
        
        foreach ($pricings as $key => $pricing) {
            # code...
        
        ?>

        <div class="row" data-id="<?php echo $pricing['id'] ?>" id="row<?php echo $pricing['id'] ?>">
            <div class="cell nombre"><?php echo $pricing['nombre'] ?></div>
            <div class="cell descripcion" contenteditable="true"><?php echo $pricing['descripcion'] ?></div>
            <div class="cell ars" contenteditable="true"><?php echo $pricing['ars'] ?></div>
            <div class="cell categoria"><?php echo $pricing['cat'] ?></div>
        </div>

        <?php 
        
        }
        
        ?>

        <div id="socios">

            <div id="socios-container">
            
            
                <div class="socio" data-socio-id="1" style="background-image: url('../socios_imgs/<?php echo $socios[0]['src'] ?>')"></div>
                <div class="socio" data-socio-id="2" style="background-image: url('../socios_imgs/<?php echo $socios[1]['src'] ?>')"></div>
                <div class="socio" data-socio-id="3" style="background-image: url('../socios_imgs/<?php echo $socios[2]['src'] ?>')"></div>
                <div class="socio" data-socio-id="4" style="background-image: url('../socios_imgs/<?php echo $socios[3]['src'] ?>')"></div>
                <div class="socio" data-socio-id="5" style="background-image: url('../socios_imgs/<?php echo $socios[4]['src'] ?>')"></div>
                <div class="socio" data-socio-id="6" style="background-image: url('../socios_imgs/<?php echo $socios[5]['src'] ?>')"></div>
                <div class="socio" data-socio-id="7" style="background-image: url('../socios_imgs/<?php echo $socios[6]['src'] ?>')"></div>
                <div class="socio" data-socio-id="8" style="background-image: url('../socios_imgs/<?php echo $socios[7]['src'] ?>')"></div>
            
            
            </div>

            <div id="socios-inputs">
                <input type="file" id="input-1" data-id="1" accept="image/png, image/jpeg">
                <input type="file" id="input-2" data-id="2" accept="image/png, image/jpeg">
                <input type="file" id="input-3" data-id="3" accept="image/png, image/jpeg">
                <input type="file" id="input-4" data-id="4" accept="image/png, image/jpeg">
                <input type="file" id="input-5" data-id="5" accept="image/png, image/jpeg">
                <input type="file" id="input-6" data-id="6" accept="image/png, image/jpeg">
                <input type="file" id="input-7" data-id="7" accept="image/png, image/jpeg">
                <input type="file" id="input-8" data-id="8" accept="image/png, image/jpeg">
            </div>
        
        </div>

        <!-- Boton de guardar -->
        <div class="row not-editable" id="guardar-container">

            <div id="guardar">

                GUARDAR

            </div>

        </div>



    
    </div>

</div>
    
</body>


<script>
// $( document ).ready(function(){






// });


$(document).on('DOMSubtreeModified', '.cell, .numero', function(){

    $('#guardar').addClass('clickable')

})

// Cuando cliquean en "guardar"
$(document).on('click', '#guardar', function(){

    // Armamos un objeto con toda la info
    var table = {}

    $('.row').each(function(){

        if(!$(this).hasClass('not-editable')){

            var id = $(this).attr('data-id')
            table[id] = {}

            var nombre = $(this).find('.nombre').html()
            var descripcion = $(this).find('.descripcion').html()
            var ars = $(this).find('.ars').html()
            // var categoria = $(this).find('.categoria').html()

            table[id].id = id
            table[id].nombre = nombre
            table[id].descripcion = descripcion
            table[id].ars = ars
            // table[id].categoria = categoria

        }


    })
       
    // Traemos el precio del dolar
    var dolar = $('#dolar .numero').html()

    console.log(table)

    // Convertimos a string el JSON para poder mandarlo
    table = JSON.stringify(table)

    console.log(table)

    console.log('VA LA LLAMADA')

    // Hacemos la llamada a la API para actualizar todo
    $.ajax({
        url:'../php/api.php?func=update_pricing',
        method:'POST',
        cache: false,
        data:{
            table,
            dolar
        },
        dataType:'text',
        success:function(data){
            console.log(data)

            data = JSON.parse(data)

            if(data.error==0){
                $('#guardar').removeClass('clickable')
            }
        }
    });

    // Por cada foto que cambió de valor, hacemos la subida a la bbdd
    for(img in imgs_to_upload){

        subir_thumbnail(imgs_to_upload[img])

    }
    


})

// Cuando cambian el valor de las 2 campañas x mes, se actualizan los demas planes con un descuento en funcion de ese valor
$(document).on('DOMSubtreeModified', "[data-id|='1'] .ars", function(){
    
    var this_ars = $(this).html()

    // Aplicamos los descuentos en funcion de este valor
    $("[data-id|='2'] .ars").html(this_ars * 2)
    $("[data-id|='3'] .ars").html(this_ars * 3 * 0.9)
    $("[data-id|='4'] .ars").html(this_ars * 4 * 0.85)
    $("[data-id|='5'] .ars").html(this_ars * 5 * 0.8)
    $("[data-id|='6'] .ars").html(this_ars * 10 * 0.7)
    $("[data-id|='7'] .ars").html(this_ars * 10 * 0.5)

})

// Cuando cliquean la cajita de un socio, se dispara el click de su respectivo input
$(document).on('click', '.socio', function(){

    var id = $(this).attr('data-socio-id')
    $('#input-'+id).click()

})

imgs_to_upload = []

$(document).on('change', '#socios-inputs input', function(){
   
    console.log('cambio!')

    imgs_to_upload.push($(this).attr('data-id'))

    $('#guardar').addClass('clickable')

    show_preview(this)

})

// Funcion que muestra preview del archivo adjuntado
function show_preview(input){

    var id_input = $(input).attr('data-id')

    console.log('id_input: ', id_input)

	var detalle = '<div>'+input.files[0].name+' <span id="remove-file" onclick="removeFile()">x</span></div>'
    console.log('detalle: ', detalle)
	var preview_image = URL.createObjectURL(input.files[0]);

    console.log('prev url: ', preview_image)

    $( ".socio[data-socio-id='"+id_input+"']" ).css('background-image', 'url('+preview_image+')')

	// Escupiendo la preview image al div
	// img_prev.style.backgroundImage = 'url('+preview_image+')'


}



function subir_thumbnail(id_input){

	const inputThumbnail = document.getElementById('input-'+id_input)

	const endpoint = '../php/api.php?func=upload_img&id_socio='+id_input;
	const formData = new FormData();

	console.log(inputThumbnail.files)

	var file_name = inputThumbnail.files[0].name

    var new_name = id_input + get_extension(file_name)

	formData.append('inputThumbnail', inputThumbnail.files[0], new_name)

	fetch(endpoint, {
		method: 'post',
		body: formData
	}).then(function(response) {
  		console.log(response)
  		if(response.status == 200){

  			// Mostramos el preview del thumbnail
  			console.log('exito!')

  		}
	}).catch(console.error)

	return new_name

}

function get_extension(file_name){
    var re = /(?:\.([^.]+))?$/;
    return re.exec(file_name)[0]
}

</script>

