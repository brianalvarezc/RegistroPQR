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
            <div class="col-sm-4">
                <form action="" method="post">
                    <h3>Iniciar Sesi&oacute;n</h3>
                    Usuario:
                    <input class="form-control" type="email" name="email" id="email" required placeholder="Email registrado">
                    Password:
                    <input class="form-control" type="password" name="pass" id="pass" required>
                    <hr>
                    <input class="form-control btn-primary" type="submit" value="Login">
                </form>
                <hr>
                <h5>Soy nuevo, quiero <a href="./App/registrarme.php">registrarme</a></h5>
            </div>
        </div>
    </div>
</body>
</html>