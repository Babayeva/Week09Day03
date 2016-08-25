<?php 
include 'db.php';
$id = $_GET['id'];
$sql = "DELETE FROM list WHERE list_id=$id";
$query =mysqli_query($db_con, $sql);
if ($query) {
	header("Location:list.php");
} else {
	echo "ERROR";
}

?>