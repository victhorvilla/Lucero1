<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/style.default.css" id="theme-stylesheet">
    <link rel="icon" href="./Assets/img/LogoDL.png">
</head>

<body class="bg-secondary">
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-4 m-auto">
                <div class="card mt-5">
                    <div class="card-header bg-primary text-center">
                        <strong class="dashtext-4"><b>Iniciar Sesión</b></strong><br>
                        <img class="img-thumbnail" src="<?php echo base_url(); ?>/Assets/img/LogoDL.png" width="100">
                    </div>
                    <div class="card-body">
                        <?php if (isset($_GET['msg'])) { ?>
                            <div class="alert alert-danger" role="alert">
                                <strong>Usuario o contraseña Incorrecta</strong>
                            </div>
                        <?php } ?>
                        <form action="<?php echo base_url(); ?>Usuarios/login" method="post" autocomplete="off">
                            <div class="form-group">
                                <strong class="dashtext-2">Usuario</strong>
                                <input id="usuario" class="form-control" type="text" name="usuario" placeholder="Usuario">
                            </div>
                            <div class="form-group">
                                <strong class="dashtext-2">Contraseña</strong>
                                <input id="clave" class="form-control" type="password" name="clave" placeholder="Contraseña">
                            </div>
                            <button class="btn btn-primary btn-block" type="submit"><b>Iniciar</b></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>