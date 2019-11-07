<?php
// echo 0;
	require_once('../../../../properties.db.php');
// echo 02;
	$name = $_POST['name']; 
	$userName = $_POST['userName']; 
	$accessLevel = $_POST['accessLevel']; 
	$email = $_POST['email']; 
	$password = $_POST['pwd'];
	$createUser = 'Rafael';

	if ($accessLevel == 1) {
		$accessLevel = 'A';
	}
	else if ($accessLevel == 2) {
		$accessLevel = 'U';
	}
	else if ($accessLevel == 3) {
		$accessLevel = 'V';
	}
	$sql = "INSERT INTO saborVital.CA_USER (name, accessLevel, password, email, userName, createUser, createDate) VALUES ('".$name."', '".$accessLevel."', '".$password."', '".$email."', '".$userName."', '".$createUser."', CURRENT_TIMESTAMP)";
// echo 1;

	$result = mysqli_query($connection, $sql);
	 if($result){

		$row = mysqli_fetch_assoc($result);
		$codUser = mysqli_insert_id($connection);
		// $dataCriacao = $row['DT_CRIACAO'];
		echo '{"success":true, "codUser":"' . $codUser . '", "createUser": "'.$createUser.'"}';
		exit; 
	 }else{
	 	echo '{"success":false}';
	 	exit; 
	 }

?>