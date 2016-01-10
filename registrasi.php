<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="">
	<meta name="author" content="Dhimas">
	<link rel="icon" href="favicon.ico">

	<title>Registrasi</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<style>
		html{
			position: relative;
			min-height: 100%
		}
		body{
			margin-bottom: 60px;
		}
		.footer{
			position: absolute;
			bottom: 0;
			width: 100%;
			height: 60px;
			background-color: #f5f5f5;
		}
		body > .container{
			padding: 60px 15px 0;
		}
		.container .text-muted{
			margin: 20px 0;
		}
		.footer > .container{
			padding-right: 15px;
			padding-left: 15px;
		}
		code{
			font-size: 80%;
		}
		.pull-right {
		     float: right;
  		}
	</style>
	
</head>
<body>
	
	<div class="container">
		<form action="register.php" method="POST">
		<div>
			<label>Username : </label>
			<input type="text" placeholder="Username" name="username">
		</div>
		<div>
			<label>Password : </label>
			<input type="password" placeholder="Password" name="password">
		</div>
		<div>
			<label>Email : </label>
			<input type="text" placeholder="Email" name="email">
		</div>
		<div>
			<label>No_Telp/Hp : </label>
			<input type="text" placeholder="No Telepon/HP" name="no_telp">
		</div>
		<div>
			<label>Alamat/Hp : </label>
			<textarea type="text" placeholder="Alamat" name="alamat"></textarea>
		</div>
		<div>
			<label>No_rekening : </label>
			<input type="text" placeholder="No rekening" name="norek">
		</div>
			<input type="submit" name="enter" value="OK">
		</div>
	</form>
	</div>
	
</body>
</html>