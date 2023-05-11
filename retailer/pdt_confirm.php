

<?php
session_start();
$eid=$_GET['sid'];
if(isset($_SESSION['s_id']))
{
	require_once 'user_nav.php';
	require_once '../config/conn.php';
        $fid=$_SESSION['s_id'];
     //   echo $fid;
    
    $sql="SELECT * FROM `farmer_crop` WHERE `crop_id` = '$eid'";
    $res=$con->query($sql);      
  if($res->num_rows>0)
{
    while($row=$res->fetch_assoc())
    {
    	$cid=$row['farm_id'];
    	//echo $cid;
    	?>
    	<br><br><br><br><br><br><br>
            <div style="width: 50%;margin-left: 350px;border: 2px" class="form-group">
                <form method="post" name="myForm" action="">      
                    <table>
                        <tr>
                            <td>
                                Crop Name: </td><td>&nbsp</td>
                            <td>
                <input type="text" class="form-control" name="name" value="<?php echo $row['crop_name'];?>">
                            </td> </tr>
                        <tr><td><label>Description :</label></td><td>&nbsp</td>
                            <td>
                                <input type="text" class="form-control" style="width: 300px;" name="desc" value="<?php echo $row['description'];?>"></td></tr>
    
                        <tr><td><label>Cost :</label>   </td><td>&nbsp</td>
                            <td>
                                <input type="text" class="form-control" style="width: 300px;" name="price" value="<?php echo $row['price'];?>"></td></tr>
   
                        <tr><td><label>Quantity :</label></td><td>&nbsp</td>
                            <td><input type="text" class="form-control" style="width: 300px;" onkeyup="calcRate();" name="qty" re >
                              <!--  <input type="text" class="form-control" name="qty">--></td></tr>
                        <tr><td><label>Total Cost :</label></td><td>&nbsp</td>
                            <td>
                                <input type="text" class="form-control" name="tprice" onkeyup="calcRate();" ></td></tr>
                        <tr><td>&nbsp</td><td>&nbsp</td><td>
                                <input type="submit" value="Order" name="order"></td>
                            <td><input type="reset"></td></tr></table>
                            
                </form>
            </div>
            
          <?php
    }
}
?> 
        </div>  
        </div>    
            
        </div>  
            <?php
}
?>
</body>
</html>
<?php
if(isset($_POST['order']))
{
    $name=$_POST['name'];
 //   $desc=$_POST['desc'];
   
    $qty=$_POST['qty'];
     $price=$_POST['price'];
    $tprice=$price*$qty;

    $sql="";
    
    $sql="INSERT INTO `12_krishi`.`order_crops` (`o_id`, `crop_id`, `crop_name`, `qty`, `price`, `totalcost`, `m_id`, `fid`) VALUES (NULL, '$eid', '$name', '$qty', '$price', '$tprice', '$fid', '$cid');";
    
     if($con->query($sql)===TRUE)
    {
         echo "<script type='text/javascript'>alert('Order Added Successfully!!!!!.....');</script>";
        //header("Refresh:0; url=order_equip.php");
    }
    else
    {
    echo "<script type='text/javascript'>alert('Failed');</script>";

   //  header("Refresh:2; url=eq_order.php");
    }        
}




?>

<script type="text/javascript">
					function calcRate(){
						var price = parseInt(document.myForm.price.value);
						var qty = parseInt(document.myForm.qty.value);

						total = price*qty;
						document.myForm.tprice.value = total;

					}
				</script>


