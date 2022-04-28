<?php
    session_start();

    if(isset($_SESSION['user'])){
        $user = $_SESSION['user'];
    }
    else{
        header("Location: ../../index.php");
    }

    $id = $_SESSION['id'];
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
    <title>Registro de PQR</title>
</head>

<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT']."/RegistroPQR/App/navbar.php") ?>
    <div class="container">
        <div class="row justify-content-center my-4">
            <div class="col-sm-10">
                <form action="./registrado.php" method="post">
                    <h2>Registro de PQR</h2>
                    
                    <div class="input-group">
                        <span class="input-group-text col-sm-3">Tipo de PQR:</span>
                        <select name="tipo" id="tipo" required class="form-control">
                            <option value="" disabled selected>Seleccione</option>
                            <option value="p">Petici&oacute;n</option>
                            <option value="q">Queja</option>
                            <option value="r">Reclamo</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text col-sm-3">Id de Usuario:</span>
                        <input type="number" name="id" class="form-control" readonly value=<?php echo $id; ?>>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text col-sm-3">Estado:</span>
                        <input type="text" name="estado" class="form-control" required>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text col-sm-3">Creado:</span>
                        <input type="email" name="date" class="form-control" required>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text col-sm-3">Respuesta hasta el:</span>
                        <input type="password" name="pass1" id="pass1" class="form-control" required>
                    </div>
                    <hr>
                    <input class="btn btn-primary" id="submit" type="submit" value="Registrarme">
                    <input class="btn btn-warning" type="button" value="Cancelar" onclick="window.location='../../'">
                </form>
            </div>
        </div>
    </div>
</body>

</html>