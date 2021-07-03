<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM deductions WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Descuento Agregado Correctamente';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Seleccione item a Borrar';
	}

	header('location: deduction.php');
	
?>