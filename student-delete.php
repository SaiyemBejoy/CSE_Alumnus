<?php
	include 'conn.php';

	$s_id=$_GET['s_id'];

	$q="DELETE FROM `students` WHERE s_id='$s_id'";

	mysqli_query($con,$q);

	header('location:admin-students.php');

?>