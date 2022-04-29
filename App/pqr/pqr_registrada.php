<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/RegistroPQR/Modelos/pqrs.php");
    
    $pqr_tipo = $_POST['tipo'];
    $pqr_asunto = $_POST['asunto'];
    $pqr_texto = $_POST['texto'];
    $pqr_usuario_id = $_POST['usuario_id'];
    $pqr_estado = $_POST['estado'];
    $pqr_fecha = $_POST['fecha'];

    switch($pqr_tipo){
        case "p":
            $dias = 7;
            break;
        case "q":
            $dias = 3;
            break;
        case "r":
            $dias = 2;
            break;
        default:
            $dias = 7;
    }
    $pqr_fecha_limite = Date("Y-m-d H:i:s", strtotime($pqr_fecha . "+" . $dias . " days"));

    $pqr = new Pqr($pqr_tipo,$pqr_asunto,$pqr_texto,$pqr_usuario_id,$pqr_estado,$pqr_fecha,$pqr_fecha_limite);
    $resultado = $pqr->crear();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Registro de PQR</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center my-4">
            <div class="col-sm-10">
                <h2>Registro de PQR</h2>
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