<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$course = $_POST['course'];

		$sql = "UPDATE students SET firstname = '$firstname', lastname = '$lastname', course_id = '$course' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Estudante atualizado com sucesso';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Preencha o formulário de edição primeiro';
	}

	header('location:student.php');

?>