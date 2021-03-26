<!DOCTYPE html>
<html>
<head>
	<title>Form Artikel</title>
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
	<div id="container" style="margin-top: 20px; color: black">

</head>
<body>
<div id="container">
	<h1>Form Berita</h1>
		
		<form action="proses.php" method="post">
			<p>
				<b>Judul :</b><br>
				<input type="text" name="title"/>
			</p>
			<p>
				<b>Penulis :</b><br>
				<input type="text" name="author"/>
			</p>
			<p>
				<b>Lead :</b><br>
				<textarea name="abstraksi" rows="4" cols="30"></textarea>
			</p>
			<p>
				<b>Content :</b><br>
				<textarea name="konten" rows="8" cols="45"></textarea>
			</p>
			
			<p>
				<input type="submit" name="submit" value="Add" class="tombol"/> 
			   	<input type="reset" name="batal" value="Reset" class="tombol"/>
			</p>
		</form>