<?php
$preferencias = false;
$nombre = "";
$clave = "";
$sexo = "";
$esHombre = "";
$esMujer = "";

if(isset($_COOKIE["cookie-chan-preferencias"]) && $_COOKIE["cookie-chan-preferencias"]!= ""){
    $preferencias = true;
    $nombre = isset($_COOKIE["cookie-chan-nombre"])?$_COOKIE["cookie-chan-nombre"] : "";
    $clave = isset($_COOKIE["cookie-chan-clave"])?$_COOKIE["cookie-chan-clave"] : "";
    $sexo = isset($_COOKIE["cookie-chan-sexo"])?$_COOKIE["cookie-chan-sexo"] : "";

    if ($sexo!="") {
        $esHombre = ($sexo == "h")?true : false;
        $esMujer = ($sexo == "m")?true : false;
    }

}

?>

<!DOCTYPE html>
<html>
    <head>
        <body>
            <h1>Formulario Login</h1>
            <form method="POST" action="mipanel.php">
                <fieldset>
                    Usuario*: <br>
                    <input type="text" name="nombre" value="<?php echo $nombre; ?>"/><br>
                    Password*: <br>
                    <input type="text" name="clave" value="<?php echo $clave; ?>"/><br>
                    Sexo* <br>
                    <input type="radio" name="hm" value="h" <?php echo ($esHombre)?"checked": "";?>> Hombre
                    <input type="radio" name="hm" value="m" <?php echo ($esMujer)?"checked": "";?>> Mujer
                    <br>
                    <br>
                    <input type="checkbox" name="chkpreferencias" <?php echo ($preferencias)?"checked": "";?>> Recordar mis datos
                    <br>
                    <br>
                    <input type="submit" value="Enviar">
                </fieldset>
            </form>
        </body>
    </head>
</html>