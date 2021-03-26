<?php 
session_start();
	if (isset($_POST['login'])) {
			$user = $_POST['user'];
			$pass = $_POST['pass'];
	}

	if ($user === "AHONG" && $pass = "31juli1998") {
		$_SESSION['login'] = $user;
		echo "<h1>Anda berhasil LOGIN</h1>";
		echo "<center><h2>Klik <a href='pert14_lat 2.php'>disini (lat 2.php)</h2><center>";
	}else {
	
	}
 ?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <style>
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
<body style="background-image: url('aq.JPG');background-size: cover;">
	<div id="container" style="margin-top: 20px; color: black">
		
        </style>
    </head>
   
    <body>
        <div class="container">
          <h1>Login</h1>
            <form method="post">
                <label>Username</label><br>
                <input type="text" name="user"><br>
                <label>Password</label><br>
                <input type="password" name="pass"><br>
                <input class="btn" type="submit" name="login" value="Login">
            </form>
        </div>     
    </body>
</html>