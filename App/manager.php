<?php

session_start();

require_once($_SERVER['DOCUMENT_ROOT']."/RegistroPQR/Modelos/pqrs.php");
require_once("../Controladores/conexionBD.php");

// Si se ha iniciado sesion se puede continuar
if(isset($_SESSION['user']) && isset($_SESSION['id'])){

    $user = $_SESSION['user'];
    $pqr_usuario_id = $_SESSION['id'];
    
    // creando el objeto para usar su metodos
    $pqr = new Pqr(null, null, null,$pqr_usuario_id,null ,null ,null);
    
    // Condicion para mostrar todos si es admin o los propios si es usuario
    if($_SESSION['admin'] == "No"){
        $rows = $pqr->buscar_pqrs();
    }else{
        $rows = $pqr->buscar_todas_pqrs();
    }
}
else{
    header("Location: /RegistroPQR/");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../js/funciones.js"></script>
    <title>Administrador de PQRs</title>
</head>

<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/RegistroPQR/App/navbar.php") ?>
    <!-- termina la barra de navegacion -->


    <div class="container">
        <a href="/RegistroPQR/App/pqr/nueva_pqr.php">
            <button class="btn btn-primary">+ Nueva PQR</button>
        </a>
        <table class="table">
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
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
            <?php 
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
                    // boton de formulario para editar
                    echo "<td>
                        <form action='/RegistroPQR/App/pqr/editar_pqr.php' method='post'>
                            <input type='hidden' name='pqr_usuario_id' id='pqr_usuario_id' value='".$pqr_usuario_id."'>
                            <input type='hidden' name='pqr_id' id='pqr_id' value='".$pqr_id."'>
                            <input type='submit' class='btn btn-primary' value='Editar'>
                            </form>
                            </td>";
                            
                            // boton de formulario para borrar
                            echo "<td>
                            <form action='/RegistroPQR/App/pqr/borrar_pqr.php' method='post'>
                            <input type='hidden' name='pqr_usuario_id' id='pqr_usuario_id' value='".$pqr_usuario_id."'>
                            <input type='hidden' name='pqr_id' id='pqr_id' value='".$pqr_id."'>
                            <input type='submit' class='btn btn-danger' value='Borrar'>
                        </form>
                    </td>";

                    echo "</tr>";
                } ?>
        </tbody>
        </table>
    </div>
</body>
</html>