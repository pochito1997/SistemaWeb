<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$description = $_POST['description'];
		$amount = $_POST['amount'];

		$sql = "INSERT INTO deductions (description, amount) VALUES ('$description', '$amount')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Descuento Agregado Correctamente';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Rellene Formulario';
	}

	header('location: deduction.php');

?>