<?php
 include("connectivity.php");
session_start();
if(!isset($_SESSION['user'])){
header("Location:index.php");	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

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

   
     <li><a href="register.html"><span>Services</span></a></li>

      <li><a href="support.html"><span>Support</span></a></li>

      <li><a href="about.html"><span>About</span></a></li>
      <li><a href="register.html"><span>Register</span></a></li>
     
    </ul>

    </div>

    

     <!--input text form is here-->   

     <br />

  <br />
  <div class="home">
  <div style="text-align:end; margin-right:90px; " >
  <h1 style="color:#CCC; font-size:40px; margin-left:40px;"> Gate no 2</h1>
</div>
  <h1 style="color:#827B7B; font-size:22px; margin-left:40px;">Do your Gate Entry here </h1>
  
  <div id="content-wrap"> </div>

   <div class="form">

      <form method="POST" class="search" action="student.php">

            <h3>Student Entry</h3>

           <br />

          <input name="student_entry" class="textbox" type="text" />

          <input class="button" type="submit" />

           <br />

           <br />

     </form>
            
            <form method="post" class="search" action="staff.php">

           <h3>Staff Entry</h3>

           <br />

          <input name="staff_entry" class="textbox" type="text" />

          <input name="staff_entry" class="button" type="submit" value="Enter"/>

           <br />
        </form>
        <form method="post" class="search" action="guest.php">
           <br /><h3>Guest Entry</h3>
         <b>  if you are guest then fill following details </b><br />



           <br />

           

        <b>Name :</b>

           <input name="guest_name" class="textbox" type="text" /><br /><br />

         <b>Address :</b>

           <input name="guest_add" class="textbox" type="text" /><br /><br />         

          <b>Mobile no :</b>

           <input name="guest_mob" class="textbox" type="text" /><br /><br />

          <input name="Entry" class="button" type="submit" value="Enter"/>

           <br />

           <br />

         

    
</form>
    

  </div>
  </div>
  <div id="footer">

  <p><a> &copy; 2017 <strong>Entry Catlog</strong> &nbsp;&nbsp;</a> </p>
  </div>

</div>

</body>

</html>
