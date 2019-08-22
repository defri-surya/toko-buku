<?php
include"../../conn.php";
$kd=$_GET['id'];
$id = $_GET['id_pembeli'];
$qry = mysqli_query($conn,"SELECT * from chekout where id_pembeli='$id' && status_terima='sudah diterima'");
$a = mysqli_num_rows($qry);
if ($a=="belum diterima") 
{
echo "<script>alert('Customer belum Mengkonfirmasi bahwa Dia sudah menerima barang.'); window.location = 'index.php?page=laporan'</script>";
}
else{
mysqli_query($conn,"DELETE FROM chekout WHERE id_chekout='$kd'");
mysqli_query($conn,"DELETE FROM keranjang where id_pembeli='$id'");
header("location:index.php?page=laporan");}
 ?>