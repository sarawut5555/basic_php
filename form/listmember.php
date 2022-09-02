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
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">คำนำหน้า</th>
      <th scope="col">ชื่อ</th>
      <th scope="col">นามสกุล</th>
      <th scope="col">เพศ</th>
      <th scope="col">ว/ด/ปี เกิด</th>
      <th scope="col">ที่อยู่</th>
      <th scope="col">เบอร์โทร</th>
      <th scope="col">อีเมล์</th>
      <th scope="col">แก้ไข</th>
      <th scope="col">ลบ</th>
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
      <td>edit</td>
      <td>delete</td>
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