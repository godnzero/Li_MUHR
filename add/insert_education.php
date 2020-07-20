<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Checkout example · Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

  </head>
<body class="bg-dark">
<?php include("../connect.php"); ?>
<?php
//2. query ข้อมูลจากตาราง tb_member: 
$query = "SELECT * FROM tb_hrd ORDER BY nameth ASC" or die("Error:" . mysqli_error()); 
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
$result = mysqli_query($conn, $query); 
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:

?>
  <div class="container">
    <div class="text-center">
      <img class="d-block mx-auto">
      <h2 class="text-white">Add Education</h2>
    </div>

      <div class="card p-4 col-md-12">
      <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
      </div>
      <form id="fupForm" name="form1" method="post">
        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="firstName">ชื่อพนักงาน</label>
              <select class="form-control" id="empid_info" name="empid_info" required>
                <option value="">= กรุณาเลือก =</option>
                <?php foreach($result as $results){?>
                <option value="<?php echo $results["empid_info"];?>">
                  <?php echo $results["nameth"]." ".$results["surnameth"]; ?>
                </option>
                <?php } ?>
              </select>
          </div>
          <div class="col-md-4 mb-3">
            <label for="first">ประเภทวุฒิ</label>
            <select class="form-control" id="edu_type" name="edu_type">
              <option value="">= กรุณาเลือก =</option>
              <option value="วุฒิเริ่มต้น">วุฒิเริ่มต้น</option>
              <option value="ปรับวุฒิ">ปรับวุฒิ</option>
            
            </select>
          </div>
          <div class="col-md-4 mb-3">
            <label for="level">ระดับการศึกษา</label>
            <select class="form-control" id="edu_level" name="edu_level">
              <option value="">= กรุณาเลือก =</option>
              <option value="ประกาศนียบัตรวิชาชีพ">ประกาศนียบัตรวิชาชีพ</option>
              <option value="ประกาศนียบัตรวิชาชีพชั้นสูง">ประกาศนียบัตรวิชาชีพชั้นสูง</option>
              <option value="ปริญญาตรี">ปริญญาตรี</option>
              <option value="ปริญญาโท">ปริญญาโท</option>
              <option value="ปริญญาเอก">ปริญญาเอก</option>
              
            </select>
          </div>
          <div class="col-md-4 mb-3">
            <label for="uni">มหาวิทยาลัย</label>
            <input type="text" class="form-control" id="edu_university" name="edu_university" placeholder="">
          </div>
          <div class="col-md-4 mb-3">
            <label for="section">คณะ</label>
            <input type="text" class="form-control" id="edu_faculty" name="edu_faculty" placeholder="">
          </div>

          <div class="col-md-3 mb-3">
            <label for="branch">สาขา</label>
            <input type="text" class="form-control" id="edu_branch" name="edu_branch" placeholder="">
          </div>
          <div class="col-md-4 mb-3">
            <label for="comework">ปีที่จบการศึกษา</label>
            <input id="edu_yeargrad" name="edu_yeargrad">
          </div>
          <div class="col-md-4 mb-3">
            <label for="gowork">วันที่ปรับวุฒิการศึกษา</label>
            <input id="edu_changegrad" name="edu_changegrad">
          </div>
         

        </div><!--class="row"-->
        <input type="button" name="save" class="btn btn-primary" value="Submit" id="butsave">
        <button type="button" class="btn btn-danger" onclick="history.go(-1);">Back</button>
      </form>
      </div><!--card p-4 col-md-12-->
  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2020 Mahidol Library</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
  </div><!--container-->
  <!--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
  
  <!--DATEPICKER-->
  <script>
        $('#edu_yeargrad').datepicker({
            uiLibrary: 'bootstrap4',
            format: 'yyyy-mm-dd'
        });
        $('#edu_changegrad').datepicker({
            uiLibrary: 'bootstrap4',
            format: 'yyyy-mm-dd'
        });
    </script>


<script>
$(document).ready(function() {
	$('#butsave').on('click', function() {
    //$("#butsave").attr("disabled", "disabled");
    var empid_info = $('#empid_info').val();
		var edu_type = $('#edu_type').val();
		var edu_level = $('#edu_level').val();
		var edu_university = $('#edu_university').val();
    var edu_faculty = $('#edu_faculty').val();
		var edu_branch = $('#edu_branch').val();
    var edu_yeargrad = $('#edu_yeargrad').val();
    var edu_changegrad = $('#edu_changegrad').val();
//console.log(empid_info, w_type_employee, w_positionwork, w_levelwork, w_sectionwork, w_work, w_unit);
		if(empid_info!="" && edu_type!="" && edu_level!="" && edu_university!="" && edu_faculty!="" || edu_branch!="" && edu_yeargrad!="" || edu_changegrad!=""){
			$.ajax({
				url: "save_education.php",
				type: "POST",
				data: {
          empid_info: empid_info,
          edu_type: edu_type,
					edu_level: edu_level,
					edu_university: edu_university,
          edu_faculty: edu_faculty,
					edu_branch: edu_branch,
          edu_yeargrad: edu_yeargrad,
          edu_changegrad: edu_changegrad					
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#success").show();
						$('#success').html('Data added successfully !'); 						
					}
					else if(dataResult.statusCode==201){
					   alert("Error occured !");
					}
					
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});
})
</script>

</body>
</html>





