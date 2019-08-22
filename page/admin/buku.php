<?php
include"../../conn.php";
$no = 1;
$qry_buku = mysqli_query($conn,"SELECT * from buku");
?>
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;">
<b>Data Buku</b>
</div>
<a href="index.php?page=input_buku" class="btn btn-success" style="margin-top:20px;"><span class="glyphicon glyphicon-plus"> TAMBAH BUKU</span></a>
<?php
@$aksi = $_GET['aksi'];
if($aksi=="input")
{
	include("input_buku.php");
}
?>
<div class="th">
<table class="table table-bordered" style="margin-top:20px;">
 
	<th style=" background: #E6E6FA;"><center>No</center></th>
	<th style=" background: #E6E6FA;"><center>Judul</center></th>
	<th style=" background: #E6E6FA;"><center>Penerbit</center></th>
	<th style=" background: #E6E6FA;"><center>Pengarang</center></th>
	<th style=" background: #E6E6FA;"><center>Gambar</center></th>
	<th style=" background: #E6E6FA;"><center>Halaman</center></th>
	<th style=" background: #E6E6FA;"><center>harga</center></th>
	<th style=" background: #E6E6FA;"><center>stok</center></th>
	<th style=" background: #E6E6FA;"><center>aksi</center></th>
	<?php while($data = mysqli_fetch_assoc($qry_buku)) { ?>
	<tr>
	 <td><?php echo $no++ ?></td>
	 <td><?php echo $data['judul'] ?></td>
	 <td><?php echo $data['penerbit'] ?></td>
	 <td><?php echo $data['pengarang'] ?></td>
	 <td><center><img src="../../gambar/<?php echo $data['gambar'] ?>" style="width:100px;"></center></td>
	 <td><?php echo $data['halaman'] ?></td>
	 <td>Rp.<?php echo number_format($data['harga']); ?>,-</td>
	 <td><?php echo $data['stok'] ?></td>
	 <td><a href="index.php?page=editbuku&id=<?php echo $data['id_buku']; ?>"><center>| <span class="glyphicon glyphicon-pencil"></span></a> | | <a href="hapus_book.php?id=<?php echo $data['id_buku']; ?>"><span class="glyphicon glyphicon-trash"></span> |</center></a></td>
	</tr>
	<?php } ?>
</table>
</div>