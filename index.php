<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Guru</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 </head>
<body>
	<div class="container">
		<h1>Data Guru</h2>
		<p><button type="button" class="btn btn-primary"> <i class="glyphicon glyphicon-plus"></i> <a href="tambah.php">Tambah Data</a></button></p>
		<table class="table table-hover table-bordered">
			<tr>
				<th class="text-center">FOTO</th>
				<th class="text-center">NO</th>
				<th class="text-center">ID</th>
				<th class="text-center">NIP</th>
				<th class="text-center">NAMA</th>
				<th class="text-center">ALAMAT</th>
				<th class="text-center">JENIS KELAMIN</th>
				<th class="text-center">AKSI</th>
			</tr>
			<?php
			 include("koneksi.php");
			 $query = mysqli_query($koneksi,"SELECT * FROM guru ORDER BY id_guru ASC ") or die(mysqli_error());
			 if (mysqli_num_rows($query) == 0) { ?> 
			 	<tr><td colspan="7">Tidak ada data</td></tr>
			 <?php }
			else{ 
				$no = 1;
				while ($data = mysqli_fetch_assoc($query)) {
				?>
				 <tr >
				 	<td><img src="foto/<?php echo $data['foto'] ?>" width="100" height="100"></td>"
					<td class="text-center"><?php echo "<b>".$no."</b>" ?></td>
					<td class="text-center"><?php echo "<b>".$data['id_guru']."</b>" ?></td>
					<td class="text-center"><?php echo "<b>".$data['nip_guru']."</b>" ?></td>
					<td class="text-center"><?php echo "<b>".$data['nama']."</b>" ?></td>
					<td class="text-center"><?php echo "<b>".$data['alamat']."</b>" ?></td>
					<td class="text-center"><?php echo "<b>".$data['jeniskelamin']."</b>" ?></td>
					<td class="text-center">
						<button type="button" class="btn btn-primary"><a href="edit.php?id=<?php echo $data['id_guru'] ?>">Edit</a> </button>
						<button type="button" class="btn btn-primary"><a href="hapus.php?id=<?php echo $data['id_guru'] ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')">Hapus</a></button>
					</td>
				</tr>
			<?php  
			$no++;
			} 
		}
			 ?>
		</table>
	</div
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>