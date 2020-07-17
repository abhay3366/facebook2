<?php
$conn=mysqli_connect("localhost","root","","newaccount");
if($conn){
	echo"connected to database";
}
if(isset($_REQUEST['submit']))
  {
	if(($_REQUEST['firstname'] == "")||($_REQUEST['surname'] == "")||($_REQUEST['mobileemail'] == "")||($_REQUEST['newpassword'] == "")||($_REQUEST['day'] == "")||($_REQUEST['month'] == "")||($_REQUEST['year'] == "")||($_REQUEST['gender'] == "")){
		echo"fill all field";
   }

else{
	$firstname=$_REQUEST["firstname"];
	$surname=$_REQUEST["surname"];
	$mobileemail=$_REQUEST["mobileemail"];
	$newpassword=$_REQUEST["newpassword"];
	$day=$_REQUEST["day"];
	$month=$_REQUEST["month"];
	$year=$_REQUEST["year"];
	$gender=$_REQUEST["gender"];
	$sql="INSERT INTO newid(firstname,surname,mobileemail,newpassword,day,month,year,gender) VALUES('$firstname','$surname','$mobileemail','$newpassword','$day','$month','$year','$gender')";
	if(mysqli_query($conn,$sql)){
		echo "data entered";
	}
	else{
		echo"not";
	}
}
}
?>