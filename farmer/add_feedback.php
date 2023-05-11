<?php
session_start();
if(isset($_SESSION['s_id']))
{
	require_once 'farmer_nav.php';
	require_once '../config/conn.php';
        $fid=$_SESSION['s_id'];
        echo $fid;

?>
<br><br><br><br>
<h1 style="text-align: center;font-size: 20px;">Add Feedback</h1><br><br><br>
<form method="post" action="">
	<div style="width: 500px;height: 500px;margin-left: 500px;">
<div class="form-group">
  <label for="sel1">Select User:</label>
  <select class="form-control" style="width: 300px" name="sel1">
    <option>Admin</option>
    <option>Farmer</option>
    <option>Retailer</option>
    
  </select>
</div>
	<div class="form-group">
  <label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" name="comment"></textarea>
</div>
<button type="submit" class="btn btn-success" name="send">Send Feedback</button>
</form>
</div>
<?php
if(isset($_POST['send']))
{
	$user=$_POST['sel1'];
	$comment=$_POST['comment'];
	$sql="INSERT INTO `farming`.`feedback` (`fb_id`, `user_type`, `comment`, `uid`) VALUES (NULL, '$user', '$comment', '$fid');";

     if($con->query($sql)===TRUE)
    {
         echo "<script type='text/javascript'>alert('Feedback Send');</script>";
        header("Refresh:0; url=add_feedback.php");
    }
    else
    {
    echo "<script type='text/javascript'>alert('Failed');</script>";
   echo "Error: " . $sql1 . "<br>" . $con->error;
    header("Refresh:2; url=add_feedback.php");
    }     
}
?>

   





 <?php
}
?>