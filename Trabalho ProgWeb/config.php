<?php
	define("HOST", "localhost");
	define("USER", "root");
	define("PASS", "");
	define("BASE", "filtrodeprecos");

	$conn = new mysqli(HOST,USER,PASS,BASE) or die(mysqli_error($conn));
?>