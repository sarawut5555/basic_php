
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
</head>
<body>
<?php
include("header.php")
?>
<main>
    <div class="container-fluid">
    <div class="card">
  <div class="card-header">
    <center><b><h3>ฟอร์มสมัครสมาชิก</h1></b></center>
  </div>
  <div class="card-body">
<form name="form1" action="insert.php" method="POST">
    <div class="row"><!-- row1 -->
    <div class="col-md-4"><label for="exampleFormControlInput1" class="form-label"><b>คำนำหน้าชื่อ</b></label>
    <select name="text_firstname" id="text_firstname" class="form-control">
        <option selected>คำนำหน้าชื่อ</option>
        <option value="นาย">นาย</option>
        <option value="นาง">นาง</option>
        <option value="นางสาว">นางสาว</option>
    </select>
    </div>
    <div class="col-md-4"><label for="exampleFormControlInput1" class="form-label"><b>ชื่อ</b></label>
    <input type="text" class="form-control" name="text_name" id="text_name" placeholder="กรอกชื่อของคุณ">
    </div>
    <div class="col-md-4"><label for="exampleFormControlInput1" class="form-label"><b>นามสกุล</b></label>
    <input type="text" class="form-control" name="text_lastname" id="text_lastname" placeholder="กรอกนามสกุลของคุณ">
    </div>
    </div><!-- row1 -->

    <div class="row"><!-- row2 -->
    <div class="col-md-2">
        <label for="exampleFormControlInput1" class="form-label"><b>เพศ</b></label>
        <input type="radio" class="form-check-input" name="text_sex" id="text_sex" value="ชาย">ชาย
        <input type="radio" class="form-check-input" name="text_sex" id="text_sex" value="หญิง">หญิง

    </div>

    <div class="col-md-3">
    <label for="exampleFormControlInput1" class="form-label"><b>วันเกิด</b></label>
   <input type="date" class="form-control" id="text_birthdate" name="text_birthdate" placeholder="00/00/0000" date-provid="datepicker" data-date-language="dd-mm-yy">
   </div>
    <div class="col-md-7"><label for="exampleFormControlInput1" class="form-label"><b>ที่อยู่</b></label>
    <textarea class="form-control" name="text_address" id="text_address" placeholder="กรอกที่อยู่ของคุณ"></textarea>
    </div>
    </div><!-- row2 -->

    <div class="row"><!-- row3 -->
    <div class="col-md-4">
    <label for="exampleFormControlInput1" class="form-label"><b>เบอร์โทรศัพท์</b></label>
    <input type="text" class="form-control" name="text_tel" id="text_tel" placeholder="กรอกเบอร์โทรศัพท์ของคุณ">
    </div>
    <div class="col-md-8">
    <label for="exampleFormControlInput1" class="form-label"><b>อีเมล</b></label>
    <input type="text" class="form-control" name="text_email" id="text_email" placeholder="name@example.com">
</div>

<div class="container text-center">
    <br>
    <center>
      <button type="submit" class="btn btn-success text-light"><b>บันทึก</b></button>
      <button type="reset" class="btn btn-danger text-light"><b>ยกเลิก</b></button>
    </center>
</div>
</div>
</form>
  </div>
</div>
  </div>
</main>

  <?php
  include("footer.php")
  ?>
</div>
</body>
</html>