<?php

session_start();

require_once("../Controladores/conexionBD.php");

if(isset($_SESSION['user']) && isset($_SESSION['id'])){

    $user = $_SESSION['user'];
    $id = $_SESSION['id'];

    if($_SESSION['admin'] == "No"){
        $query = $conexion->prepare("SELECT * FROM pqr WHERE pqr_usuario_id = ?");
        $query->bind_param("i", $id);
    }else{
        $query = $conexion->prepare("SELECT * FROM pqr");
    }
    $query->execute();
    $result = $query->get_result();
}
else{
    header("Location: ../index.php");
}

// obteniendo los datos
while($row = $result->fetch_array()){
    $rows[] = $row;
}

foreach ($rows as $fila) {
    $pqr_id = $fila['pqr_id'];
    $pqr_tipo = $fila['pqr_tipo'];
    $pqr_usuario_id = $fila['pqr_usuario_id'];
    $pqr_estado = $fila['pqr_estado'];
    $pqr_fecha_creado = $fila['pqr_fecha_creado'];
    $pqr_fecha_limite = $fila['pqr_fecha_limite'];

    echo $pqr_id;
    echo $pqr_tipo;
    echo $pqr_usuario_id;
    echo $pqr_estado;
    echo $pqr_fecha_creado;
    echo $pqr_fecha_limite;
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
    <table class="table">
        <thead>
            <tr>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
            </tr>
        </tbody>
        </table>
    </div>
</body>
</html>