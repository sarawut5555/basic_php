<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
    <style>
      html, body{
        font-family: 'Prompt', sans-serif;
      }
    </style>
</head>
<body>
<?php
include("config.inc.php");
$text_id = $_POST['text_id'];

$firstname = $_POST['text_firstname'];
$name = $_POST['text_name'];
$lastname = $_POST['text_lastname'];
$sex = $_POST['text_sex'];
$birthdate = $_POST['text_birthdate'];
$address = $_POST['text_address'];
$tel = $_POST['text_tel'];
$email = $_POST['text_email'];
$password = $_POST['txt_password'];
 //echo $text_id;
$SQL = "UPDATE tbl_65309010036 SET firstname='$firstname', name='$name', lastname='$lastname', sex='$sex', birthdate='$birthdate', address='$address', phonenumber='$tel', email='$email', password='$password'  WHERE id='$text_id'";
$objQuery = mysqli_query($conn, $SQL);
if($objQuery){
    echo"<script>
    Swal.fire({
        type: 'success',
        icon: 'success',
        title: 'Success',
        showConfirmButton: false,
        timer: 2000
      }).then(function() {
        window.location = 'listmember.php';
      });
      </script>";
}else{
    echo "<script>
    Swal.fire({
        type: 'error',
        icon: 'error',
        title: 'error',
        showConfirmButton: false,
        timer: 2000
      }).then(function() {
        window.location = 'listmember.php';
      });
      </script>";
}
?>
</body>
</html>

