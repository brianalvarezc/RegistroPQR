<?php

require_once($_SERVER['DOCUMENT_ROOT']."/RegistroPQR/Modelos/pqrs.php");
require_once($_SERVER['DOCUMENT_ROOT']."/RegistroPQR/Controladores/conexionBD.php");
$pqr = new Pqr(null, null, null, null, null ,null ,null);
$rows = $pqr->buscar_todas_pqrs();


$fecha = date("d-m-Y H:i:s");
 
//Inicio de exportación en Excel
header('Content-type: application/vnd.ms-excel');
header("Content-Disposition: attachment; filename=pqrs_$fecha.xls");
header("Pragma: no-cache");
header("Expires: 0");

echo "<table>
            <thead>
                <tr>
                    <th>pqr_id</th>
                    <th>pqr_tipo</th>
                    <th>pqr_asunto</th>
                    <th>pqr_texto</th>
                    <th>pqr_usuario_id</th>
                    <th>pqr_estado</th>
                    <th>pqr_fecha_creado</th>
                    <th>pqr_fecha_limite</th>
                </tr>
            </thead>
            <tbody>";


foreach ($rows as $fila) {
    $pqr_id = $fila['pqr_id'];
    $pqr_tipo = $fila['pqr_tipo'];
    $pqr_asunto = $fila['pqr_asunto'];
    $pqr_texto = $fila['pqr_texto'];
    $pqr_usuario_id = $fila['pqr_usuario_id'];
    $pqr_estado = $fila['pqr_estado'];
    $pqr_fecha_creado = $fila['pqr_fecha_creado'];
    $pqr_fecha_limite = $fila['pqr_fecha_limite'];
    
    echo "<tr>";
    echo "<td>". $pqr_id . "</td>";
    echo "<td>". $pqr_tipo . "</td>";
    echo "<td>". $pqr_asunto . "</td>";
    echo "<td>". $pqr_texto . "</td>";
    echo "<td>". $pqr_usuario_id . "</td>";
    echo "<td>". $pqr_estado . "</td>";
    echo "<td>". $pqr_fecha_creado . "</td>";
    echo "<td>". $pqr_fecha_limite . "</td>";
}
?>