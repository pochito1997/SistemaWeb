<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM overtime WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Hora Extra Eliminada';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Selecciona item a borrar';
	}

	header('location: overtime.php');
	
?>