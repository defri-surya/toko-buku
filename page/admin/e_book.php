<?php
include"../../conn.php";
	$id_buku = $_POST['id_buku'];
	$judul = $_POST['judul'];
	$penerbit = $_POST['penerbit'];
	$pengarang = $_POST['pengarang'];
	$halaman = $_POST['halaman'];
	$harga = $_POST['harga'];
	$stok = $_POST['stok'];
	$kategori= $_POST['kategori'];
	$qryid = mysqli_query($conn,"SELECT * FROM kategori where kategori='$kategori'");
	$data = mysqli_fetch_assoc($qryid);
	$id_kategori = $data['id_ketegori'];

@$message		= '';
$valid_file		= true;
$max_size		= 1024000;


if($_FILES['gambar']['name']){
	
	if(!$_FILES['gambar']['error']){

		$new_file_name = strtolower($_FILES['gambar']['tmp_name']); 
		if($_FILES['gambar']['size'] > $max_size)
			$valid_file	= false;
			$message	= 'Maaf, file terlalu besar. Max: 1MB';
		}
	
		$image_path = pathinfo($_FILES['gambar']['name'],PATHINFO_EXTENSION); 
		$extension = strtolower($image_path); 

		if($extension != "jpg" && $extension != "jpeg" && $extension != "png" && $extension != "gif" ) {
			$valid_file = false;
			$message	= "Maaf, file yang diijinkan hanya format JPG, JPEG, PNG & GIF. #".$extension;
		}



	
		if($valid_file == true)
		{
		
			$rename_nama_file	= date('YmdHis');
			$nama_file_baru		= $rename_nama_file.'.'.$extension;


			
			mysqli_query($conn,"UPDATE buku set judul='$judul',id_ketegori='$id_kategori',pengarang='$pengarang',penerbit='$penerbit',halaman='$halaman',harga='$harga', gambar='$nama_file_baru', stok='$stok' where id_buku='$id_buku'");
		
			move_uploaded_file($_FILES['gambar']['tmp_name'], '../../gambar/'.$nama_file_baru);
			header("location:index.php?page=buku");
		}
	}
	
	else
	{

		$message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['gambar']['error'];
	}
?>