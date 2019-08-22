<?php
include"../../conn.php";
session_start();
$id_pembeli = $_SESSION['id_pembeli'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tlp = $_POST['nomor_tlp'];
$tanggal = $_POST['tanggal'];
mysqli_query($conn,"INSERT INTO chekout set id_pembeli='$id_pembeli',nama='$nama',alamat='$alamat',nomor_tlp='$tlp',tanggal='$tanggal'");
header("location:cara_pesan.php?page=pembelian_selesai");
?>