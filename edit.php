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
			<h2>Edit Data Guru</h2>
			<p><a href="index.php">HOME</a></p>
			<?php
			include("koneksi.php");
			$id = $_GET['id'];
			$show = mysqli_query($koneksi,"SELECT * FROM guru WHERE id_guru = '$id'");
			if(mysqli_num_rows($show) == 0){
				echo "<script>windows.history.back()</script>";
			}
			else
			{
				$data = mysqli_fetch_array($show);
				?> 
			<div class="row">
				<div class="col-sm-12">
					<form action="edit-proses.php" method="post" class="form-horizontal" enctype="multipart/form-data"> 
						<input type="hidden" name="id" value="<?php echo $id; ?>">
						<div class="form-group">
							<label class="col-sm-2 control-label">NIP</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="nip" placeholder="8 Karakter" value="<?php echo $data['nip_guru']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label  class="col-sm-2 control-label">Nama</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Guru" value="<?php echo $data['nama']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Alamat</label>
							<div class="col-sm-6">
								<textarea class="form-control" name="alamat" rows="3" placeholder="Masukkan Alamat"><?php echo $data['alamat']; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Jenis Kelamin</label>
							<div class="col-sm-6">
								<select class="form-control" name="jeniskelamin">
									<option value="salah"> -----  pilih  -----</option>
									<option value="L" <?php if($data['jeniskelamin'] == 'L'){echo 'selected';}?>>Laki-Laki</option>
									<option value="P" <?php if($data['jeniskelamin'] == 'P'){echo 'selected';}?>>Perempuan</option>
								</select>
							</div>
						</div>
							<tr>
   							 	<td>Foto</td>
   							 	<td><input type="file" name="foto"></td>
 							</tr>
							
							<a href="index.php"><button type="button" class="btn btn-default">Back</button></a>
							<button type="submit" class="btn btn-primary" value="Simpan" name="simpan">Simpan</button>
					  </div>
					</form>
				</div>
			</div>
			<?php
				{
					
				}				}
			?>
		</div>
	</body>
</html>