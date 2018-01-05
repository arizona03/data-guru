<?php 
	if(isset($_GET['id'])){
		include("koneksi.php");

		$id = $_GET['id'];

		$cek = mysqli_query($koneksi,"SELECT id_guru FROM guru WHERE id_guru = '$id'") or die (mysqli_error());

		if(mysqli_num_rows($cek) == 0){
			echo "<script>windows.history.back()</script>";
		}
		else{
			$del = mysqli_query($koneksi,"DELETE FROM guru WHERE id_guru = '$id' ");
			if($del){
			echo "DATA BERHASIL DI HAPUS";
			echo "<br><a href='index.php'>Back</a>";
			}
			else{
				echo "GAGAL MENGHAPUS DATA";
				echo "<a href='index.php'>Back</a>";
			}
		}
	}
 ?>