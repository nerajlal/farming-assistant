<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title></title>
   <title>Farming Assistant | Retailer:: Advertisement</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>
</head>
<body>
<?php
session_start();
ob_start();

if(isset($_SESSION['s_id']))
{
   require_once 'ret_nav.php';
   require_once '../config/conn.php';
        $fid=$_SESSION['s_id'];
        echo $fid;

?>
<br><br><br><br><br><br>
<div class="container">
  <h2 style="text-align:center;color: red;" >Advertisement</h2><br>
  <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    <div style="border:2px  red;width: 70%;margin-left: 250px;">
    <div class="form-group">
      <label class="col-sm-4" for="email">Advertisement Name:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="email" placeholder="title" name="a_name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Description:</label>
      <div class="col-sm-8">          
        <input type="text" class="form-control" id="pwd" placeholder="Description" name="desc">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Photo:</label>
      <div class="col-sm-8">          
        <input type="file" class="form-control" accept=".jpeg,.jpg,.png" name="file">
      </div>
    </div>
    
      
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary" name="add">Submit</button>
      </div>
    </div>
  </form>
</div>

</div>

<?php
}
if(isset($_POST['add']))
{
  $a_name=$_POST['a_name'];
  $desc=$_POST['desc'];

  $fileName=$_FILES['file']['name'];
$filetmp=$_FILES['file']['tmp_name'];
$filesize=$_FILES['file']['size'];
$target="uploads/".$fileName;

 if ($filesize>2097152)
               {
                  echo "File size larger than 2MB";
               }
               else
               {
                   move_uploaded_file($filetmp, $target);
            
 
 
 $addp="INSERT INTO `farming`.`tbl_adv` (`ad_id`, `ad_name`, `desc`, `photo`, `r_id`) VALUES (NULL, '$a_name', '$desc', '$fileName', '$fid');";
}
if($con->query($addp)===TRUE)
{
     echo "<script> alert('Added successfully') </script>";
      header("Refresh:2; url=ins_adds.php");

}

else
{
   echo "Error:".$addp.$con->error;
}

}
?>