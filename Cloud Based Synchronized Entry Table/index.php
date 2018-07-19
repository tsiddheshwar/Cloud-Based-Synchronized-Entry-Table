
<?php
include("connectivity.php");
function redirect($url)
{
    if (!headers_sent())
    {    
        header('Location: '.$url);
        exit;
        }
    else
        {  
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>'; exit;
    }
}


if(isset($_POST['submit'])){
	
	$user=$_POST['username'];
	$pass=$_POST['password'];
	
	if(empty($user) ||empty($pass)){
		echo '<script>alert("Please fill User and password!!!");</script>';
	}else{
		
		/* echo $user."<br/>";
		echo $pass; */
		      $query="SELECT * FROM admin WHERE username='$user' AND password='$pass'";
		      $sql=mysqli_query($con,$query);
		      if(mysqli_num_rows($sql)>0){
		         $row=mysqli_fetch_array($sql);
				  session_start();
				  $_SESSION['user']=$row['username'];
			  $home="/home.php";
			$home1="/home1.php";
			$admin="/admin.php";
	   			$_SESSION['username'] = $username;
        	
			        if($user=='gate1')
						
						//redirect($home);
						header("Location:home.php");
	                else if($user=='gate2')
	 					//redirect($home1);
                        header("Location:home1.php");
						else 
						header("Location:admin.php");
			  
			  }else{
				  echo '<script>alert("Please fill Correct Username and Password!!!");</script>';
			  }
			  
			  
		
		
		
	}
	
	
	/* echo '<script>alert("Thanks");</script>'; */
	
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


    </div>

  </div>

  <div id="menu">

    <ul>

      <li id="current"><a href="index.php"><span>Home</span></a></li>

     <li><a href="services.html"><span>Services</span></a></li>

      <li><a href="support.html"><span>Support</span></a></li>

      <li><a href="about.html"><span>About</span></a></li>
        <li><a href="register.html"><span>Register</span></a></li>

    </ul>

    </div>

    

     <!--input text form is here-->   

     <br />

  <br />
  
<div id="content-wrap"> 
<div class="login">
<strong style="font-size:30px; color: #275F6C;">Login</strong><br /><br />
<form action="" method="post">
Username
 <input type="text" name="username" /><br /><br />
 Password
 <input type="password" name="password" /><br /><br />
 <input  type="submit" name="submit" value="login" class="button" />
 </form>
</div>

</div>
<div id="footer">

   <p><a> &copy; 2017 <strong>Entry Catlog</strong> &nbsp;&nbsp;</a> </p>
  </div>

</div>

</body>

</html>