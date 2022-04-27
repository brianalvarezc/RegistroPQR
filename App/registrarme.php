<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Registro de Usuario</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center my-4">
            <div class="col-sm-10">
                <form action="./registrado.php" method="post">
                    <h2>Registro de usuario</h2>
                    
                    <div class="input-group">
                        <span class="input-group-text col-sm-3">Identificaci&oacute;n</span>
                        <input type="number" min="1000" max="9999999999" name="id" class="form-control" required>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text col-sm-3">Nombre:</span>
                        <input type="text" name="nombre" class="form-control" required>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text col-sm-3">Apellido:</span>
                        <input type="text" name="apellido" class="form-control" required>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text col-sm-3">Email:</span>
                        <input type="email" name="mail" class="form-control" required>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text col-sm-3">Contrase&ntilde;a:</span>
                        <input type="email" name="pass1" id="pass1 class="form-control" required>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text col-sm-3">Confirme Contrase&ntilde;a:</span>
                        <input type="email" name="pass2" id="pass2 class="form-control" required>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text col-sm-3">Tel&eacute;fono</span>
                        <input type="number" name="telefono" min="9999" max="9999999999" class="form-control" required>
                    </div>
                    <hr>
                    <input class="btn btn-primary" type="submit" value="Registrarme">
                    <input class="btn btn-warning" type="button" value="Cancelar" onclick="window.location='../index.php'">
                </form>
            </div>
        </div>
    </div>
</body>

</html>