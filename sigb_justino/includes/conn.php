<?php
	$conn = new mysqli('localhost', 'root', '', 'libsystem');

	if ($conn->connect_error) {
	    die("Conexão falhou: " . $conn->connect_error);
	}
	
?>