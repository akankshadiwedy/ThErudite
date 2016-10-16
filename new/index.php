

<!DOCTYPE html>
<html>
<head>
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
			opacity: 0.9;
		}				
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>


<title>Register</title>
</head>
<body>
<section>
<div class="container">
	<div class="form-group">
		<form method="post" action="process.php">
		<div class="row">
		<br>
		<br>
		<h2 style="color:white;font-size:2em">Sign Up!</h2>
		<br>
		<br>
		<label class="col-sm-2" style="color:white;font-size:1.1em">First Name:</label>
		<input class="col-sm-6 form-control" style="width: 30%" type="text" name="name" />
		<br />
		</div>
		<br>
		<br>
		<div class="row">
		<label class="col-sm-2" style="color:white;font-size:1.1em">Password:</label>
		<input class="col-sm-8 form-control" style="width: 30%" type="password" name="password" />
		<br />
		</div>
		<br>
		<br>
		<div class="row">
		<label class="col-sm-2" style="color:white;font-size:1.1em">Email:</label>
		<input class="col-sm-8 form-control" style="width: 30%" type="email" name="email" />

		<br />
		</div>
		<br>
		<br>
		<button class="btn btn-default btn-lg" data-target="file2.php">Sign Up</button>
		</form>		
	</div>
</div>
</section>




</body>
</html>