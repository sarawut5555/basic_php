<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list member</title>
</head>
<body>
    <?php
    include("config.inc.php");
    include("header.php");

    $SQL = "select * from tbl_member";
    $objQuery = mysqli_query($conn, $SQL);
    ?>
    <br />
<main>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Firstname</th>
      <th scope="col">Name</th>
      <th scope="col">Lastname</th>
      <th scope="col">Sex</th>
      <th scope="col">Birthdate</th>
      <th scope="col">Address</th>
      <th scope="col">Phonenumber</th>
      <th scope="col">Email</th>
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
      <td><a href="#" class="btn btn-warning"><i class="bi bi-pencil-fill"></a></i></td>
      <td><a href="#" class="btn btn-danger"><i class="bi bi-person-x-fill"></a></i></td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
</main>
    <?php
    include("footer.php")
    ?>
</body>
</html>