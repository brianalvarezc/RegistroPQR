<?php


session_start();
require_once("../Controladores/conexionBD.php");

if(isset($_SESSION['user']) && isset($_SESSION['id'])){

    $user = $_SESSION['user'];
    $id = $_SESSION['id'];
    if($_SESSION['admin'] == "No"){
        $query = $conexion->prepare("SELECT * FROM pqr WHERE usuario_id = ?");
        $query->bind_param("i", $id);
    }else{
        $query = $conexion->prepare("SELECT * FROM pqr");
    }
}
else{
    header("Location: ../index.php");
}

$query = $conexion->prepare();
$query->bind_param("s", $usuario_id);
$pass = $_POST['pass'];

$query->execute();

$result = $query->get_result();

while($row = $result->fetch_array()){
    $rows[] = $row;
}

foreach ($rows as $fila) {
    $hash = $fila['usuario_pass'];
    $usuario_nombre = $fila['usuario_nombre'];
    $admin = $fila['usuario_admin'];
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