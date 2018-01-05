<?php
	include('koneksi.php');
	$perintah="SELECT * FROM guru order by id_guru desc";
	$query=@mysql_query($perintah,$koneksi);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>halaman Tampil Foto</title>
</head>
<body>
	<table width="500" border="1">
		<tr>
			<th colspan="4">MENAMPILKAN FOTO / <a href="input-foto.php">TAMBAH DATA></a></th>
		</tr>
		<tr>
			<td>ID</td>
			<td>NIP</td>
			<td>NAMA</td>
			<td>ALAMAT</td>
			<td>JENIS KELAMIN</td>
			<td>AKSI</td>
			<td>FOTO</td>
		</tr>
		<?php 
		while ($data=mysql_fetch_array($query)) {
		}
		 ?>
		 <tr>
		 	<td><?php  echo $data['id']; ?></td>
		 	<td><?php  echo $data['nip']; ?></td>
		 	<td><?php  echo $data['nama']; ?></td>
		 	<td><?php  echo $data['alamat']; ?></td>
		 	<td><?php  echo $data['jenis kelamin']; ?></td>
		 	<td><?php  echo $data['aksi']; ?></td>
		 	<td align="center"><img src="gambar/<php <?php echo $data['foto'];?>" width="60" height="80"></td>
		 		<td colspan="2"><a href="hapus.php?hapus<? echo $data['id_guru']?>">HAPUS</a></td>
		 		<!--path gambarnya sertakan-->
		 </tr>
	</table>
</body>
</html>