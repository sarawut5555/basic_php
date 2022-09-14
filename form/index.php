
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charlotte</title>
</head>
<body>
<?php
include("header.php")
?>
<div id="carouselExampleDark" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner carousel-fade">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="web1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
       
      </div>
    </div>
    <div class="carousel-item carousel-fade" data-bs-interval="2000">
      <img src="web2.jpg"  class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
       
      </div>
    </div>
    <div class="carousel-item carousel-fade">
      <img src="web3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  <?php
  include("footer.php")
  ?>
</div>
</body>
</html>