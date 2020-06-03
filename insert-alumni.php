<?php
	include 'conn.php';

	if(isset($_POST['done2'])){

		$name=$_POST['name'];
		$id=$_POST['id'];
		$department=$_POST['department'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$contact_no=$_POST['contact_no'];
		$batch_no=$_POST['batch_no'];

		$q = "INSERT INTO `alumnus`(`alm_id`, `alm_name`, `alm_department`, `alm_email`, `alm_contact_no`, `alm_batch_no`, `alm_password`) VALUES ('$id','$name','$department','$email','$contact_no','$batch_no','$password')";

		$query = mysqli_query($con,$q);

		echo "<script>location.href='index.php'</script>";
	}


?>