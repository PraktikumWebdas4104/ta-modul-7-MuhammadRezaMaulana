<?php 

$server = "localhost";
$username = "root";
$password = "";
$db = "mahasiswa";

$koneksi = mysqli_connect($server, $username, $password, $db);

	if (!$koneksi) {
		echo "Failed Connect to Server";
	}


 ?>