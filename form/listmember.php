<?php
ob_start();
session_start();
if(!isset($_SESSION["status"])){
header("location:login.php");
}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List member</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<body>
<?php
include("config.inc.php");
include("header.php");

$SQL = "select * from tbl_member";
$objQuery = mysqli_query($conn, $SQL);
?>
<br/>
<main>
<div class="container-fluid">
<table class="table table-bordered border-dark">
  <thead class=table-dark>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Firstname</th>
      <th scope="col">Name</th>
      <th scope="col">Lastname</th>
      <th scope="col">Sex</th>
      <th scope="col">birthdate</th>
      <th scope="col">Address</th>
      <th scope="col">phonenumber</th>
      <th scope="col">Email</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while($objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC)) {
    ?>
    <tr>
      <th scope="row"><?php echo $objResult['id']; ?></th>
      <td><?php echo $objResult['firstname']; ?></td>
      <td><?php echo $objResult['name']; ?></td>
      <td><?php echo $objResult['lastname']; ?></td>
      <td><?php echo $objResult['sex']; ?></td>
      <td><?php echo $objResult['birthdate']; ?></td>
      <td><?php echo $objResult['address']; ?></td>
      <td><?php echo $objResult['phonenumber']; ?></td>
      <td><?php echo $objResult['email']; ?></td>
      <td><?php echo $objResult['username']; ?></td>
      <td><?php echo $objResult['password']; ?></td>
      <td><a href="frmEditMember.php?get_id=<?php echo $objResult['id']; ?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i> </a></td>
      <td><a href="delMember.php?get_id=<?php echo $objResult['id']; ?>" class="btn btn-danger"><i class="bi bi-person-x-fill"></i> </a></td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
</main>
<?php
include("footer.php");
?>
</body>
</html>
<?php
}
?>