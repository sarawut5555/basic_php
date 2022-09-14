
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
include("config.inc.php");
include("header.php");
$recive_id = $_GET['get_id'];
#echo $recive_id;

$SQL = "select * from tbl_member where id=$recive_id";
$objQuery = mysqli_query($conn, $SQL);
$objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
?>
<main>
  <br>
    <div class="container-fluid">
    <div class="card">
  <div class="card-header">
    <h3>ฟอร์มแก้ไขรายชื่อ</h>
  </div>
  <div class="card-body">
<form name="form1" action="update.php" method="POST">
<input type="hidden" class="form-control" name="text_id" id="text_id" value="<?php echo $objResult['id']; ?>">  
    <div class="row"><!-- row1 -->
    <div class="col-md-4"><label for="exampleFormControlInput1" class="form-label"><b>คำนำหน้าชื่อ</b></label>
    <select name="text_firstname" id="text_firstname" class="form-control">
        <option value="<?php echo $objResult['firstname']; ?>" required><?php echo $objResult['firstname']; ?></option>
        <option value="นาย">นาย</option>
        <option value="นาง">นาง</option>
        <option value="นางสาว">นางสาว</option>
    </select>
    </div>
    <div class="col-md-4"><label for="exampleFormControlInput1" class="form-label"><b>ชื่อ</b></label>
    <input type="text" class="form-control" name="text_name" id="text_name" placeholder="กรอกชื่อของคุณ" value="<?php echo $objResult['name']; ?>" required>
    </div>
    <div class="col-md-4"><label for="exampleFormControlInput1" class="form-label"><b>นามสกุล</b></label>
    <input type="text" class="form-control" name="text_lastname" id="text_lastname" placeholder="กรอกนามสกุลของคุณ" value="<?php echo $objResult['lastname']; ?>" required>
    </div>
    </div><!-- row1 -->
    
    <div class="row"><!-- row2 -->
    <div class="col-md-2">
        <label for="exampleFormControlInput1" class="form-label"><b>เพศ</b></label><br>
        <div>
        <?php
        if($objResult['sex'] == 'ชาย'){
        ?>
        <input type="radio" class="form-check-input" name="text_sex" id="text_sex" value="ชาย"  checked="checked" required>ชาย<br>
        <input type="radio" class="form-check-input" name="text_sex" id="text_sex" value="หญิง"  required>หญิง<br>
        <?php
        }else{
        ?>
        <input type="radio" class="form-check-input" name="text_sex" id="text_sex" value="ชาย" required>ชาย<br>
        <input type="radio" class="form-check-input" name="text_sex" id="text_sex" value="หญิง"checked="checked" required>หญิง<br>
        <?php
        }
        ?>
    </div>
    </div>

    <div class="col-md-3">
    <label for="exampleFormControlInput1" class="form-label"><b>วันเกิด</b></label>
   <input type="date" class="form-control" id="text_birthdate" name="text_birthdate" placeholder="00/00/0000" date-provid="datepicker" data-date-language="dd-mm-yy" value="<?php echo $objResult['birthdate']; ?>" required>
   </div>

    <div class="col-md-7"><label for="exampleFormControlInput1" class="form-label"><b>ที่อยู่</b></label>
    <textarea class="form-control" name="text_address" id="text_address" placeholder="กรอกที่อยู่ของคุณ" required><?php echo $objResult['address']; ?></textarea>
    </div>
    </div><!-- row2 -->

    <div class="row"><!-- row3 -->
    <div class="col-md-4">
    <label for="exampleFormControlInput1" class="form-label"><b>เบอร์โทรศัพท์</b></label>
    <input type="number" class="form-control" name="text_tel" id="text_tel" placeholder="กรอกเบอร์โทรศัพท์ของคุณ" value="<?php echo $objResult['phonenumber']; ?>"required>
    </div>
    <div class="col-md-4">
    <label for="exampleFormControlInput1" class="form-label"><b>อีเมล</b></label>
    <input type="text" class="form-control" name="text_email" id="text_email" placeholder="name@example.com"value="<?php echo $objResult['email']; ?>"required>
    </div>

    <div class="row"><!-- row4 -->
    <div class="col-md-6">
    <label for="exampleFormControlInput1" class="form-label"><b>ชื่อผู้ใช้</b></label>
    <input type="text" class="form-control" name="txt_username" id="txt_username" placeholder="กรอกuserที่คุณต้องการ"value="<?php echo $objResult['username']; ?>" disabled>
    </div>
    <div class="col-md-6">
    <label for="exampleFormControlInput1" class="form-label"><b>รหัสผ่าน</b></label>
    <input type="password" class="form-control" name="txt_password" id="txt_password" placeholder="กรอกpasswordที่คุณต้องการ"value="<?php echo $objResult['password']; ?>"required>
  </div>

  </div>
<div class="container text-center">
  <br>
    <center>
      <button type="submit" class="btn btn-success text-light"><i class="bi bi-pencil-square"></i> แก้ไข</button>
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
  include("footer.php")
  ?>
</div>
</body>
</html>