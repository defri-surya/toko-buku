<?php
include"../../conn.php";
$bk=$_GET['id'];
mysqli_query($conn,"DELETE FROM buku WHERE id_buku='$bk'");
header("location:index.php?page=buku");
 ?>