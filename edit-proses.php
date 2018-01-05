<?php 
	if (isset($_POST['nip']) && isset($_POST['nama']) && isset($_POST['alamat']) && isset($_POST['jeniskelamin']) && isset($_POST['simpan']))
	{
		include('koneksi.php');

		$id = $_POST['id'];
		$nip = $_POST['nip'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$jeniskelamin= $_POST['jeniskelamin'];
		$foto = $_FILES['foto'] ['name'];
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
				$input = mysqli_query($koneksi,"UPDATE guru SET nip_guru = '$nip', nama =  '$nama', alamat = '$alamat', jeniskelamin = '$jeniskelamin', foto = '$fotobaru' WHERE id_guru = '$id'")or die(mysqli_error($koneksi));
		
				if($input)
				{
					echo "DATA BERHASIL DI UPDATE";
					echo "<br><a href='index.php'>Back</a>";

				}
				else
				{
					echo "GAGAL MENGUPDATE DATA";
					echo "<a href='index.php'>Back</a>";
				}
			}
		}	
		
	}
	else
	{
		echo "Isikan Semua data";
		echo "<a href='index.php'>Back</a>";
	}
 ?>
