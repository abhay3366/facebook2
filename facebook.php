<?php
		$conn=mysqli_connect("localhost","root","","login");
		//if($conn){
		//echo"Connected to databse"."<br>";
		//}
		//check username
		/*if($_REQUEST["email"]=="8765028843"){
			if($_REQUEST["password"]=="abhay"){
			echo"welecome to facebok"."<br>";
			
				}
				else{
					echo"You entered wrong password-> ".$_REQUEST["password"];
				}
		}
		else{
			echo"You enter wrong email or phone";
		}*/
		$username=$_REQUEST["email"];
		$password=$_REQUEST["password"];
		if($username==8765028843 and $password=="abhay")
		{
			include "tiwari.html";
		}
		else{
			echo"you are not admine";
		}
	?>