<?php
	session_start();
	$host = "localhost";
	$dbUsername= "root";
	$dbPassword = "";
	$dbname = "csepc_db";
	
	//mysql_connect($host,$dbUsername,$dbPassword);
	$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
	//mysql_select_db($dbname);

	if(isset($_POST['alm_id'])){
			$alm_id=$_POST['alm_id'];
			$alm_password=$_POST['alm_password'];
			
			$sql="select * from alumnus where alm_id='".$alm_id."'AND alm_password='".$alm_password."' limit 1";
			
			//$result=mysql_query($sql);
			$result = $conn-> query($sql);
			
			//if(mysql_num_rows($result)==1){
			if($result-> num_rows == 1){
					$_SESSION["alm_id"]=$alm_id;
					
					//echo "You have Successfully Logged in";
					echo "<script>location.href='alumni-home.php'</script>";
					exit();
			}else{
					//echo "<script>alert('You Have Entered wrong information')'</script>";
					echo "<script>location.href='login-faild.php'</script>";
					exit();
			}
		
	}
?>