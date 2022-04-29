<?php

require_once($_SERVER['DOCUMENT_ROOT']."/RegistroPQR/Modelos/pqrs.php");
require_once($_SERVER['DOCUMENT_ROOT']."/RegistroPQR/Controladores/conexionBD.php");
$pqr = new Pqr(null, null, null, null, null ,null ,null);
$rows = $pqr->buscar_todas_pqrs();


$fecha = date("d-m-Y H:i:s");
 
//Inicio de exportación en Excel
header('Content-type: text/csv');
header("Content-Disposition: attachment; filename=pqrs_$fecha.csv");
header("Pragma: no-cache");
header("Expires: 0");

echo "pqr_id,pqr_tipo,pqr_asunto,pqr_texto,pqr_usuario_id,pqr_estado,pqr_fecha_creado,pqr_fecha_limite\n";
foreach ($rows as $fila) {
    $pqr_id = $fila['pqr_id'];
    $pqr_tipo = $fila['pqr_tipo'];
    $pqr_asunto = $fila['pqr_asunto'];
    $pqr_texto = $fila['pqr_texto'];
    $pqr_usuario_id = $fila['pqr_usuario_id'];
    $pqr_estado = $fila['pqr_estado'];
    $pqr_fecha_creado = $fila['pqr_fecha_creado'];
    $pqr_fecha_limite = $fila['pqr_fecha_limite'];
    
    
    echo $pqr_id . ",";
    echo $pqr_tipo . ",";
    echo $pqr_asunto . ",";
    echo $pqr_texto . ",";
    echo $pqr_usuario_id . ",";
    echo $pqr_estado . ",";
    echo $pqr_fecha_creado . ",";
    echo $pqr_fecha_limite . ",";
    echo "\n";
}
?>