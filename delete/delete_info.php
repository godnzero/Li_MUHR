<?php  
include('../connect.php');
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($conn, "DELETE FROM `tb_hrd` WHERE empid_info=$id");
	$_SESSION['message'] = "Record deleted!"; 
	header('location: ../search/search.php');
}
?>
