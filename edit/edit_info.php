<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Untitled Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <?php include("../connect.php"); ?>
  <?php 
echo "<pre>";
print_r($_GET);
echo "</pre>";
?>
  <?php
$code = $_GET["code"];
$sql = "SELECT * FROM tb_hrd WHERE empid_info ='$code'";
$query = mysqli_query($conn,$sql) or die("Error: ".mysqli_error($conn));
$row=mysqli_fetch_array($query,MYSQLI_ASSOC)

?>
 <div class="container">
    <div class="text-center">
  <div class="col-lg-12 text-center">
    <h2><b>EDIT Information</b></h2>
    <hr class="star-primary" size="30">
  </div>

      <form method="POST" action="../edit/edit_info_ok.php?code=<?php echo $code; ?>">
        <div class="form-group col-md-12">
          <div class="row">
            <div class="col-md-3 mb-3">
              <label for="firstName">เลขประจำตัวพนักงาน</label>
              <input type="text" class="form-control" id="empid_info" name="empid_info"
                value="<?php echo $row['empid_info'];?>" readonly>
            </div>
            <div class="col-md-3 mb-3">
              <label for="first">คำนำหน้า</label>
              <select class="form-control" id="prename" name="prename" value="<?php echo $row['prename'];?>">
                <option value="">= กรุณาเลือก =</option>
                <option value="นาย" <?php if($row["prename"] == 'นาย'){echo"selected";}?>>นาย</option>
                <option value="นาง" <?php if($row["prename"] == 'นาง'){echo"selected";}?>>นาง</option>
                <option value="นางสาว" <?php if($row["prename"] == 'นางสาว'){echo"selected";}?>>นางสาว</option>
                <option value="ว่าที่ร้อยตรี" <?php if($row["prename"] == 'ว่าที่ร้อยตรี'){echo"selected";}?>>
                  ว่าที่ร้อยตรี</option>
                <option value="หม่อมหลวง" <?php if($row["prename"] == 'หม่อมหลวง'){echo"selected";}?>>หม่อมหลวง</option>
                <option value="ผศ.ดร." <?php if($row["prename"] == 'ผศ.ดร.'){echo"selected";}?>>ผศ.ดร.</option>
              </select>
            </div>
            <div class="col-md-3 mb-3">
              <label for="gender">เพศ</label>
              <select class="form-control" id="gender" name="gender" value="<?php echo $row['gender'];?>">
                <option value="">= กรุณาเลือก =</option>
                <option value="ชาย" <?php if($row["gender"] == 'ชาย'){echo"selected";}?>>ชาย</option>
                <option value="หญิง" <?php if($row["gender"] == 'หญิง'){echo"selected";}?>>หญิง</option>
              </select>
            </div>
            <div class="col-md-3 mb-3">
              <label for="firstName">เลขบัตรประชาชน</label>
              <input type="text" class="form-control" id="idnumcard" name="idnumcard" pattern="[0-9]{1,13}"
                minlength="13" maxlength="13" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)"
                value="<?php echo $row['idnumcard'];?>">
            </div>
            <div class="col-md-3 mb-3">
              <label for="firstName">ชื่อ</label>
              <input type="text" class="form-control" id="nameth" name="nameth" pattern="^[ก-๏]+$"
                title="กรุณากรอกภาษาไทยเท่านั้น" onkeyup="isThaichar(this.value,this)"
                value="<?php echo $row['nameth'];?>">
            </div>
            <div class="col-md-3 mb-3">
              <label for="lastName">นามสกุล</label>
              <input type="text" class="form-control" id="surnameth" name="surnameth" pattern="^[ก-๏]+$"
                title="กรุณากรอกภาษาไทยเท่านั้น" onkeyup="isThaichar(this.value,this)"
                value="<?php echo $row['surnameth'];?>">
            </div>
            <div class="col-md-3 mb-3">
              <label for="firstName">First name</label>
              <input type="text" class="form-control" id="nameeng" name="nameeng" pattern="[a-zA-Z]{1,}"
                title="Please fill only English language"
                onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122)"
                value="<?php echo $row['nameeng'];?>">
            </div>
            <div class="col-md-3 mb-3">
              <label for="lastName">Last name</label>
              <input type="text" class="form-control" id="surnameeng" name="surnameeng" pattern="^[a-zA-Z]+$"
                title="Please fill only English language"
                onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122)"
                value="<?php echo $row['surnameeng'];?>">
            </div>
            <div class="col-md-4 mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email"
                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="name.sur@mahidol.ac.th"
                onkeyup="ValidateEmail();" value="<?php echo $row['email'];?>">
              <span id="error" style="display:none;color:red;">Invalid email</span>
            </div>
            <div class="col-md-4 mb-3">
              <label for="mobile">เบอร์มือถือ</label>
              <input type="text" class="form-control" id="mobile" name="mobile" pattern="[0-9]{1,10}" minlength="10"
                maxlength="10" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)"
                value="<?php echo $row['mobile'];?>">
            </div>
            <div class="col-md-4 mb-3">
              <label for="phonetable">เบอร์โต๊ะ</label>
              <input type="text" class="form-control" id="teltable" name="teltable"
                value="<?php echo $row['teltable'];?>">
            </div>
            <div class="col-md-4 mb-3">
              <label for="numberorder">เลขที่หนังสือคำสั่ง</label>
              <input type="text" class="form-control" id="booknumber" name="booknumber"
                value="<?php echo $row['booknumber'];?>">
            </div>
            <div class="col-md-8 mb-3">
              <label for="address">ที่อยู่</label>
              <input type="text" class="form-control" id="address" name="address" value="<?php echo $row['address'];?>">
            </div>
            <div class="col-md-4 mb-3">
              <label for="comework">วันเข้าทำงาน</label>
              <input id="startdate" name="startdate" value="<?php echo $row['startdate'];?>">
            </div>
            <div class="col-md-4 mb-3">
              <label for="gowork">วันเกษียณ</label>
              <input id="enddate" name="enddate" value="<?php echo $row['enddate'];?>">
            </div>
          </div>
          <button class="btn btn-primary" type="submit" name="submit">Submit</button>
          <button type="button" class="btn btn-danger" onclick="history.go(-1);">Back</button>
      </form>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>
  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
  <!--DATEPICKER-->
  <script>
    $('#startdate').datepicker({
      uiLibrary: 'bootstrap4',
      format: 'yyyy-mm-dd'
    });
    $('#enddate').datepicker({
      uiLibrary: 'bootstrap4',
      format: 'yyyy-mm-dd'
    });
  </script>

</body>

</html>