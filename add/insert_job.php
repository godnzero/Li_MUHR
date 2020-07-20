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
      <h2 class="text-white">Add JOB</h2>
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
          <div class="col-md-2 mb-3">
            <label for="first">ประเภทพนักงาน</label>
            <select class="form-control" id="w_type_employee" name="w_type_employee">
              <option value="">= กรุณาเลือก =</option>
              <option value="ข้าราชการ">ข้าราชการ</option>
              <option value="พนักงานมหาวิทยาลัย">พนักงานมหาวิทยาลัย</option>
              <option value="พนักงานส่วนงาน">พนักงานส่วนงาน</option>
              <option value="ลูกจ้างประจำ">ลูกจ้างประจำ</option>
              <option value="ลูกจ้างชั่วคราว">ลูกจ้างชั่วคราว</option>
            </select>
          </div>
          <div class="col-md-4 mb-3">
            <label for="gender">ตำแหน่งบรรจุ</label>
            <select class="form-control" id="w_positionwork" name="w_positionwork">
              <option value="">= กรุณาเลือก =</option>
              <option value="บรรณารักษ์">บรรณารักษ์</option>
              <option value="นักเอกสารสนเทศ">นักเอกสารสนเทศ</option>
              <option value="นักวิชาการคอมพิวเตอร์">นักวิชาการคอมพิวเตอร์</option>
              <option value="นักวิชาการโสตทัศนศึกษา">นักวิชาการโสตทัศนศึกษา</option>
              <option value="นักวิชาการเงินและบัญชี">นักวิชาการเงินและบัญชี</option>
              <option value="นักวิชาการพัสดุ">นักวิชาการพัสดุ</option>
              <option value="นักวิเคราะห์นโยบายและแผน">นักวิเคราะห์นโยบายและแผน</option>
              <option value="นักวิชาการพัฒนาคุณภาพ">นักวิชาการพัฒนาคุณภาพ</option>
              <option value="นักทรัพยากรบุคคล">นักทรัพยากรบุคคล</option>
              <option value="นักจดหมายเหตุ">นักจดหมายเหตุ</option>
              <option value="นักวิชาการสารสนเทศ">นักวิชาการสารสนเทศ</option>
              <option value="เจ้าหน้าที่บริหารทั่วไป">เจ้าหน้าที่บริหารทั่วไป</option>
              <option value="ผู้ปฏิบัติงานบริหาร">ผู้ปฏิบัติงานบริหาร</option>
              <option value="ผู้ปฏิบัติงานห้องสมุด">ผู้ปฏิบัติงานห้องสมุด</option>
              <option value="ช่างเทคนิค">ช่างเทคนิค</option>
              <option value="เจ้าหน้าที่ระบบงานคอมพิวเตอร์">เจ้าหน้าที่ระบบงานคอมพิวเตอร์</option>
              <option value="ผู้ปฏิบัติงานโสตทัศนศึกษา">ผู้ปฏิบัติงานโสตทัศนศึกษา</option>
              <option value="พนักงานบริการ">พนักงานบริการ</option>
              <option value="พนักงานขับรถยนต์">พนักงานขับรถยนต์</option>
              <option value="พนักงานทั่วไป">พนักงานทั่วไป</option>
              <option value="วิศวกร">วิศวกร</option>
              <option value="นักประชาสัมพันธ์">นักประชาสัมพันธ์</option>
              <option value="ช่างไฟฟ้า">ช่างไฟฟ้า</option>
              <option value="ช่างไม้">ช่างไม้</option>
              <option value="นักวิเทศสัมพันธ์">นักวิเทศสัมพันธ์</option>
              <option value="นักวิชาการดนตรีไทย">นักวิชาการดนตรีไทย</option>
              <option value="นิติกร">นิติกร</option>

            </select>
          </div>
          <div class="col-md-2 mb-3">
            <label for="level">ตำแหน่งทางวิชาการ</label>
            <select class="form-control" id="w_levelwork" name="w_levelwork">
              <option value="">= กรุณาเลือก =</option>
              <option value="ผู้ชำนาญการพิเศษ">ผู้ชำนาญการพิเศษ</option>
              <option value="ผู้ชำนาญงาน">ผู้ชำนาญงาน</option>
              <option value="ผู้เชี่ยวชาญ">ผู้เชี่ยวชาญ</option>
              <option value="เชี่ยวชาญพิเศษ">เชี่ยวชาญพิเศษ</option>
              <option value="เชี่ยวชาญ">เชี่ยวชาญ</option>
              <option value="ผู้ชำนาญงานพิเศษ">ผู้ชำนาญงานพิเศษ</option>
              <option value="ชำนาญการพิเศษ">ชำนาญการพิเศษ</option>
              <option value="ระดับปฏิบัติการ">ระดับปฏิบัติการ</option>
              <option value="ระดับช่วยปฏิบัติการ">ระดับช่วยปฏิบัติการ</option>
              
            </select>
          </div>
          <div class="col-md-4 mb-3">
            <label for="section">ฝ่าย</label>
            <select class="form-control" id="w_sectionwork" name="w_sectionwork" required>
              <option value="">= กรุณาเลือก =</option>
              <option value="ผู้บริหาร">ผู้บริหาร</option>
              <option value="สำนักงานผู้อำนวยการ">สำนักงานผู้อำนวยการ</option>
              <option value="ฝ่ายเทคนิคห้องสมุด">ฝ่ายเทคนิคห้องสมุด</option>
              <option value="ฝ่ายเทคโนโลยีสารสนเทศห้องสมุดและเทคโนโลยีการศึกษา">ฝ่ายเทคโนโลยีสารสนเทศห้องสมุดและเทคโนโลยีการศึกษา</option>
              <option value="ฝ่ายคลังความรู้">ฝ่ายคลังความรู้</option>
              <option value="ฝ่ายจดหมายเหตุและพิพิธภัณฑ์">ฝ่ายจดหมายเหตุและพิพิธภัณฑ์</option>
              <option value="สำนักงานเครือข่ายบริการห้องสมุด">สำนักงานเครือข่ายบริการห้องสมุด</option>
            </select>
          </div>
          <div class="col-md-4 mb-3">
            <label for="work">งาน</label>
            <select class="form-control" id="w_work" name="w_work" required>
              <option value="">= กรุณาเลือก =</option>
              <option value="งานบริหารและธุรการ">งานบริหารและธุรการ</option>
              <option value="งานคลังและพัสดุ">งานคลังและพัสดุ</option>
              <option value="งานพัฒนาทรัพยากรสารสนเทศ">งานพัฒนาทรัพยากรสารสนเทศ</option>
              <option value="งานพัฒนาทรัพยากรวารสาร">งานพัฒนาทรัพยากรวารสาร</option>
              <option value="งานวิเคราะห์ทรัพยากรสารสนเทศ">งานวิเคราะห์ทรัพยากรสารสนเทศ</option>
              <option value="งานเทคโนโลยีสารสนเทศ">งานเทคโนโลยีสารสนเทศ</option>
              <option value="งานบริหารจดหมายเหตุและพิพิธภัณฑ์">งานบริหารจดหมายเหตุและพิพิธภัณฑ์</option>
              <option value="งานพิพิธภัณฑ์และนิทรรศการ">งานพิพิธภัณฑ์และนิทรรศการ</option>
              <option value="งานจัดการความรู้">งานจัดการความรู้</option>
              <option value="งานเผยแพร่ผลงานวิชาการของมหาวิทยาลัย">งานเผยแพร่ผลงานวิชาการของมหาวิทยาลัย</option>
              <option value="หอสมุดกลาง">หอสมุดกลาง</option>
              <option value="ห้องสมุดคณะเทคนิคการแพทย์">ห้องสมุดคณะเทคนิคการแพทย์</option>
              <option value="ห้องสมุดคณะเภสัชศาสตร์">ห้องสมุดคณะเภสัชศาสตร์</option>
              <option value="ห้องสมุดคณะสิ่งแวดล้อมฯ">ห้องสมุดคณะสิ่งแวดล้อมฯ</option>
              <option value="ห้องสมุดวิทยาเขตราชวิถี">ห้องสมุดวิทยาเขตราชวิถี</option>
              <option value="ห้องสมุดวิทยาลัยราชสุดา">ห้องสมุดวิทยาลัยราชสุดา</option>
              <option value="ห้องสมุดสถาบันพัฒนาสุขภาพอาเซียน">ห้องสมุดสถาบันพัฒนาสุขภาพอาเซียน</option>
              <option value="ห้องสมุดสถาบันโภชนาการ">ห้องสมุดสถาบันโภชนาการ</option>
              <option value="ห้องสมุดสถาบันวิจัยประชากรและสังคม">ห้องสมุดสถาบันวิจัยประชากรและสังคม</option>
              <option value="ห้องสมุดสถาบันวิจัยภาษาและวัฒนธรรมเอเชีย">ห้องสมุดสถาบันวิจัยภาษาและวัฒนธรรมเอเชีย</option>
            </select>
          </div>
          <div class="col-md-4 mb-3">
            <label for="unit">หน่วย</label>
            <select class="form-control" id="w_unit" name="w_unit" required>
              <option value="">= กรุณาเลือก =</option>
              <option value="หน่วยสารบรรณ">หน่วยสารบรรณ</option>
              <option value="หน่วยแผนยุทธศาสตร์และประกันคุณภาพ">หน่วยแผนยุทธศาสตร์และประกันคุณภาพ</option>
              <option value="หน่วยทรัพยากรบุคคล">หน่วยทรัพยากรบุคคล</option>
              <option value="หน่วยอาคาร สถานที่และยานพาหนะ">หน่วยอาคาร สถานที่และยานพาหนะ</option>
              <option value="หน่วยการเงินและบัญชี">หน่วยการเงินและบัญชี</option>
              <option value="หน่วยพัสดุ">หน่วยพัสดุ</option>
              <option value="หน่วยบริการมัลติมีเดีย">หน่วยบริการมัลติมีเดีย</option>
              <option value="หน่วยผลิตสื่อมัลติมีเดีย">หน่วยผลิตสื่อมัลติมีเดีย</option>
              <option value="ห้องสมุดดนตรีสมเด็จพระเทพ">ห้องสมุดดนตรีสมเด็จพระเทพ</option>
            </select>
          </div>
          <div class="col-md-3 mb-3">
            <label for="rate">ประเภทอัตรา</label>
            <select class="form-control" id="w_rate" name="w_rate" required>
              <option value="">= กรุณาเลือก =</option>
              <option value="ใหม่">ใหม่</option>
              <option value="ทดแทน">ทดแทน</option>
            </select>
          </div>
          <div class="col-md-3 mb-3">
            <label for="contract">การทำสัญญา</label>
            <select class="form-control" id="w_contract" name="w_contract" required>
              <option value="">= กรุณาเลือก =</option>
              <option value="ต่อสัญญา">ต่อสัญญา</option>
              <option value="ไม่ต่อสัญญา">ไม่ต่อสัญญา</option>
              <option value="บรรจุใหม่">บรรจุใหม่</option>
            </select>
          </div>
          <div class="col-md-3 mb-3">
            <label for="contract">ระยะสัญญา</label>
            <select class="form-control" id="w_contractyear" name="w_contractyear" required>
              <option value="">= กรุณาเลือก =</option>
              <option value="1">1 ปี</option>
              <option value="2">2 ปี</option>
              <option value="3">3 ปี</option>
              <option value="4">4 ปี</option>
              <option value="5">5 ปี</option>
            </select>
          </div>
          <div class="col-md-3 mb-3">
            <label for="comework">วันที่ได้รับตำแหน่ง</label>
            <input id="w_dateposition" name="w_dateposition">
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
        $('#w_dateposition').datepicker({
            uiLibrary: 'bootstrap4',
            format: 'yyyy-mm-dd'
        });
    </script>


<script>
$(document).ready(function() {
	$('#butsave').on('click', function() {
    //$("#butsave").attr("disabled", "disabled");
    var empid_info = $('#empid_info').val();
		var w_type_employee = $('#w_type_employee').val();
		var w_positionwork = $('#w_positionwork').val();
		var w_levelwork = $('#w_levelwork').val();
    var w_sectionwork = $('#w_sectionwork').val();
		var w_work = $('#w_work').val();
		var w_unit = $('#w_unit').val();
    var w_rate = $('#w_rate').val();
		var w_contract = $('#w_contract').val();
    var w_contractyear = $('#w_contractyear').val();
    var w_dateposition = $('#w_dateposition').val();
//console.log(empid_info, w_type_employee, w_positionwork, w_levelwork, w_sectionwork, w_work, w_unit);
		if(empid_info!="" && w_type_employee!="" && w_positionwork!="" && w_levelwork!="" && w_sectionwork!="" || w_work!="" || w_unit!="" && w_rate!="" && w_contract!="" || w_contractyear!=""&& w_dateposition!=""){
			$.ajax({
				url: "save_job.php",
				type: "POST",
				data: {
          empid_info: empid_info,
          w_type_employee: w_type_employee,
					w_positionwork: w_positionwork,
					w_levelwork: w_levelwork,
          w_sectionwork: w_sectionwork,
					w_work: w_work,
					w_unit: w_unit,
          w_rate: w_rate,
          w_contract: w_contract,
          w_contractyear: w_contractyear,
          w_dateposition: w_dateposition,					
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





