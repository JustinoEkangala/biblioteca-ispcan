<?php
	include 'includes/session.php';

	if(isset($_POST['login'])){
		$student = $_POST['student'];
		$sql = "SELECT * FROM students WHERE student_id = '$student'";
		$query = $conn->query($sql);
		if($query->num_rows > 0){
			$row = $query->fetch_assoc();
			$_SESSION['student'] = $row['id'];
			header('location: transaction.php');
		}
		else{
			$_SESSION['error'] = 'Estudante não encontrado';
			header('location: index.php');
		}

	}
	else{
		$_SESSION['error'] = 'Insira o ID do estudante primeiro';
		header('location: index.php');
	}


?>