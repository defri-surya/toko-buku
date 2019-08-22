<?php
include"conn.php";
$kat = mysqli_query($conn,"SELECT * from kategori");
while($data_kat = mysqli_fetch_assoc($kat)){
?>
<li><a href="index.php?id=<?php echo $data_kat['id_ketegori'] ?>"><?php echo $data_kat['kategori']; ?></a></li>
<?php } ?>