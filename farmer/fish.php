

<html>
    <head>
     <title>Add Crop Details</title>
	<!-- Meta-Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8"><?php
session_start();
if(isset($_SESSION['s_id']))
{
	require_once 'farmer_nav.php'; 
        include_once '../config/conn.php';
        $fid=$_SESSION['s_id'];
       // echo $fid;
        $sql="SELECT farmer_fname FROM `farmer` WHERE id='$fid'";
         $res=$con->query($sql); 
        if($res->num_rows>0)
{
    while($row=$res->fetch_assoc())
    {
        ?>
<div class="col-lg-3 d-flex align-items-center justify-content-center">

<a class="navbar-brand" href="index.php">
    <h1><a class="navbar-brand text-white font-weight-bold" href="index.php">
				<?php
      //  echo 'Welcome  ';
      //echo $row['farmer_fname'];?>
				</a>
    </h1>

</a>
</h1>
</div>

   <?php
    }
}
   ?>
 
	<meta name="keywords" content="Green login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	
	
</head>
<body style="background-image:url('a1.jpg');">
<section id="main-content">
	<section class="wrapper">
            <div style="height: 800px;">
		<br><br>
                   
                <h1 style="text-align: center;color:rgba(253, 70, 62, 0.84;text-decoration: underline">Add Fish Items</h1><br><br>
                <div>
                    <div class="container">
  
                        <form class="form-horizontal" action="" method="post">
    <div class="form-group">
      <label class="control-label col-sm-4" for="email">Fish Name:</label>
      <div class="col-sm-8">
          <input type="text" class="form-control" id="email" placeholder="Enter Crop Name" name="pdt_name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Fish Type:</label>
      <div class="col-sm-8">          
          <input type="text" class="form-control" id="pwd"  name="desc">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Cost:</label>
      <div class="col-sm-8">          
          <input type="text" class="form-control" id="pwd" placeholder="Crop Cost" name="cost">
      </div>
  </div>
      <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Weight:</label>
      <div class="col-sm-8">          
          <input type="text" class="form-control" id="pwd" placeholder="Crop Cost" name="cost">
      </div>
  </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-5 col-sm-7">
          <button type="submit" class="btn btn-success" name="add">Add</button>
      </div>
    </div>
  </form>
</div>


</section>

</section>
            
            <div class="footer">
			<div class="wthree-copyright">
                            <p style="text-align: center">© Farming Assistant 2020| Design by <a href="http://w3layouts.com">Scopos Technologies, Kollam</a></p>
			</div>
		  </div>

	
</body>

<?php
if(isset($_POST['add']))
{
    $cname=$_POST['pdt_name'];
    $desc=$_POST['desc'];
    $price=$_POST['cost'];
 
    $sql="INSERT INTO `farming`.`products` (`p_id`, `pdt_name`, `desc`, `price`, `f_id`) VALUES (NULL, '$cname', '$desc', '$price', '$fid');";

    if($con->query($sql)===TRUE)
    {
         echo "<script type='text/javascript'>alert('Crop Added Successfully');</script>";
        header("Refresh:0; url=add_fcrop.php");
    }
    else
    {
    echo "<script type='text/javascript'>alert('Failed');</script>";
     echo "Error: " . $sql1 . "<br>" . $con->error;
     header("Refresh:2; url=add_fcrop.php");
    }
    
}




		}
		else
		{
			 header("Refresh:2;url=../index.php");
		}
		?>
