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

$dolar = $dolar['dolar']

// var_dump($sql);



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

</style>

<body>

<div id="big-container">

    <div id="panel-area">

        <div id="logo">
            <img src="../images/kliv-logo.png" alt="">
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


</script>

