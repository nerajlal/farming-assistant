<?php
include_once './config/conn.php';

if(isset($_POST['freg']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $disrict=$_POST['district'];
    $user=$_POST['username'];
    $pwd=$_POST['p1'];
    
    $sql="INSERT INTO `farmer` (`id`, `farmer_fname`, `farmer_lname`, `farmer_address`, `farmer_phone`, `farmer_district`) VALUES (NULL, '$fname', '$lname', '$address', '$phone', '$disrict')";
    if($con->query($sql)===TRUE)
    {
        $sql2="select `id` from farmer where farmer_phone='$phone' ";
         
            $res=$con->query($sql2);
            
if($res->num_rows>0)
{
    if($row=$res->fetch_assoc())
    {
        $reg_id=$row['id'];
        echo $reg_id;
        
    }
    
    }
        
        $sql1="INSERT INTO `login` (`log_id`, `username`, `password`, `user_type`, `reg_id`,`status`) VALUES (NULL, '$user', '$pwd', 'Farmer', '$reg_id','0');";
        $con->query($sql1);
        echo "<script type='text/javascript'>alert('Registered Successfully');</script>";
        header("Refresh:0; url=index.php");
    }
    else
    {
    echo "<script type='text/javascript'>alert('Failed');</script>";
     header("Refresh:2; url=index.php");
    }
    
}
