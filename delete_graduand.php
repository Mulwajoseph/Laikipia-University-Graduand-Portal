<?php
include 'connect.php';

	$id = $_GET['id'];
	$sql = "DELETE FROM graduand WHERE id = '$id'";
	$delete = $conn->prepare($sql);
	$delete->execute();
	header('location:production/admin.php');


?>