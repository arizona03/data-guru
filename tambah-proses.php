<?php 
	if (isset($_FILES['foto']) && isset($_POST['nip']) && isset($_POST['nama']) && isset($_POST['alamat']) && isset($_POST['jeniskelamin']) && isset($_POST['tambah']))
	{
		include('koneksi.php');
		$nip = $_POST['nip'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$jeniskelamin= $_POST['jeniskelamin'];
		$foto= $_FILES['foto']['name'];
		$tmp = $_FILES['foto']['tmp_name'];

			// Rename nama fotonya dengan menambahkan tanggal dan jam upload
		$fotobaru = date('dmYHis').$foto;
			// Set path folder tempat menyimpan fotonya
		$path = "foto/".$fotobaru;
			// Proses upload
		if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
		 	 // Proses simpan ke Database

			if($jeniskelamin == "salah"){
				echo "Pilih Jenis Kelamin !";
				echo "<a href='tambah.php'>Back</a>";
			}
			else
			{
				$input = mysqli_query($koneksi,"INSERT INTO guru VALUES(NULL,'$nip','$nama','$alamat','$jeniskelamin','$fotobaru')") or die (mysqli_error());

				if($input){
					echo "SELAMAT DATA BERHASIL DITAMBAHKAN";
					echo "<br><a href='tambah.php'>Back</a>";
				}
				else{
					echo "GAGAL MENAMBAHKAN DATA";
					echo "<a href='tambah.php'>Back</a>";
				}
			}
		}	
	}
	else
	{
		echo "Isikan Semua data";
		echo "<a href='tambah.php'>Back</a>";
	}
 ?>
