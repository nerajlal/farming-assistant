<?php
session_start();
if(isset($_SESSION['s_id']))
{
   require_once 'ret_nav.php';
   require_once '../config/conn.php';
        $fid=$_SESSION['s_id'];
        echo $fid;

?><br><br>
<section id="main-content">
    <section class="wrapper">
            <div style="height: 800px;">
        <br><br><br>
                   
                <h1 style="text-align: center;color: #D81B60;text-decoration: underline;">View Products</h1><br><br>
                <div>
                    <table class="table table-bordered" style="color: rebeccapurple;width:70%" align="center">
    <thead>
      <tr>
        <th>Crop ID</th>
        <th>Crop Name</th>
        <th>Soil Name</th>
        <th>Cost</th>
        <th>Purchase</th>
        
      
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

<td><input type="button" value="Purchase" class="btn btn-primary" id="btnHome" 
onClick="document.location.href='pur_pdt.php?sid=<?php echo $row['p_id'];?>'" />  </td>



                 <?php
    }
}
?>
             




<?php
}
?>