
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Itim&family=Prompt:wght@300&display=swap" rel="stylesheet">
  <style>
    html, body{
      font-family: 'Prompt', sans-serif;
    }
    </style>
</head>
<body>
<?php
include("header.php")
?>
<main>
  <br>
  <div class="container">
  <div class="card">
  <div class="card-header bg-dark bg-gradient text-light">
    <h3>ฟอร์มสมัครสมาชิก</h>
  </div>
  <div class="card-body">
<form name="form1" action="insert.php" method="POST">
    <div class="row"><!-- row1 -->
    <div class="col-md-4"><label for="exampleFormControlInput1" class="form-label"><b>คำนำหน้าชื่อ</b></label>
    <select name="text_firstname" id="text_firstname" class="form-control" required>
        <option selected>คำนำหน้าชื่อ</option>
        <option value="นาย">นาย</option>
        <option value="นาง">นาง</option>
        <option value="นางสาว">นางสาว</option>
    </select>
    </div>
    <div class="col-md-4"><label for="exampleFormControlInput1" class="form-label"><b>ชื่อ</b></label>
    <input type="text" class="form-control" name="text_name" id="text_name" placeholder="กรอกชื่อของคุณ" required>
    </div>
    <div class="col-md-4"><label for="exampleFormControlInput1" class="form-label"><b>นามสกุล</b></label>
    <input type="text" class="form-control" name="text_lastname" id="text_lastname" placeholder="กรอกนามสกุลของคุณ" required>
    </div>
    </div><!-- row1 -->
    
    <div class="row"><!-- row2 -->
    <div class="col-md-2">
        <label for="exampleFormControlInput1" class="form-label"><b>เพศ</b></label><br>
        <input type="radio" class="form-check-input" name="text_sex" id="text_sex" value="ชาย" required>ชาย<br>
        <input type="radio" class="form-check-input" name="text_sex" id="text_sex" value="หญิง" required>หญิง<br>
    </div>

    <div class="col-md-3">
    <label for="exampleFormControlInput1" class="form-label"><b>วันเกิด</b></label>
   <input type="date" class="form-control" id="text_birthdate" name="text_birthdate" placeholder="00/00/0000" date-provid="datepicker" data-date-language="dd-mm-yy" required>
   </div>

    <div class="col-md-7"><label for="exampleFormControlInput1" class="form-label" required><b>ที่อยู่</b></label>
    <textarea class="form-control" name="text_address" id="text_address" placeholder="กรอกที่อยู่ของคุณ" required></textarea>
    </div>
    </div><!-- row2 -->

    <div class="row"><!-- row3 -->
    <div class="col-md-4">
    <label for="exampleFormControlInput1" class="form-label"><b>เบอร์โทรศัพท์</b></label>
    <input type="number" class="form-control" name="text_tel" id="text_tel" placeholder="กรอกเบอร์โทรศัพท์ของคุณ" required>
    </div>
    <div class="col-md-8">
    <label for="exampleFormControlInput1" class="form-label"><b>อีเมล</b></label>
    <input type="email" class="form-control" name="text_email" id="text_email" placeholder="name@example.com" required>
    </div>
    
    <div class="row"><!-- row4 -->
    <div class="col-md-6">
    <label for="exampleFormControlInput1" class="form-label"><b>ชื่อผู้ใช้</b></label>
    <input type="text" class="form-control" name="txt_username" id="txt_username" placeholder="กรอกuserที่คุณต้องการ" required>
    </div>
    <div class="col-md-6">
    <label for="exampleFormControlInput1" class="form-label"><b>รหัสผ่าน</b></label>
    <input type="password" class="form-control" name="txt_password" id="txt_password" placeholder="กรอกpasswordที่คุณต้องการ" required>
  </div>
</div>
<div class="container text-center">
  <br>
    <center>
      <button type="submit" class="btn btn-success text-light"><i class="bi bi-cloud-download"></i> บันทึก</button>
      <button type="reset" class="btn btn-danger text-light"><i class="bi bi-x-circle"></i> ยกเลิก</button> 
    </center>
</div>
</div>
</form>
  </div>
</div>
  </div>
  <br>
</main>
<?php
?>
  <?php
  include("footer.php")
  ?>
</div>
</body>
</html>