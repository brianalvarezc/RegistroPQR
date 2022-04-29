<?php
session_start();
    require_once($_SERVER['DOCUMENT_ROOT']."/RegistroPQR/Modelos/pqrs.php");
    
    $pqr_id = $_POST['pqr_id'];
    // $pqr_tipo = $_POST['pqr_tipo'];
    // $pqr_asunto = $_POST['pqr_asunto'];
    // $pqr_texto = $_POST['pqr_texto'];
    // $pqr_usuario_id = $_POST['pqr_usuario_id'];
    // $pqr_estado = $_POST['pqr_estado'];
    // $pqr_fecha_creado = $_POST['pqr_fecha_creado'];
    // $pqr_fecha_limite = $_POST['pqr_fecha_limite'];

    $pqr = new Pqr(null, null, null, null, null, null, null);
    $pqr->set_id($pqr_id);

    $resultado = $pqr->borrar();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Eliminar PQR</title>
</head>
<body>
    
<?php require_once($_SERVER["DOCUMENT_ROOT"]."/RegistroPQR/App/navbar.php") ?>
    <!-- termina la barra de navegacion -->

    <div class="container">
        <div class="row justify-content-center my-4">
            <div class="col-sm-10">
                <h2>Eliminar PQR</h2>
                <div class="alert alert-success">
                    <h2><?php echo $resultado ?></h2>
                </div>
                <a href="/RegistroPQR/App/manager.php">
                    <button class="btn btn-warning">
                        Volver
                    </button>
                </a>
            </div>
        </div>
    </div>
</body>
</html>