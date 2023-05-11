<?php
include_once './config/conn.php';

if(isset($_POST['user_reg']))
{
    $fname=$_POST['r_fname'];
    $lname=$_POST['r_lname'];
    $address=$_POST['r_address'];
    $phone=$_POST['r_phone'];
    $disrict=$_POST['r_district'];
    $user=$_POST['r_username'];
    $pwd=$_POST['r_p1'];
    
    $sql="INSERT INTO `retailer` (`id`, `user_fname`, `user_lname`, `user_address`, `user_phone`, `user_district`) VALUES (NULL, '$fname', '$lname', '$address', '$phone', '$disrict');";
    if($con->query($sql)===TRUE)
    {
        $sql2="select `id` from retailer where user_phone='$phone' ";
         
            $res=$con->query($sql2);
            
if($res->num_rows>0)
{
    if($row=$res->fetch_assoc())
    {
        $reg_id=$row['id'];
        echo $reg_id;
        
    }
    
    }
       $sql1="INSERT INTO `login` (`log_id`, `username`, `password`, `user_type`, `reg_id`,`status`) VALUES (NULL, '$user', '$pwd', 'Retailer', '$reg_id','0');";
        $con->query($sql1);
        echo "<script type='text/javascript'>alert('Registration Successfully');</script>";
      header("Refresh:0; url=index.php");
    }
    else
    {
            echo "Error: " . $sql1 . "<br>" . $con->error;
    //echo "<script type='text/javascript'>alert('Failed');</script>";
    //
     //header("Refresh:2; url=index.php");
    }
}
