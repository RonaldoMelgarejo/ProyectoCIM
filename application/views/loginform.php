<?php
    switch($msg){
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