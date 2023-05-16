<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_l.css">

    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row align-items-stretch">
            <div class="col d-none d-lg-block">
                <div class="glow"></div>
                <div class="frame">
                    <div class="top"></div>
                    <div class="body-lamp">
                        <div class="gooey">
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                        </div>
                    </div>
                    <div class="base-lamp"></div>
                    <div class="base"></div>
                </div>

            </div>
            <div class="col">
                <h2 class="fw-bold text-center py-5">Inicio de Sesión</h2>

                <form class="form-register" action="./config/Process.php" method="POST">
                <div class="mb-4">
                        <label for="user" class="form-label">Usuario</label>
                        <input type="text" class="form-control" name="user_login">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">Correo Electronico</label>
                        <input type="email" class="form-control" name="mail_login">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="pass_login">
                    </div>
                    <div class="mb-4 form-check">
                        <input type="checkbox" name="connected" id="form-check-input">
                        <label for="connected" class="form-check-label">Mantenerme conectado</label>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary" value="login">Iniciar Sesión</button>
                    </div>
                </form>
            </div>

        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>