<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chklogin</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php
include("config.inc.php");
include("header.php");?>
<br>
<main>
<div class="container ">
        <div class="card">
            <div class="card-header bg-dark bg-gradient text-light">
                ตรวสอบข้อมูล...
            </div>
        <div div class="card-body">
                
<?php
$txt_username = $_POST['txt_username'];
$txt_password = $_POST['txt_password'];

// echo $text_username;
// echo "<br>";
// echo $text_password;

$SQL = "SELECT * FROM tbl_65309010036 WHERE username = '$txt_username' && password='$txt_password'";
$objQuery = mysqli_query($conn, $SQL);
$objResult = mysqli_fetch_array($objQuery);
if($objResult){
    echo "ข้อมูลตรงแล้ว";
    $_SESSION["name"] = $objResult['name'];
    $_SESSION["lastname"] = $objResult['lastname'];
    $_SESSION["status"] = $objResult['status'];
    // header("Location:index.php");
    echo "
    <script>
    Swal.fire({
        icon: 'success',
        title: '<h3>Success</h3>',
        type: 'success',
        showConfirmButton: false,
        timer: 2000}).then(function() {
        window.location = 'index.php';});</script>";
}else{
            echo "Error";
            echo "
            <script>
            Swal.fire({
                icon: 'error',
                title: '<h3>Error</h3>',
                type: 'success',
                showConfirmButton: false,
                timer: 2000}).then(function() {
                window.location = 'login.php';});</script>";
          //   header("Location: login.php");
}
$conn -> close();
      
?>
</div>
</div>
</div>
</body>
</html>