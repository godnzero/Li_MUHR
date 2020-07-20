<?php
	include '../connect.php';
	
    $empid_info=$_POST['empid_info'];
	$edu_type=$_POST['edu_type'];
	$edu_level=$_POST['edu_level'];
    $edu_university=$_POST['edu_university'];
    $edu_faculty=$_POST['edu_faculty'];
	$edu_branch=$_POST['edu_branch'];
	$edu_yeargrad=$_POST['edu_yeargrad'];
	$edu_changegrad=$_POST['edu_changegrad'];

	$sql = "INSERT INTO `tb_education`(`empid_edu`, `edu_type`, `edu_level`, `edu_university`, `edu_faculty`, `edu_branch`, `edu_yeargrad`, `edu_changegrad`) 
	VALUES ('$empid_info','$edu_type','$edu_level','$edu_university','$edu_faculty','$edu_branch','$edu_yeargrad','$edu_changegrad')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>