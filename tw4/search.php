<?php
	if(isset($_POST["submit"])){
		$conn=mysqli_connect("localhost","root","","practice1");
		if($conn){
			$fname=$_POST["fname"];
			$lname=$_POST["lname"];
			$sql=mysqli_query($conn,"SELECT * FROM `user` WHERE fname='$fname' AND lname='$lname';");
			$data=mysqli_fetch_assoc($sql);
			// echo $data["lname"];
			if($data["fname"]==$fname && $data["lname"]==$lname){
				echo "Data found";
			}
			else{
				echo "not found";
			}
		}
	}
	
?>