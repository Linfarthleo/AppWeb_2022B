<?php
session_start();

if(isset($_POST["nombre"]) && isset($_POST["clave"]) && $_POST["nombre"] != "" && $_POST["clave"] != ""){
    $_SESSION['s_nombre'] = $_POST["nombre"];
    $_SESSION['s_clave'] = $_POST["clave"];
    header("Location:mipanel.php");
}else{
    header("Location:index.php");
}

#SE CREAN COOKIES 
$nombre = $_POST["nombre"];
$clave = $_POST["clave"];
$guardarRecordarme = (isset($_POST["chkRecordarme"]))?$_POST["chkRecordarme"]:"";

if($guardarRecordarme != ""){
    setcookie("c_nombre", $nombre, 0);
    setcookie("c_clave", $clave, 0);
    setcookie("c_recordarme", $guardarRecordarme, 0);
}else{
    //Elimino las cookies
    setcookie("c_nombre", "");
    setcookie("c_clave", "");
    setcookie("c_recordarme", "");
}
?>