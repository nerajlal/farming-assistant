
 <?php
require_once '../config/conn.php';
$sid=$_GET['sid'];

$up="DELETE FROM `products` WHERE `products`.`p_id` = '$sid'";
$con->query($up);
echo "<script type='text/javascript'>alert('item Removed');</script>";
       header("Refresh:0; url=view_pdt.php");
       
       
       
       ?>