<?php
include"../../conn.php";
$id = $_GET['id'];
$q = mysqli_query($conn,"SELECT * FROM keranjang where id_pembeli='$id'");
$d_bayar = mysqli_fetch_assoc(mysqli_query($conn,"SELECT SUM(total_harga) as total_bayar from keranjang where id_pembeli='$id'"));
$bayar = $d_bayar['total_bayar'];
$total_bayar = $bayar+20000;
?>
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;margin-bottom:20px;">
<b>Detail Pembelian</b>
</div>
<table class="table table-bordered">
		<th style=" background: #E6E6FA; "><center>Judul Buku</center></th>
 		<th style=" background: #E6E6FA; ""><center>Qty</center></th>
 		<th style=" background: #E6E6FA; ""><center>Total Harga</center></th>
 		<th style=" background: #E6E6FA; ""><center>Total Bayar</center></th>
	<?php while($c=mysqli_fetch_assoc($q)){?>
	<tr>
		<td><center><?php $data=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from buku where id_buku='$c[id_buku]'"));$nama=$data['judul']; echo $nama; ?></center></td>
 		<td><center><?php echo $c['qty']; ?></center></td>
 		<td><center><?php echo $c['total_harga']; ?></center></td>
 		<td><center><?php echo $total_bayar; ?></center></td>
 	
	</tr>
	<?php } ?>
</table>