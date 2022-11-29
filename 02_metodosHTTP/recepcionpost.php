<?php

var_dump($_POST);
$cedula =  $_POST["cedula"];
if ($cedula[0]=1) $provincia = "Pichincha";
if ($cedula[0]=0) $provincia = "Guayas";
?>
<html>
    <head></head>
    <body>
        <h1>Hola, <?php echo $_POST["nombre"]?> !</h1>
        <h2>Tú eres de,  <?php echo $provincia ?> </h2>
    </body>
</html>