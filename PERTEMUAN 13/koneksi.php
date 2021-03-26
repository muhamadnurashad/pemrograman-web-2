<?php 
	
	$koneksi = mysqli_connect("localhost","root","","tbl_artikel" );

	if (!$koneksi) {
		die("Gagal Terhubung dengan database".mysqli_connect_error());
	}

 ?>