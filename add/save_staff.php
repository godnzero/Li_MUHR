<?php
	include '../connect.php';
	
    $empid_info=$_POST['empid_info'];
	$prename=$_POST['prename'];
	$gender=$_POST['gender'];
    $idnumcard=$_POST['idnumcard'];
    $nameth=$_POST['nameth'];
	$surnameth=$_POST['surnameth'];
	$nameeng=$_POST['nameeng'];
    $surnameeng=$_POST['surnameeng'];
    $email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$teltable=$_POST['teltable'];
	$booknumber=$_POST['booknumber'];
    $address=$_POST['address'];
    $startdate=$_POST['startdate'];
    $enddate=$_POST['enddate'];	

	$sql = "INSERT INTO `tb_hrd`( `empid_info`, `prename`, `gender`, `idnumcard`, `nameth`, `surnameth`, `nameeng`, `surnameeng`, `email`, `mobile`, `teltable`, `booknumber`, `address`, `startdate`, `enddate`) 
	VALUES ('$empid_info','$prename','$gender','$idnumcard','$nameth','$surnameth','$nameeng','$surnameeng','$email','$mobile','$teltable','$booknumber','$address','$startdate','$enddate')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>