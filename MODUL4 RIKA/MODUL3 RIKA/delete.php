
<?php
include("config.php");

 $id= $_GET['id_mobil'];
 mysqli_query($connect, "DELETE from showroom_rika_table where id_mobil=$id");
 header("Location:read.php");
?>

