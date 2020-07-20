<?php
	include '../connect.php';
	
    $empid_info=$_POST['empid_info'];
	$w_type_employee=$_POST['w_type_employee'];
	$w_positionwork=$_POST['w_positionwork'];
    $w_levelwork=$_POST['w_levelwork'];
    $w_sectionwork=$_POST['w_sectionwork'];
	$w_work=$_POST['w_work'];
	$w_unit=$_POST['w_unit'];
	$w_rate=$_POST['w_rate'];
	$w_contract=$_POST['w_contract'];
	$w_contractyear=$_POST['w_contractyear'];
	$w_dateposition=$_POST['w_dateposition'];

	$sql = "INSERT INTO `tb_work`( `empid_work`, `w_type_employee`, `w_positionwork`, `w_levelwork`, `w_sectionwork`, `w_work`, `w_unit`, `w_rate`, `w_contract`, `w_contractyear`, `w_dateposition`) 
	VALUES ('$empid_info','$w_type_employee','$w_positionwork','$w_levelwork','$w_sectionwork','$w_work','$w_unit','$w_rate','$w_contract','$w_contractyear','$w_dateposition')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>