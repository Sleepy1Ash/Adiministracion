<?php
    require("../includes/constants.php");
    require("../includes/functions.php");
    $nombre=$_POST["Nombre"];
    $precio=$_POST["Presio"];
    $descripcion=$_POST["Descripcion"];
    $stock=$_POST["Stock"];
    $imagen=$_POST["Imagen"];

    $update=query("UPDATE `dulces` SET `Nombre` = ?, `Presio` = ?, `Descripcion` = ?, `Stock` = ?, `Imagen` = ? WHERE `dulces`.`ID` = ?",$nombre,$precio,$descripcion,$stock,$imagen,$_GET["idts"]);
    var_dump($update);
    //echo("Si junciona");
    redirect();
    ?>