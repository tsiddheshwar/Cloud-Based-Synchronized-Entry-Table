<?php

require('connectivity.php');
$name=$_POST['s_name'];
$id=$_POST['roll_no'];
$hostel=$_POST['hostel'];
$gender=$_POST['gender'];
$departent=$_POST['department'];
$mob_no=$_POST['mob_no'];

if($_POST['gender']=="male")

$query="insert into boys values('$id','$name','$hostel','$departent','$mob_no');";

else
 
$query="insert into girls values('$id','$name','$hostel','$departent','$mob_no');";

$data = mysqli_query ($con,$query)or die(mysqli_error($con));

if($data)
{
	echo "Registration successful";
       
}
else
 {
     echo "User exist";
}
?>