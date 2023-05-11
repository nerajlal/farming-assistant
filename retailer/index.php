<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Farming Assistant:Retailer</title>
</head>
<body>
<?php
session_start();
if(isset($_SESSION['s_id']))
{
   require_once 'ret_nav.php';
   require_once '../config/conn.php';
        $fid=$_SESSION['s_id'];
        echo $fid;

?>

<div style="background-image: url('bg1.jpg');height: 500px;width: 100%;">
   
</div>
<div class="copy-bottom-txt text-center py-3">
         <p> 
            © 2021 Farming Assistant| Design by <a href="http://www.W3Layouts.com" target="_blank">Neraj Lal</a>
         </p>
      </div>
</body>
</html>


 <?php
}
?>