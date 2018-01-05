<?php 
	include('koneksi.php');
	$hapus=$_GET['hapus'];
	$perintah1=sprintf("DELETE FROM guru WHERE id_guru",$hapus); //query untuk hapus
	$perintah2="SELECT * FROM guru WHERE id_guru='hapus]'";//query untuk pilih db dulu
	$a=@mysql_query($perintah2,$koneksi); //simpan query ke variabel $a
	$b=mysql_fetch_array($a); //selanjutnya pecah data dan simpan ke variabel $b
	unlink("roby/$b[foto]"); //sekarang jalankan perrintah unlink untuk hapus gambar dari folder, ambil data dan didepannya ditambah parameter tempat dimana folder gambar tersimpan
	$hapus12=@mysql_query($perintah1,$koneksi); //query untuk menghapus data di database
	if ($hapus12) {
		echo "Gambar Berhasil dihapus"<br/>
		<a href='tampil_foto.php'>kembali</a>
	}
	else{
		echo "Gagal koneksi=".mysql_error();
	}
 ?>