<?php
$recordarme = false;
$nombre = "";
$clave = "";

if(isset($_COOKIE["c_recordarme"]) && $_COOKIE["c_recordarme"]!= ""){
    $recordarme = true;
    $nombre = isset($_COOKIE["c_nombre"])?$_COOKIE["c_nombre"] : "";
    $clave = isset($_COOKIE["c_clave"])?$_COOKIE["c_clave"] : "";
}
?>

<!DOCTYPE html>
<html>
    <title>Tienda de Productos</title>
    <head></head>
    <body>
        <h1>Login</h1>
        <form method="POST" action="autorizar.php">
            <fieldset>
                Usuario:<br>
                <input type="text" name="nombre" value="<?php echo $nombre; ?>"/><br>
                Clave:<br>
                <input type="password" name="clave" value="<?php echo $clave; ?>"/><br>
                <br>
                <input type="checkbox" name="chkRecordarme" <?php echo ($recordarme)?"checked": "";?>> Recordarme
                <br>
                <br>
                <input type="submit" name= "enviar" value="Enviar">
            </fieldset>
        </form>
    </body>
</html>