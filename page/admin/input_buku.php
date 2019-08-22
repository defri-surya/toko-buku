<?php
include"../../conn.php";
$qry_kategori = mysqli_query($conn,"SELECT * from kategori");

	?>
	<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;">
Tambah Buku
</div>
<form method="post" class="form-group" action="tambah_buku.php" enctype="multipart/form-data" style="margin-top:20px;">
	<select name="kat" class="form-control">
	<?php 
	while($kategori=mysqli_fetch_assoc($qry_kategori)){
	?>
			<option><?php echo $kategori['kategori']; ?></option>
			<?php } ?>
	</select><br>
	<input type="text" name="judul" placeholder="Judul Buku" class="form-control"><br>
	<input type="text" name="penerbit" placeholder="Penerbit Buku" class="form-control"><br>
	<input type="text" name="pengarang" placeholder="Pengarang Buku" class="form-control"><br>
	<input type="file" name="gambar" placeholder="Gambar Buku" class="form-control"><br>
	<input type="text" name="halaman" placeholder="Jumlah Halaman" class="form-control"><br>
	<input type="text" name="harga" placeholder="Harga Buku" class="form-control"><br>
	<input type="text" name="stok" placeholder="Stok Buku" class="form-control"><br>
	<input type="submit" name="simpan" value="simpan" class="btn btn-success"><br>
	</form>