<!DOCTYPE html>
<html>
<head>
	<title>log in</title>
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<style>
body{
				background-image: url(web-dev.jpg);
				background-size: cover;
				background-repeat: no-repeat;
				
				
			}
		section {
			background-color: black;
			border : 2px solid #f5f5f5;
			border-radius: 7px;
			margin-top : 50px;
			margin-left: auto;
			margin-right: auto;
			padding: 30px;
			height: 500px;
			width: 600px;
			opacity:0.9;
		}	
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>
</head>
<body>
<section>
<div class="container">
<form method="post" action="log.php">
	
	<div class="row">
		<br>
		<br>
		<h2 style="color:white;font-size:2em">Login</h2>
		</div>
		<br>
		<br>
		<div class="row">
		<label class="col-sm-1" style="color:white;font-size:1.1em">Email:</label>
		<input class="col-sm-6 form-control" style="width: 30%;left:40px;" type="email" name="email" />
		<br />
		</div>
		<br>
		<br>
		<div class="row">
		<label class="col-sm-1" style="color:white;font-size:1.1em">Password:</label>
		<input class="col-sm-6 form-control" style="width: 30%;left:40px;" type="password" name="password" />
		<br />
		</div>
		<br>
		<br>
		<button class="btn btn-default btn-lg" data-target="file2.php">Login</button>
	


</form>
</div>
</section>
</body>
</html>