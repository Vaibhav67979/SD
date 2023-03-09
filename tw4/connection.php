<?php
	if(isset($_POST["submit"])){
		$conn=mysqli_connect("localhost","root","","practice1");
		if($conn){
			$fname=$_POST["fname"];
			$lname=$_POST["lname"];
			$age=$_POST["age"];
			$email=$_POST["email"];
			$sql="INSERT INTO `user` (`uid`, `fname`, `lname`, `age`, `email`) VALUES (NULL, '$fname', '$lname', '$age', '$email')";
			if($conn->query($sql)==TRUE){
				echo "Data Inserted";
			}
			else{
				echo "Not inserted";
			}
			$conn->close();
		}
		else{
			die("Not connected");
		}
		
	}else{
		echo "not submitted Submit";
	}
?>