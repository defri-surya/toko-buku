<?php
include"../../conn.php";
$kat = mysqli_query($conn,"SELECT * from kategori");
while($get_data=mysqli_fetch_assoc($kat)){

	?><li style=""><a href="index.php?page=detail&id=<?=$get_data['id_ketegori']?>">
		<?php echo $get_data['kategori']?>
	</a></li>
	<?php
	}
?>
