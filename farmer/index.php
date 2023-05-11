<?php
session_start();
if(isset($_SESSION['s_id']))
{
	require_once 'farmer_nav.php'; 
        $fid=$_SESSION['s_id'];
        //echo $fid;
    ?>


<html>
    <head>
     <style>
.hero-image {
  background-image: url('temp/images/g1.jpg');
  background-color: #cccccc;
  height: 900px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
</style>
    </head>
    <body>
       <!-- <a href="../index.php"></a>-->

<div class="hero-image"></div>
<div class="copyw3-agile"> 
        <div class="container">
            <p>&copy; 2021 Farming Assistant | Design by <a href="http://w3layouts.com/">Neraj Lal </a></p>
        </div>
    </div>
</body>
<?php
		}
		else
		{
			 header("Refresh:2;url=../index.php");
		}
		?>

</html>