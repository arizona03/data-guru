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
		<h2>Tambah Data Guru</h2>
	
	<div class="row">
				<div class="col-sm-12">
					<form action="tambah-proses.php" method="post" class="form-horizontal" enctype="multipart/form-data">
						<div class="form-group">
							<label class="col-sm-2 control-label">NIP</label>
							<div class="col-sm-6">
								<input type="number" class="form-control" name="nip" placeholder="8 Karakter
								" required>
							</div>
						</div>
						<div class="form-group">
							<label  class="col-sm-2 control-label">Nama</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Guru" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Alamat</label>
							<div class="col-sm-6">
								<textarea class="form-control" name="alamat" rows="3" placeholder="Masukkan Alamat" required></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Jenis Kelamin</label>
							<div class="col-sm-6">
								<select class="form-control" name="jeniskelamin" required>
									<option value="salah"> -----  pilih  -----</option>
									<option value="L">Laki-Laki</option>
									<option value="P">Perempuan</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Foto</label>
							<div class="col-sm-6">
								 <input type="file" name="foto">
							</div>
						</div>
						
						<a href="index.php"><button type="button" class="btn btn-default">Back</button></a>
					<button type="submit" class="btn btn-primary" value="Tambah" name="tambah">Tambah</button>
					</form>
					
				</div>
			</div>

	</div>	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>