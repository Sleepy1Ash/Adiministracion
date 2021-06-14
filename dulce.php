<?php
	require("../includes/constants.php");
	require("../includes/functions.php");
	$t=query("SELECT * FROM dulces WHERE ID=?", $_GET['id'])[0];
	require("../templates/header.php");
	require("../templates/dulce.php");
?>