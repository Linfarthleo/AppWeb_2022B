<?php

var_dump($_POST);
$nombre = $_POST["nombre"];
$clave = $_POST["clave"];
$sexo = $_POST["hm"];
$guardarPreferencias = (isset($_POST["chkpreferencias"]))?$_POST["chkpreferencias"]:"";



if($guardarPreferencias != ""){
    //setcookie("cookie-chan-nombre", $nombre, time()+(60*60*24*30));
    setcookie("cookie-chan-nombre", $nombre, 0);
    setcookie("cookie-chan-clave", $clave, 0);
    setcookie("cookie-chan-sexo", $sexo, 0);
    setcookie("cookie-chan-preferencias", $guardarPreferencias, time()+(60*60*24*30));
}

?>

<html>
    <head></head>
    <body>
        <h1>Panel Principal</h1>
        <h1>Bienvenido: <?php echo $nombre?></h1>
        <hr>
        <a href="borrarcookies.php?borrar=1">Borrar Cookies y regresar</a> 
        <br>
        <a href="borrarcookies.php?borrar=0">Solo Regresar</a>
    </body>
</html>