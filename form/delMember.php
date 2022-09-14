<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<?php
include("config.inc.php");
$recive_id = $_GET['get_id'];
$delSQL = "delete from tbl_member where id=$recive_id";
$objQuery = mysqli_query($conn,$delSQL);
if($objQuery){
    echo"<script>
    Swal.fire({
        type: 'success',
        icon: 'success',
        title: 'Delete success',
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
        title: 'Delete fail',
        showConfirmButton: false,
        timer: 2000
      }).then(function() {
        window.location = 'listmember.php';
      });
      </script>";
    ;    
}
?>