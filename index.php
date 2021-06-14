<?php
	require("../includes/constants.php");
	require("../includes/functions.php");
	if(isset($_GET['q'])){
		$dulces=query("SELECT * FROM dulces WHERE Nombre LIKE ?", '%'.$_GET['q'].'%');
	}else{
		$dulces=query("SELECT * FROM dulces");
	}
	require("../templates/header.php");
	require("../templates/index.php");
	
?>