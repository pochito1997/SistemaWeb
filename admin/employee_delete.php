<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM employees WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Empleado Eliminado Correctamente';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Seleccionar Item Primero';
	}

	header('location: employee.php');
	
?>