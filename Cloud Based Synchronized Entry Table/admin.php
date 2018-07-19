

<?php
 include("connectivity.php");
session_start();
if(!isset($_SESSION['user'])){
header("Location:index.php");	
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">


<style>
.admin{
	max-width:inherit;
}

.tablecontainer{
	
	
	height:450px;
	overflow-y :scroll;
	
}



table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
	
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}


</style>
<head>

<title>Entry catalog</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<link rel="stylesheet" href="images/SimpleBlog.css" type="text/css" />

</head>

<body>

<div id="wrap">

  <div id="header">
    <h1 id="logo">Gate Entry <span class="gray">Catalog</span></h1>
    <!--<h2 id="slogan">Put your site slogan here...</h2>-->

    <div id="searchform"> 
 <span class="btn"  > <strong ><a href="logout.php"> Logout </a> </strong></span> 
    </div>

  </div>

  <div id="menu">

    <ul>

      <li id="current"><a href="index.php"><span>Home</span></a></li>

     <li><a href="services.html"><span>Services</span></a></li>

      <li><a href="#"><span>Support</span></a></li>

      <li><a href="#"><span>About</span></a></li>

    </ul>

  </div>

    

     <!--input text form is here-->   

     <br />

  <br />
<div  class="admin" id="content-wrap">

<?php

//include("connectivity.php");

$result=mysqli_query($con,"Select * from entry ;");


echo"<div class='tablecontainer'> ";
echo"<table>";
echo"<strong><tr><td>ENTRY NO</td><td>ID</td><td>TYPE</td><td>IN TIME</td><td>IN GATE</td><td>OUT TIME</td><td>OUT GATE</td></tr></strong>";
while($row = mysqli_fetch_assoc($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['entryn'] . "</td><td>" . $row['id']. "</td><td>" . $row['type']. "</td><td>" . $row['in_time']. "</td><td>" . $row['in_gate']. "</td><td>" . $row['out_time']. "</td><td>" . $row['out_gate'] . "</td></tr>" ;  //$row['index'] the index here is a field name
}

echo"</table>";
echo"</div>";


?>
 </div>


<div  id="footer">

    <p><a> &copy; 2017 <strong>Entry Catlog</strong> &nbsp;&nbsp;</a> </p>

  </div>

</div>

</body>

</html>