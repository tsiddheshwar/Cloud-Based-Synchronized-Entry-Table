<?php

require('connectivity.php');


session_start();

     global $con, $db;
	 global $row;
	
	 
	$id = $_POST['staff_entry'];
	
	$in_gate=$_SESSION['username'];
	$out_gate=$_SESSION['username'];
	 
	$squery=mysqli_query($con,"select * from entry where id='$id';");

	 $type="S";
	 
	 $isout=mysqli_query($con,"select out_time from entry where id='$id' order by in_time DESC limit 1;");  
	$isout1=mysqli_fetch_row($isout);
	$isout2=mysqli_query($con,"select * from entry where id='$id' order by in_time DESC limit 1;");
	$isout3=mysqli_fetch_row($isout2);
	if(!$isout3[0])
	{
		$isout1=999;
	}
	 if($isout1[0] || $isout1==999)
	       {
			   $in_time=date('Y-m-d H:i:s');
			   $in=mysqli_query($con,"insert into entry(id,type,in_time,in_gate) values('$id','$type','$in_time','$in_gate');")or die(mysqli_error($con));
			   if($in)
			   echo "<script type='text/javascript'>alert('Entry added!')</script>";
			//  echo "hello  ";echo $id;
		//echo "  entry added";
		   }
	
	else {
		$out_time=date('Y-m-d H:i:s');
		$entryn=mysqli_query($con,"select * from entry where id='$id' order by in_time DESC limit 1;");
		$row=mysqli_fetch_row($entryn);
		
		$out=mysqli_query($con,"update entry set out_time='$out_time' where entryn='$row[0]';");
		if($out)
		 echo "<script type='text/javascript'>alert('Entry closed!')</script>";
	//	echo "hello" . " " . $row[1];
		//echo "  entry closed";
	}



          
      
?>