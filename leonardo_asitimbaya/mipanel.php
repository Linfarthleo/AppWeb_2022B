<?php
#crear sesión o reiniciar una preexistente
session_start();
#Validar que las sesiones existen y no son vacías
if (!isset($_SESSION["s_nombre"]) && !isset($_SESSION["s_clave"])) {
    header("Location: index.php");
}
 
$language="sp";

if(isset($_GET["language"])){
    $language = $_GET["language"];
    setcookie("language",$language,time()+(60*60*24));
}else{
    if(isset($_COOKIE["language"])){
        $language = $_COOKIE["language"];
    }
}
?>

<html>
    <title>Tienda de Productos</title>
    <head></head>
    <body>
    <?php 
    if($language=="sp"){
        echo "<h1>PANEL PRINCIPAL</h1>";
        echo "<h2>Bienvenido Usuario: ".$_SESSION["s_nombre"]."</h2>";
    }else{
        echo "<h1>MAIN PANEL</h1>"; 
        echo "<h2>Welcome User: ".$_SESSION["s_nombre"]."</h2>";
    }
    ?>
        <p><a href="mipanel.php?language=sp">ES(Español)</a> | <a href="mipanel.php?language=en"> EN(English)</a></p>
        <p><a href="cerrarsesion.php">
            <?php 
            if($language=="sp"){ 
                echo "Cerrar sesion"; 
            }else{ 
                echo"Log out";
            }
            ?>
        </a></p>
            
            <?php 
            
            if($language=="sp"){
                $archivo_idioma = "categorias_es.txt"; 
                echo "<h2>Lista de Productos</h2>";
            }else{
                $archivo_idioma = "categorias_en.txt";
                echo "<h2>Product List</h2>"; 
            }
            
            $fp = fopen($archivo_idioma, "r");
            while(!feof($fp)) {
                $linea = fgets($fp);
                echo $linea . "<br />";
                }
            fclose ($fp);
        ?>
    </body>
</html>