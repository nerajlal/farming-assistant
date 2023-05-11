<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Farmer Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Arable a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/component.css" type="text/css" media="all">
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="screen" property="" />
    <link href="css/minimal-slider.css" rel='stylesheet' type='text/css' />
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=BenchNine:300,400,700" rel="stylesheet">
</head>
<body>

<br><br>


<h5 class="text-center mb-4">Login Now</h5>
<br>

                <div class="modal-body" style="border:2px solid black;width: 50%;margin-left: 400px;">

                    <div class="login px-4 mx-auto mw-100">
                        
                        <form action="" method="post">
                           
                    <div class="form-group" style="margin-left: 150px;">
                                <label class="mb-2">User Type</label>
                                <select name="type" class="form-control" >
                                        
                                            <option value="Retailer">Retailer</option> 
                                            <option value="Farmer">Farmer</option>
                                              <option value="admin">Admin</option>
                                    
                    		</select> 
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group" style="margin-left: 150px;">
                                <label class="mb-2">User Name</label>
                                <input type="text" name="user" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                            
                            <div class="form-group" style="margin-left: 150px;">
                                <label class="mb-2">Password</label>
                                <input type="password" name="pass" class="form-control" " id="exampleInputPassword1" placeholder="" required="">
                            </div>
                            <div class="form-check mb-2" style="margin-left: 150px;">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                        <button type="submit" class="btn btn-primary submit mb-4" style="margin-left: 150px;" name="login">Sign In</button>
                            <p class="text-center pb-4" style="margin-left: 150px;">
                                <a href="#" data-toggle="modal" data-target="#exampleModalCenter2"> Don't have an account?</a>
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php


include_once './config/conn.php';

if(isset($_POST['login']))
{
    $type=$_POST['type'];
    $user=$_POST['user'];
    $pwd=$_POST['pass'];
    $sql="SELECT * FROM `login` WHERE `username`='$user' and `password`='$pwd' AND `user_type`='$type' and `status`='1'";
    $res= mysqli_query($con, $sql);
    $num_rows= mysqli_num_rows($res);
    $rows=  mysqli_fetch_array($res);
 if($num_rows>0)
 {
     if($type=="Retailer")
         
 {
     echo "<script> alert('Login Success')</script>";
	// echo $rows['sid'];
     header("Refresh:0;url=retailer/index.php");
	$_SESSION['s_id']=$rows['reg_id'];
	 	// $_SESSION['cat']=$rows['category'];

	// echo $_SESSION['login_id'];
         
 }
 else if($type=="Farmer")
 {
     echo "<script> alert('Login Success')</script>";
     header("Refresh:0;url=farmer/index.php");
	$_SESSION['s_id']=$rows['reg_id'];
 }
 else if($type=="admin")
 {
     echo "<script> alert('Login Success')</script>";
     header("Refresh:0;url=admin/index.php");
	$_SESSION['s_id']=$rows['reg_id'];
 }
     
 }
 else
 {
     echo "<script> alert('Invalid User') </script>";
      echo "Error: " . $sql1 . "<br>" . $con->error;
  header("Refresh:0;url=index.php");
 }
}

    ?>
