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
  <div class="container">
    <div class="text-center">
      <img class="d-block mx-auto">
      <h2 class="text-white">Add Information</h2>
    </div>

      <div class="card p-4 col-md-12">
      <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
      </div>
      <form id="fupForm" name="form1" method="post">
        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="firstName">เลขประจำตัวพนักงาน</label>
            <input type="text" class="form-control" id="empid_info" name="empid_info" placeholder="">
          </div>
          <div class="col-md-2 mb-3">
            <label for="first">คำนำหน้า</label>
            <select class="form-control" id="prename" name="prename">
              <option value="">= กรุณาเลือก =</option>
              <option value="นาย">นาย</option>
              <option value="นาง">นาง</option>
              <option value="นางสาว">น.ส.</option>
              <option value="ว่าที่ร้อยตรี">ว่าที่ร้อยตรี</option>
              <option value="หม่อมหลวง">ม.ล.</option>
              <option value="ผศ.ดร.">ผศ.ดร.</option>
              
            </select>
          </div>
          <div class="col-md-2 mb-3">
            <label for="gender">เพศ</label>
            <select class="form-control" id="gender" name="gender">
              <option value="">= กรุณาเลือก =</option>
              <option value="ชาย">ชาย</option>
              <option value="หญิง">หญิง</option>
            </select>
          </div>
          <div class="col-md-4 mb-3">
            <label for="firstName">เลขบัตรประชาชน</label>
            <input type="text" class="form-control" id="idnumcard" name="idnumcard" pattern="[0-9]{1,13}" minlength="13" maxlength="13" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)"  placeholder="">
          </div>
          <div class="col-md-3 mb-3">
            <label for="firstName">ชื่อ</label>
            <input type="text" class="form-control" id="nameth" name="nameth" pattern="^[ก-๏]+$" title="กรุณากรอกภาษาไทยเท่านั้น" onkeyup="isThaichar(this.value,this)" placeholder="">
          </div>
          <div class="col-md-3 mb-3">
            <label for="lastName">นามสกุล</label>
            <input type="text" class="form-control" id="surnameth" name="surnameth" pattern="^[ก-๏]+$" title="กรุณากรอกภาษาไทยเท่านั้น" onkeyup="isThaichar(this.value,this)" placeholder="">
          </div>
          <div class="col-md-3 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="nameeng" name="nameeng" pattern="[a-zA-Z]{1,}" title="Please fill only English language" onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122)" placeholder="">
          </div>
          <div class="col-md-3 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="surnameeng" name="surnameeng" pattern="^[a-zA-Z]+$" title="Please fill only English language" onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122)" placeholder="">
          </div>
          <div class="col-md-4 mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="name.sur@mahidol.ac.th" onkeyup="ValidateEmail();">
            <span id="error" style="display:none;color:red;">Invalid email</span>
          </div>
          <div class="col-md-4 mb-3">
            <label for="mobile">เบอร์มือถือ</label>
            <input type="text" class="form-control" id="mobile" name="mobile" pattern="[0-9]{1,10}" minlength="10" maxlength="10" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" placeholder="">
          </div>
          <div class="col-md-4 mb-3">
            <label for="phonetable">เบอร์โต๊ะ</label>
            <input type="text" class="form-control" id="teltable" name="teltable" placeholder="">
          </div>
          <div class="col-md-4 mb-3">
            <label for="numberorder">เลขที่หนังสือคำสั่ง</label>
            <input type="text" class="form-control" id="booknumber" name="booknumber" placeholder="">
          </div>
          <div class="col-md-8 mb-3">
            <label for="address">ที่อยู่</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="">
          </div>
          <div class="col-md-4 mb-3">
            <label for="comework">วันเข้าทำงาน</label>
            <input id="startdate" name="startdate">
          </div>
          <div class="col-md-4 mb-3">
            <label for="gowork">วันเกษียณ</label>
            <input id="enddate" name="enddate">
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
        $('#startdate').datepicker({
            uiLibrary: 'bootstrap4',
            format: 'yyyy-mm-dd'
        });
        $('#enddate').datepicker({
            uiLibrary: 'bootstrap4',
            format: 'yyyy-mm-dd'
        });
    </script>

  <!--INPUT TEXT TH-->
  <script type="text/javascript">
  function isThaichar(str,obj){
      var orgi_text="ๅภถุึคตจขชๆไำพะัีรนยบลฃฟหกดเ้่าสวงผปแอิืทมใฝ๑๒๓๔ู฿๕๖๗๘๙๐ฎฑธํ๊ณฯญฐฅฤฆฏโฌ็๋ษศซฉฮฺ์ฒฬฦ";
      var str_length=str.length;
      var str_length_end=str_length-1;
      var isThai=true;
      var Char_At="";
      for(i=0;i<str_length;i++){
          Char_At=str.charAt(i);
          if(orgi_text.indexOf(Char_At)==-1){
              isThai=false;
          }   
      }
      if(str_length>=1){
          if(isThai==false){
              obj.value=str.substr(0,str_length_end);
          }
      }
      return isThai; // ถ้าเป็น true แสดงว่าเป็นภาษาไทยทั้งหมด
  }
  </script>

  <!--INPUT TEXT EMAIL-->
  <script type="text/javascript">
      $('#email').on('keypress', function() {
      var re = /([A-Z0-9a-z_-][^@])+?@[^$#<>?]+?\.[\w]{2,4}/.test(this.value);
      if(!re) {
          $('#error').show();
      } else {
          $('#error').hide();
      }
  })
  </script>

<script>
$(document).ready(function() {
	$('#butsave').on('click', function() {
    $("#butsave").attr("disabled", "disabled");
    var empid_info = $('#empid_info').val();
		var prename = $('#prename').val();
		var gender = $('#gender').val();
		var idnumcard = $('#idnumcard').val();
    var nameth = $('#nameth').val();
		var surnameth = $('#surnameth').val();
		var nameeng = $('#nameeng').val();
		var surnameeng = $('#surnameeng').val();
    var email = $('#email').val();
    var mobile = $('#mobile').val();
    var teltable = $('#teltable').val();
		var booknumber = $('#booknumber').val();
    var address = $('#address').val();
		var startdate = $('#startdate').val();
    var enddate = $('#enddate').val();
//console.log(prename, gender, empid_info, idnumcard, nameth, surnameth, nameeng, surnameeng, email, mobile, teltable, booknumber, address, startdate, enddate);
		if(empid_info!="" && prename!="" && gender!="" && idnumcard!="" && nameth!="" && surnameth!="" && nameeng!="" && surnameeng!="" && email!="" && mobile!="" && teltable!="" && booknumber!="" && address!="" && startdate!="" || enddate!=""){
			$.ajax({
				url: "save_staff.php",
				type: "POST",
				data: {
          empid_info: empid_info,
          prename: prename,
					gender: gender,
					idnumcard: idnumcard,
          nameth: nameth,
					surnameth: surnameth,
					nameeng: nameeng,
					surnameeng: surnameeng,
          email: email,
          mobile: mobile,
          teltable: mobile,
					booknumber: booknumber,
					address: address,
          startdate: startdate,
					enddate: enddate					
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#butsave").removeAttr("disabled");
						$('#fupForm').find('input:text').val('');
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





