<?php
	session_start();
	$host = "localhost";
	$dbUsername= "root";
	$dbPassword = "";
	$dbname = "csepc_db";
	
	//mysql_connect($host,$dbUsername,$dbPassword);
	$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
	//mysql_select_db($dbname);

	if(isset($_POST['username'])){
			$username=$_POST['username'];
			$password=$_POST['password'];
			
			$sql="select * from admin where username='".$username."'AND password='".$password."' limit 1";
			
			//$result=mysql_query($sql);
			$result = $conn-> query($sql);
			
			//if(mysql_num_rows($result)==1){
			if($result-> num_rows == 1){
					$_SESSION["username"]=$username;
					//echo "You have Successfully Logged in";
					echo "<script>location.href='admin-panel.php'</script>";
					exit();
			}else{
					//echo "<script>alert('You Have Entered wrong information')'</script>";
					echo "<script>location.href='login-faild.php'</script>";
					exit();
			}
		
	}
?>