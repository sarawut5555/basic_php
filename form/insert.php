<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
<style>
    html, body{
      font-family: 'Prompt', sans-serif;
    }
    </style>
<?php

include("config.inc.php");

$firstname = $_POST['text_firstname'];
$name = $_POST['text_name'];
$lastname = $_POST['text_lastname'];
$sex = $_POST['text_sex'];
$birthdate = $_POST['text_birthdate'];
$address = $_POST['text_address'];
$tel = $_POST['text_tel'];
$email = $_POST['text_email'];
$user = $_POST['txt_username'];
$password = $_POST['txt_password'];

$sql = "INSERT INTO tbl_65309010036 (id, firstname, name, lastname, sex, birthdate, address, phonenumber, email, username, password) VALUES ('', '$firstname', '$name', '$lastname', '$sex', '$birthdate', '$address', '$tel', '$email', '$user', '$password')";
if(mysqli_query($conn, $sql)) {
    echo"<script>
    Swal.fire({
        type: 'success',
        icon: 'success',
        title: 'Success',
        showConfirmButton: false,
        timer: 2000
      }).then(function() {
        window.location = 'frmRegister.php';
      });
      </script>";
}else{
    echo "<script>
    Swal.fire({
        type: 'error',
        icon: 'error',
        title: 'Fail',
        showConfirmButton: false,
        timer: 2000
      }).then(function() {
        window.location = 'frmRegister.php';
      });
      </script>";
}
$conn -> close();

?>

