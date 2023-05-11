<?php
session_start();
$pid=$_GET['sid'];
if(isset($_SESSION['s_id']))
{
   require_once 'ret_nav.php';
   require_once '../config/conn.php';
        $fid=$_SESSION['s_id'];
        echo $fid;

?><br><br><br><br>
<h1 style="text-align:center">Confirm Your Order</h1>
<?php
$sql="SELECT * FROM `products` WHERE `p_id` = '$pid'";
$res=$con->query($sql);      
  if($res->num_rows>0)
{
    while($row=$res->fetch_assoc())
    {
      $cid=$row['f_id'];
?>
<br><br><br>
            <div style="width: 50%;margin-left: 350px;border: 2px" class="form-group">
                <form method="post" name="myForm" action="">      
                    <table>
                        <tr>
                            <td>
                                Product Name: </td><td>&nbsp</td>
                            <td>
                <input type="text" class="form-control" name="name" value="<?php echo $row['pdt_name'];?>">
                            </td> </tr>
                        
    
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
                                <input type="submit" class="btn btn-success" value="Order" name="order"></td>
                            <td><input type="reset" class="btn btn-danger"></td></tr></table>
                            
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
        if(isset($_POST['order']))
        {
         $item=$_POST['name'];
         $price=$_POST['price'];
         $qty=$_POST['qty'];
         $tprice=$_POST['tprice'];
         $sql="INSERT INTO `farming`.`order_pdt` (`or_id`, `f_id`, `p_id`, `p_name`, `p_rate`, `p_qty`, `p_total`, `p_status`) VALUES (NULL, '$cid','$pid','$item','$qty','$price','$tprice','0')";
          if($con->query($sql)===TRUE)
    {
         echo "<script type='text/javascript'>alert('Order Added Successfully!!!!!.....');</script>";
        //header("Refresh:0; url=order_equip.php");
    }
    else
    {
    echo "<script type='text/javascript'>alert('Failed');</script>";
    echo "Error:".$sql.$con->error;

   //  header("Refresh:2; url=eq_order.php");
    } 

          

        }

        ?> 

<?php
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