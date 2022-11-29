<?php
if(isset($_GET)){
    if($_GET["borrar"]==1){
        //Elimino las cookies
        setcookie("cookie-chan-nombre", "");
        setcookie("cookie-chan-clave", "");
        setcookie("cookie-chan-sexo", "");
        setcookie("cookie-chan-preferencias", "");
    }
}

header("Location: index.php"); //redirrecionar

?>

