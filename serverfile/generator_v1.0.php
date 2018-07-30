<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">

		<div class="col-sm-4 well">
			<form action="" method="post">
				<div class="form-group">
					<label for="username">Username :</label>
					<input class="form-control" type="text" name="username" id="username">
				</div>

				<div class="form-group">
					<label for="password">Password :</label>
					<input class="form-control" type="text" name="password" id="password">
				</div>

				<div class="form-group">
					<label for="path">Path :</label>
					<input class="form-control" type="text" name="path" id="path">
				</div>

				<input class="form-control" type="submit" name="submit" class="btn btn-primary">
			</form>
		</div>

		<div class="col-sm-8 well">
			<?php

			?>
			<div class="form-group">
				<label for="mytext"></label>
				<textarea id="mytext" class="form-control" cols="12" rows="30"> <?php echo readfile("test.xml");?> </textarea>	
			</div>
			
		</div>
	</div>
</body>
</html>


<?php

if (isset($_POST['submit'])) {
	$path = "test.xml";

	$mystring = implode("",file($path));
	$fileopen = fopen($path, "w");

	$mystring = str_replace("userval", "admin123", $mystring);
	$mystring = str_replace("passval", "pass123", $mystring);

	fwrite($fileopen, $mystring,strlen($mystring));

}

?>