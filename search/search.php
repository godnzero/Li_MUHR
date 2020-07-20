<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv=Content-Type content="text/html; charset=utf-8">
        <title>HRD</title>
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- DataTables -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.material.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/dataTables.responsive.css">
        <!-- Icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">    
    </head>
<body>
<?php include("../connect.php"); ?>
<?php
//query
   $sql = "SELECT * FROM tb_hrd";
   $query = mysqli_query($conn,$sql);
?>
<div id="content">
<div class="container-fluid">
<table id="myTable" class="mdl-data-table" style="width:100%">
        <thead>
                <tr>
                    <th>
                        <div align="center">เลขพนักงาน </div>
                    </th>
                    <th>
                        <div align="center">เลขบัตรประชาชน </div>
                    </th>
                    <th>
                        <div align="center">Gender </div>
                    </th>
                    <th>
                        <div align="center">คำนำหน้าชื่อ </div>
                    </th>
                    <th>
                        <div align="center">Name Th </div>
                    </th>
                    <th>
                        <div align="center">Surename Th </div>
                    </th>
                    <th>
                        <div align="center">Name Eng </div>
                    </th>
                    <th>
                        <div align="center">Surename Eng </div>
                    </th>
                    <th>
                        <div align="center">Email </div>
                    </th>
                    <th>
                        <div align="center">Mobile </div>
                    </th>
                    <th>
                        <div align="center">Tel Table</div>
                    </th>
                    <th>
                        <div align="center">เลขหนังสือ</div>
                    </th>
                   
                </tr>
        </thead>
    <tbody>
    <?php
 //$del = "<a href = 'delete.php?Ticket_id={$tid}'>Delete</a>";

while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
    $empid_info = $result["empid_info"];//employeeID_Infomation
    $codeIdLink = "<a href = 'result.php?empid_info={$empid_info}'>$empid_info</a>";
echo "<tr>

        <td data-column=EmpID>".$codeIdLink."</td>

        <td>".$result["idnumcard"]."</td>

        <td>".$result["gender"]."</td>

        <td>".$result["prename"]."</td>

        <td>".$result["nameth"]."</td>
    
        <td>".$result["surnameth"]."</td>

        <td>".$result["nameeng"]."</td>

        <td>".$result["surnameeng"]."</td>

        <td>".$result["email"]."</td>

        <td>".$result["mobile"]."</td>

        <td>".$result["teltable"]."</td>

        <td>".$result["booknumber"]."</td>

    </tr>"
;}
?>
    </tbody>
</table>
<button type="button" class="btn btn-danger" onclick="window.location.href='../index.php'">Back</button>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/dataTables.material.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.js"></script>
<!--use DataTable-->
<script>
        $(document).ready(function () {
            $('#myTable').DataTable(
               {
                responsive: true
               } 
            );
        });
    </script>
 <?php mysqli_close($conn); ?>
</body>
</html>