<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="admin, dashboard">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Dompet : Payment Admin Template">
	<meta property="og:title" content="Dompet : Payment Admin Template">
	<meta property="og:description" content="Dompet : Payment Admin Template">
	<meta property="og:image" content="https://dompet.dexignlab.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>Dompet : Payment Admin Template</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

</head>
<!--
<body>

    <?php
        switch($mensaje){
            case '1':
                $mensaje="Error de ingreso";
                break;
            case '2':
                $mensaje="Acceso no valido";
                break;
            case '3':
                $mensaje="Gracias por usar el sistema";
                break;
            case 'default':
                $mensaje="ingrese sus datos";
                break;
        }
    ?>

    <p><?php echo $mensaje; ?></p>

    <?php
        echo form_open_multipart('usuario/validarusuario');
    ?>

    <div>
        <input type="text" name="login" placeholder="login">
        <input type="password" name="password" placeholder="password">
        <button type="submit">Ingresar</button>
    </div>

    <?php
        echo form_close();
    ?>


    
</body>
    -->

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-5">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="index.html"><img src="images/logo-full.png" alt=""></a>
									</div>
                                    <h4 class="text-center mb-4">Inicia sesión</h4>
                                    <form action="index.html">
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control" value="hello@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Contraseña</strong></label>
                                            <input type="password" class="form-control" value="Password">
                                        </div>
                                        <div class="row d-flex justify-content-between mt-4 mb-2">
                                            
                                            <div class="mb-3">
                                                <a href="page-forgot-password.html">¿Has olvidado tu contraseña?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-secondary btn-block">iniciar sesión</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>¿No tienes una cuenta? <a class="text-secondary" href="page-register.html">Registrarse</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
