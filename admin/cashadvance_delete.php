<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM cashadvance WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Avance Efectivo Eliminado';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Seleccionar item para borrar';
	}

	header('location: cashadvance.php');
	
?>