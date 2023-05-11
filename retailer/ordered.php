<?php
session_start();
//$pid=$_GET['sid'];
if(isset($_SESSION['s_id']))
{
   require_once 'ret_nav.php';
   require_once '../config/conn.php';
        $fid=$_SESSION['s_id'];
        echo $fid;

?><br><br><br><br><br><br><br>
<h1 style="text-align: center;color: blue">Ordered Products</h1>
<?php
$sql="SELECT * FROM `order_pdt` where `p_status`='1'";
$res=$con->query($sql);      
  if($res->num_rows>0)
{
    while($row=$res->fetch_assoc())
    {
      $cid=$row['f_id'];

?><br><br><br>
<table class="table table-bordered" style="width:70%;margin-left: 200px;">
	<th>ID</th>
	<th>Product Name</th>
	<th>Quantity</th>
	<th>Price</th>
	<th>Total</th>
	<tr>
		<td><?php echo $row['or_id'];?></td>
		<td><?php echo $row['p_name'];?></td>
		<td><?php echo $row['p_qty'];?></td>
		<td><?php echo $row['p_rate'];?></td>
		<td><?php echo $row['p_total'];?></td>

	</tr>
<?php
}
}
}
?>