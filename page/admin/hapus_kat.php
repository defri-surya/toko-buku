<?php
include"../../conn.php";
$bk=$_GET['id'];
mysqli_query($conn,"DELETE FROM kategori WHERE id_ketegori='$bk'");
header("location:index.php?page=kategori");
 ?>