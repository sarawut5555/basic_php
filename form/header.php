<?php
ob_start();
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>charlotte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
  <style> 
    body {
    font-family: 'Prompt', sans-serif;
  }
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-dark text-light">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="#"> <img src="mymini-removebg-preview.png" alt="" width="80" height="45"> Charlotte</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="index.php"><i class="bi bi-house-fill"></i> หน้าแรก</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="frmRegister.php"><i class="bi bi-box-arrow-in-right"></i> สมัครสมาชิก</a>
        </li>
        <?php
        if(isset($_SESSION["name"])){
        echo'
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="listmember.php"><i class="bi bi-box-arrow-in-right"></i> รายชื่อสมาชิก</a>
        </li>';
        }
        ?>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots"></i>
            ดูเพิ่มเติม
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item text-dark" href="#"><i class="bi bi-facebook"></i> facebook</a></li>
            <li><a class="dropdown-item text-dark" href="#"><i class="bi bi-instagram"> instagram</i></a></li>
            <li><a class="dropdown-item text-dark" href="#"><i class="bi bi-twitter"> twitter</i></a></li>
            <li><a class="dropdown-item text-dark" href="#"><i class="bi bi-telephone-fill"> tel</i></a></li>
          </ul>
        </li>
        
        </li>
      </ul>
      
      <form class="d-flex" role="search">
        <?php
        if(!isset($_SESSION["name"])){

        }else{
          echo $_SESSION["name"]."  ".$_SESSION["lastname"]."&nbsp;";
        }
        ?>
        <?php
        if(!isset($_SESSION["name"])){
        ?>
      <a href="login.php" class="btn btn-success"> <i class="bi bi-box-arrow-in-right"></i> เข้าสู่ระบบ</a>
      <?php
        }else{
      ?>
      <a href="logout.php" class="btn btn-danger btn-sm"><i class="bi bi-door-open-fill"></i> ออกจากระบบ </a>
      <?php
      }
      ?>
      </form>
    </div>
  </div>
</nav>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>