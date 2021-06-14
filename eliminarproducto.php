<?php
    require("../includes/constants.php");
    require("../includes/functions.php");

    $eliminacion=query("DELETE FROM `dulces` WHERE `dulces`.`ID` = ?",$_GET["ids"]);
    
    //echo("eliminado de la base de datos");
    redirect();
?>