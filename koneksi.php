<?php
	$host = "localhost";
	$user = "root";
	$pass = ""; 
	$name = "maghroby";

	$koneksi = mysqli_connect($host, $user, $pass, $name) or die ("koneksi ke database gagal");
	// mysqli_select_db($name, $koneksi) or die ("tidak ada database yang dipilih")
 ?>