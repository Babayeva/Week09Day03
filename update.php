
<?php 


  include "db.php";
  $id = $_GET["id"];
	$sql = "SELECT * FROM list WHERE list_id=$id";
	$query = mysqli_query($db_con, $sql);

	

 $row=mysqli_fetch_assoc($query);



?>

<!DOCTYPE html>
<html>
<head>

	<title></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style type="text/css">
h1{
	text-align: center;
}
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
<h1>UPDATE A CUSTOMER</h1>
<center>
	<form action="" method="POST" class="form-horizontal">
	<input type="text" name="name" value="<?php echo $row['list_name']; ?>">
	<input type="text" name="surname" value="<?php echo $row['list_surname'];?>">
	<input type="text" name="phone" value="<?php echo $row['list_phone'];?>">
	<input type="submit" name="submit" value="UPDATE" class="btn btn-success">
	<input type="submit" name="back" value="BACK" class="btn btn-default">
</form>
</center>

<?php 

if (isset($_POST["submit"])) {
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$phone = $_POST['phone'];
	echo $name;

	$sql = "UPDATE `list` SET `list_name`='$name',`list_surname`='$surname',`list_phone`='$phone' WHERE list_id = $id";
	$query = mysqli_query($db_con, $sql);
	if ($query) {
		header("Location:list.php");
	}else {
		echo "Etdiyiniz deyisiklikler yerine yetirilmedi";
	}
}
if (isset($_POST["back"])) {
		header("Location:list.php");
	}


 ?>

</body>
</html>





