<?php
    require("../includes/constants.php");
    require("../includes/functions.php");

    $nombre=$_POST["Nombre"];
    $precio=$_POST["Presio"];
    $descripcion=$_POST["Descripcion"];
    $stock=$_POST["Stock"];
    $imagen=$_POST["Imagen"];

    $inserccion=query("INSERT INTO `dulces` (`ID`, `Nombre`, `Presio`, `Descripcion`, `Stock`, `Imagen`) VALUES (NULL, ?, ?, ?, ?, ?)",$nombre,$precio,$descripcion,$stock,$imagen);
    var_dump($inserccion);
    redirect();
    //echo("guardado en la base de datos");
?>