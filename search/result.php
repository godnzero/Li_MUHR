<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv=Content-Type content="text/html; charset=utf-8">
  <title>HRD</title>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- DataTables -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.material.min.css">
  <link rel="stylesheet" type="text/css"
    href="https://cdn.datatables.net/responsive/2.2.3/css/dataTables.responsive.css">
  <!-- Icon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>

<body>
  <?php include("../connect.php"); ?>
  <?php
$code = $_GET["empid_info"];
//query
  //inner join tb_education on tb_hrd.empid_info = tb_education.empid_edu
  //inner join tb_work on tb_hrd.empid_info = tb_work.empid_work
   $sql = "SELECT * FROM tb_hrd   
   WHERE empid_info ='$code'";
   $sql_w = "SELECT * FROM tb_work   
   WHERE empid_work ='$code'";
   $sql_e = "SELECT * FROM tb_education   
   WHERE empid_edu ='$code'";
   $query = mysqli_query($conn,$sql) or die("Error: ".mysqli_error($conn));
   $query_w = mysqli_query($conn,$sql_w) or die("Error: ".mysqli_error($conn));
   $query_e = mysqli_query($conn,$sql_e) or die("Error: ".mysqli_error($conn));
?>

  <?php
$result=mysqli_fetch_array($query,MYSQLI_ASSOC)

//ใช้คืนค่า ค่าข้อมูล ของ result ในแถวที่ชี้อยู่ และเก็บไว้ที่ arrayและเลื่อนไปตัวชี้ชี้ไปยังตำแหน่งถัดไป
//MYSQL_ASSOC คือ key ต้องเป็นชื่อคอลัมน์เท่านั้น
	
?>
  <div class="col-lg-12 text-center">
    <h2><b>Information</b></h2>
    <hr class="star-primary" size="30">
  </div><!--col-lg-12 text-center-->

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <div class="card-header">
              <h3 class="my-0 font-weight-normal"><b>Personal Information</b></h3>
            </div><!--card-header-->
            <!--<a class="example-image-link" href="<?php echo $path . $image; ?>" data-lightbox="roadtrip">
                <img class="img-responsive" src="<?php echo $path . $image; ?> " style="height: 300px; width: 100%; display: block;" ></a>-->
            <div class="card-body">
              <p class="card-text"><b>รหัสพนักงาน : <?php echo $result["empid_info"]; ?></b></p>
              <p>คำนำหน้าชื่อ : <?php echo $result["prename"]; ?></p>
              <p>เพศ : <?php echo $result["gender"]; ?></p>
              <p>เลขบัตรประชาชน : <?php echo $result["idnumcard"]; ?></p>
              <p>ชื่อ-สกุล : <?php echo $result["nameth"].$result["surnameth"]; ?></p>
              <p>Name-Surname : <?php echo $result["nameeng"].$result["surnameeng"]; ?></p>
              <p>Email : <?php echo $result["email"]; ?></p>
              <p>เบอร์โทรศัพท์ : <?php echo $result["mobile"];?></p>
              <p>เบอร์โทรโต๊ะ : <?php echo $result["teltable"]; ?></p>
              <p>เลขหนังสือ : <?php echo $result["booknumber"];?></p>
              <p>ที่อยู่ : <?php echo $result["address"];?></p>
              <p>วันเริ่ม :
                <?php 
	          $date=$result["startdate"];
            list($y,$m,$d)=explode('-',$date);
            $y=$y+543;
	          echo $d.'/'.$m.'/'.$y;
	          ?>
              </p>
              <p>วันหมด :
                <?php 
	          $daten=$result["enddate"];
            list($y,$m,$d)=explode('-',$daten);
            $y=$y+543;
	          echo $d.'/'.$m.'/'.$y;
	          ?>
              </p>

              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"
                    onclick='location.replace("../edit/edit_info.php?code=<?=$result["empid_info"]?>")'>Edit</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"
                    onclick='location.replace("../delete/delete_info.php?del=<?=$result["empid_info"]?>")'>Delete</button>
                </div><!--btn-group-->
              </div><!--d-flex justify-content-between align-items-center-->
            </div><!--card-body-->
          </div><!--card mb-4 box-shadow-->
        </div><!--col-md-4-->
    

        <?php
while($result_w=mysqli_fetch_array($query_w,MYSQLI_ASSOC)){
?>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <div class="card-header">
              <h3 class="my-0 font-weight-normal"><b>Working Information</b></h3>
            </div><!--card-header-->

            <div class="card-body">
              <p class="card-text">ประเภท : <?php echo $result_w["w_type_employee"];?></p>
              <p>ตำแหน่ง : <?php echo $result_w["w_positionwork"];?></p>
              <p>ระดับ : <?php echo $result_w["w_levelwork"];?></p>
              <p>แผนก : <?php echo $result_w["w_sectionwork"];?></p>
              <p>งาน : <?php echo $result_w["w_work"];?></p>
              <p>หน่วย : <?php echo $result_w["w_unit"];?></p>
              <p>ระดับ : <?php echo $result_w["w_rate"];?></p>
              <p>สัญญา : <?php echo $result_w["w_contract"];?></p>
              <p>ปี : <?php echo $result_w["w_contractyear"];?></p>
              <p>วัน : <?php echo $result_w["w_dateposition"];?></p>
              <p>Test NO. : <?php echo $result_w["w_no"];?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"
                    onclick='location.replace("../delete/delete_job.php?del=<?=$result_w["w_no"]?>")'>Delete</button>
                </div><!--btn-group-->
              </div><!--d-flex justify-content-between align-items-center-->
            </div><!--card-body-->
          </div><!--card mb-4 box-shadow-->
        </div><!--col-md-4-->
      <?php            
}
?>

      <?php
while($result_e=mysqli_fetch_array($query_e,MYSQLI_ASSOC)){
?>
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h3 class="my-0 font-weight-normal"><b>Education</b></h3>
          </div><!--card-header-->

          <div class="card-body">
            <p class="card-text">ประเภทวุฒิ : <?php echo $result_e["edu_type"];?></p>
            <p>ระดับ : <?php echo $result_e["edu_level"];?></p>
            <p>มหาลัย : <?php echo $result_e["edu_university"];?></p>
            <p>คณะ : <?php echo $result_e["edu_faculty"];?></p>
            <p>สาขา : <?php echo $result_e["edu_branch"];?></p>
            <p>ปีรับวุฒิ : <?php echo $result_e["edu_yeargrad"];?></p>
            <p>วันปรับวุฒิ : <?php echo $result_e["edu_changegrad"];?></p>
            <p>Test NO. : <?php echo $result_e["edu_no"];?></p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"
                    onclick='location.replace("../delete/delete_education.php?del=<?=$result_e["edu_no"]?>")'>Delete</button>
                </div><!--btn-group-->
              </div><!--d-flex justify-content-between align-items-center-->
          </div><!--card-body-->
        </div><!--card mb-4 box-shadow-->
      </div><!--col-md-4-->
    <?php            
}
?>
  </div><!--row-->
  </div><!--container-->
  </div><!--album py-5 bg-light-->

  </tbody>
  </thead>
  </table>

  <button type="button" class="btn btn-danger" onclick="window.location.href='search.php'">Back</button>
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js">
  </script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/dataTables.material.min.js">
  </script>
  <script type="text/javascript" language="javascript"
    src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.js"></script>
  <!--use DataTable-->
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable({
        responsive: true
      });
    });
  </script>
  <?php mysqli_close($conn); ?>
  
</body>

</html>