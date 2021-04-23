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

?>