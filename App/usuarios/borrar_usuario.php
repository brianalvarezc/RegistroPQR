<?php
require_once($_SERVER['DOCUMENT_ROOT']."/RegistroPQR/Modelos/pqrs.php");
require_once($_SERVER['DOCUMENT_ROOT']."/RegistroPQR/Controladores/conexionBD.php");

session_start();
// Verificacion del usuario
if(isset($_SESSION['user'])){

    // verificacion del formulario
    if(isset($_POST['pqr_usuario_id']) && isset($_POST['pqr_id'])){

        $pqr_usuario_id = $_POST['pqr_usuario_id'];
        $pqr_id = $_POST['pqr_id'];

        $pqr = new Pqr(null, null, null,$pqr_usuario_id,null ,null ,null);
        $pqr->set_id($pqr_id);
        $rows = $pqr->buscar_pqr();

        // obteniendo los valores
        foreach ($rows as $fila) {
            $pqr_id = $fila['pqr_id'];
            $pqr_tipo = $fila['pqr_tipo'];
            $pqr_asunto = $fila['pqr_asunto'];
            $pqr_texto = $fila['pqr_texto'];
            $pqr_usuario_id = $fila['pqr_usuario_id'];
            $pqr_estado = $fila['pqr_estado'];
            $pqr_fecha_creado = $fila['pqr_fecha_creado'];
            $pqr_fecha_limite = $fila['pqr_fecha_limite'];
        }
    }
    

}
else{
    header('Location: /RegistroPQR/');
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
    <title>Registro de Usuario</title>
</head>

<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/RegistroPQR/App/navbar.php") ?>
    <!-- termina la barra de navegacion -->
    
    <div class="container">
        <div class="row justify-content-center my-4">
            <div class="col-sm-10">
                <form action="./pqr_borrada.php" method="post">
                    <h2>Editar PQR</h2>
                    
                    <div class="input-group">
                        <span class="input-group-text col-sm-3">PQR Id:</span>
                        <input type="number" name="pqr_id" class="form-control" required readonly value=<?php echo "'". $pqr_id."'"; ?>>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text col-sm-3">pqr_tipo:</span>
                        <select class="form-control" name="pqr_tipo" id="pqr_tipo" required disabled>
                            <option value=<?php echo "'". $pqr_tipo."'";?> selected>PQR(<?php echo $pqr_tipo; ?>)</option>
                            <option value="p">Petici&oacute;n</option>
                            <option value="q">Queja</option>
                            <option value="r">Reclamo</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text col-sm-3">pqr_asunto:</span>
                        <input type="text" name="pqr_asunto" class="form-control" required readonly value=<?php echo "'". $pqr_asunto."'";?>>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text col-sm-3">pqr_texto:</span>
                        <input type="text" name="pqr_texto" class="form-control" required readonly value=<?php echo "'". $pqr_texto . "'";?>>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text col-sm-3">pqr_usuario_id:</span>
                        <input type="text" name="pqr_usuario_id" class="form-control" required readonly value=<?php echo "'". $pqr_usuario_id."'";?>>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text col-sm-3">pqr_estado:</span>
                        <input type="text" name="pqr_estado" class="form-control" required readonly value=<?php echo "'". $pqr_estado."'";?>>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text col-sm-3">pqr_fecha_creado:</span>
                        <input type="text" name="pqr_fecha_creado" class="form-control" required readonly value=<?php echo "'". $pqr_fecha_creado."'";?>>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text col-sm-3">pqr_fecha_limite:</span>
                        <input type="text" name="pqr_fecha_limite" class="form-control" required readonly value=<?php echo "'". $pqr_fecha_limite."'";?>>
                    </div>
                    <hr>
                    <input class="btn btn-danger" id="submit" type="submit" value="Borrar definitivamente">
                    <a href="/RegistroPQR/App/manager.php">
                        <button type="button" class="btn btn-warning">
                            Volver
                        </button>
                    </a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>