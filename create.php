<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style>
		input{
			display:block;
			padding:5px 10px;
			margin: 10px 15px;
		}
		.btn-success{
			display: inline;
			margin-right: 0;
		}
	</style>
</head>
<body>
<center>
	<h1>CREATE A CUSTOMER</h1>
<form action="" method="POST" class="form-horizontal">
	<input type="text" name="name" placeholder="Name">
	<input type="text" name="surname" placeholder="Surname">
	<input type="text" name="phone" placeholder="Phone Number">
	<input type="submit" name="submit" value="CREATE" class="btn btn-success">
	<input type="submit" name="back" value="BACK" class="btn btn-default">
</form>
</center>
</body>
</html>
<?php 
include 'db.php';
if(isset($_POST["submit"])){

	$name=$_POST["name"];
	$surname=$_POST["surname"];
	$phone=$_POST["phone"];
	
		$sql="INSERT INTO list (list_name, list_surname, list_phone) VALUES ('$name', '$surname', '$phone')";
		$query=mysqli_query($db_con,$sql);

		if($query){
			header("Location:list.php");
		}else{
			echo "Qeydiyyatdan kece bilmediniz";
		}

	}
	if (isset($_POST["back"])) {
		header("Location:list.php");
	}
 ?>
