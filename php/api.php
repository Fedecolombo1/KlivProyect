<?php

require 'connection.php';


$func = $_GET['func'];


if($func=='update_pricing'){

    $table = $_POST['table'];
    $dolar = $_POST['dolar'];

    $table = json_decode($table);

    $err = 0;

    // Recorremos cada row de la tabla para actualizar los pricings
    foreach ($table as $key => $pricing) {
        # code...
        
        $sql = "UPDATE pricing SET descripcion=?, ars=? WHERE id=?";
        $stmt= $pdo->prepare($sql);
        $stmt->execute([$pricing->descripcion, $pricing->ars, $pricing->id]);
        
        if(!$stmt){
            $err = 1;
        }
    
    }

    // Actualizamos el dolar
    $sql = "UPDATE dolar SET dolar=?";
    $stmt= $pdo->prepare($sql);
    $stmt->execute([$dolar]);

    if(!$stmt){
        $err = 1;
    }

    echo '{"error": 0}';

}

if($func=='upload_img'){

    $id_socio = $_GET['id_socio']; 

    try{
	
        echo basename($_FILES['inputThumbnail']['name']);
        
        // Mover el archivo subido al directorio correspondiente
        $target_path = '../socios_imgs/'. basename($_FILES['inputThumbnail']['name']);
        move_uploaded_file($_FILES['inputThumbnail']['tmp_name'], $target_path);

        echo 'exito!';

        // Actualizamos el src
        $sql = "UPDATE socios SET src=? WHERE id=?";
        $stmt= $pdo->prepare($sql);
        $stmt->execute([basename($_FILES['inputThumbnail']['name']), $id_socio]);
    
    }catch(Excaption $e){
        echo $e;	
    }
    

}

?>