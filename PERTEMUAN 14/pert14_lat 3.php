<?php 

	session_start();
	if (isset($_SESSION['login'])) {
		unset($_SESSION);
		session_destroy();

		echo "<center><h1>Anda Berhasil LOGOUT</h1></center>";
		echo "<center><h2><a href='pert14_lat 1.php'>disini</a>untuk LOGIN kembali</h2></center>";

		echo "<center><h2>Anda sekarang tidak bisa masuk kehalaman <a href='pert14_lat 2.php'>lat 2.php</a></h2></center>";
	}
 ?>