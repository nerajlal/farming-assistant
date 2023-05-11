<?php
session_start();
if(isset($_SESSION['s_id']))
{
	require_once 'farmer_nav.php';
  include_once '../config/conn.php';
        $fid=$_SESSION['s_id'];
        //echo $fid;
    ?>

<section id="main-content">
    <section class="wrapper">
            <div style="height: 800px;">
        <br><br>
                   
                <h1 style="text-align: center;color: #D81B60;text-decoration: underline;">View Products</h1><br><br>
                <div>
                    <table class="table table-bordered" style="color: green;width:70%" align="center">
    <thead>
      <tr>
        <th>Crop ID</th>
        <th>Crop Name</th>
        <th>Soil Name</th>
        <th>Cost</th>
        <th>Edit</th>
        <th>Remove</th>
      
      </tr>
    </thead>
    <tbody>
      <?php
  $sql="SELECT * FROM `products`";
    $res=$con->query($sql);      
  if($res->num_rows>0)
{
    while($row=$res->fetch_assoc())
    {?>
    <tr>
          <td><?php echo $row['p_id'];?></td>
          <td><?php echo $row['pdt_name'];?></td>
       
       <td><?php echo $row['desc'];?></td>
       
    <td><?php echo $row['price'];?></td>

<td><input type="button" value="Edit" class="btn btn-success" id="btnHome" 
onClick="document.location.href='edit_pdt.php?sid=<?php echo $row['p_id'];?>'" />  </td>
<td><input type="button" value="Remove" class="btn btn-danger" id="btnHome" 
onClick="document.location.href='del_pdt.php?sid=<?php echo $row['p_id'];?>'" />  </td>



                 <?php
    }
}
?>
             





<?php
}
?>