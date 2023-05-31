<?php
	$conn = new mysqli('localhost', 'root', '', 'libsystem');

	if ($conn->connect_error) {
	    die("Falha de Conexão: " . $conn->connect_error);
	}
	
?>