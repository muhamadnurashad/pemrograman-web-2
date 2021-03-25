<!DOCTYPE html>
<html>
<head>
	<title>BUKU TAMU</title>
	<style type="text/css">
		body { 
				font-family:times new rowman; 
				font-size:15px;

			}
			input,textarea{
				opacity: 0.2;
			}
		#container { 
			width:450px; 
			padding:20px 40px; 
			margin:50px auto; 
			border:0px solid #555; 
			box-shadow:0px 0px 2px #555; 
		}
	input[type="text"] { width:200px; }
	input[type="text"], textarea { padding:5px; margin:2px 0px; border: 1px solid #777; }
	input[type="submit"], input[type="reset"] { padding: 5px 20px; margin:2px 0px; font-weight:bold; cursor:pointer; }
	#error { 
		border:1px solid red; 
		padding:20px; }
</style>
</head>
<body style="background-image: url('AS.JFIF');background-size: contain;">
	<div id="container" style="margin-top: 20px; color: white">
		<h1>Buku Tamu</h1>
		<p>Created Muhamad Nur'</p>
		<p>Silahkan isi buku tamu dibawah ini untuk meninggalkan pesan anda</p>


		<form action="simpan.php" method="post">
			<p>
				<b>Nama Lengkap :</b><br>
				<input type="text" name="nama"/>
			</p>
			<p>
				<b>Email :</b><br>
				<input type="text" name="email"/>
			</p>
			<p>
				<b>Alamat :</b><br>
				<input type="text" name="alamat"/>
			</p>
			<p>
				<b>Kota :</b><br>
				<input type="text" name="kota"/>
			</p>
			<p>
				<b>Pesan :</b><br>
				<textarea name="pesan" rows="5" cols="50"></textarea>
			</p>
			<p>
				<input type="submit" name="submit" value="Kirim" /> 
			   <input type="reset" name="del" value="Hapus" />
			</p>
		</form>

	</div>
</body>
</html>