<?php 
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>
<?php include("../connect.php"); 

//สร้างตัวแปร
$code = $_GET["code"];

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
//แก้ไขข้อมูล
$sql = " UPDATE tb_hrd 
         SET
         prename = '$prename',
         gender = '$gender',
         idnumcard = '$idnumcard',
         nameth = '$nameth',
         surnameth = '$surnameth',
         nameeng = '$nameeng',
         surnameeng = '$surnameeng',
         email = '$email',
         mobile = '$mobile',
         teltable = '$teltable',
         booknumber = '$booknumber',
         address = '$address',
         startdate = '$startdate',
         enddate = '$enddate'
         WHERE empid_info = '$code' ";

$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
//ปิดการเชื่อมต่อ database
mysqli_close($conn);
//ถ้าสำเร็จให้ขึ้นอะไร
if ($result){
echo "<script type='text/javascript'>";
echo "alert('Edit Success');";
echo "window.location = '../search/result.php?empid_info=$code';";
echo "</script>";
}
else {
//กำหนดเงื่อนไขว่าถ้าไม่สำเร็จให้ขึ้นข้อความและกลับไปหน้าเพิ่ม		
echo "<script type='text/javascript'>";
echo "alert('error!');";
echo "window.location = 'edit_info.php?code=$code';";
echo "</script>";
}
?>