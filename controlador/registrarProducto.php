<?php
if (!empty ($_POST["Agregar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["descripcion"]) and !empty($_POST["precio"]) and !empty($_POST["categoria"]) ){

        echo "Registro exitoso";

    }else{

        echo"Rellena todo los campos";
    }


}



?>