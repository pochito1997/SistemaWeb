<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM schedules WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Horario Eliminado';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Seleccionar item a borrar';
	}

	header('location: schedule.php');
	
?>