<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style type="text/css">
		body{
			text-align: center;
		}
		a{
            color: white;
        }
        a:hover{
            color: white;
            text-decoration: none;
        }
        .read{
			color: black;
		}
		.create{
			margin: 10px;
		}
		
	</style>
</head>
<body>
<?php 
		include 'db.php';
		if ($db_con) {
			$sql = " SELECT * FROM list"; 
			$query = mysqli_query($db_con, $sql); 
			?>
			<h1>PFP CRUD Grid</h1>
				<button class="btn btn-success create"><a href="create.php">Create</a></button>
			<table class="table table-bordered">
				<tr>
					<td>ID</td>
					<td>NAME</td>
					<td>SURNAME</td>
					<td>PHONE NUMBER</td>
					<td>ACTION</td>
				</tr>
				<?php while ( $row = mysqli_fetch_assoc($query)) { 
								?>
					<tr>
						<?php foreach ($row as $key => $value) { 
							?>
					<td>
					<?php echo $value."<br>";
				} ?> </td>
					<td>
					<button class="btn btn-default"><a class="read"href="read.php?id=<?=$row['list_id']?>">Read</a></button>
					<button class="btn btn-success update"><a href="update.php?id=<?=$row['list_id']?>">Update</a></button>
					<button class="btn btn-danger delete"><a href="delete.php?id=<?=$row['list_id']?>">Delete</a></button>
					</td>
					</tr>			
			<?php } ?>
			</table>		
			<?php 			
		} else {
			echo "error";
		}
 	?>
</body>
</html>