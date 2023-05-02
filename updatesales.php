
<html>
<link href="css/sist.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Montserrat+Alternates' rel='stylesheet' type='text/css'>
</head>
<div id="container">
   
   <div id="aside">
    
     <img src="images/Logo.png">
     <p align="center" style="text-align:center"></p>
     <p align="center" style="text-align:center"></p>
     <p align="center" style="text-align:center; font-weight:bold; color:#B75B00;"></p>
     
     <div class="menu">
       <ul>
						   <li><a href="index.php">Home</a></li>
						    	
						    	
						    	<div class="clear"></div>
			  </ul>
     
     </div>
   
    </div>
    
  <div id="content_box">
    
    <div class="top">
   <h2 align="center" style="text-align:center"> UPDATE TRANSACTION PANEL</h2>
   </div>

<?php
include('connect.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
if(isset($_POST['update_transaction']))
{
@$Sales_Date=$_POST['Sales_Date'];
@$Customer_Name=$_POST['Customer_Name'];
@$Transaction_Id=$_POST['Transaction_Id'];
@$Transaction_Type=$_POST['Transaction_Type'];
@$Amount=$_POST['Amount'];
@$Transaction_Gateway=$_POST['Transaction_Gateway'];

@$insert1="update sales set Sales_Date='$Sales_Date',Customer_Name='$Customer_Name',Transaction_Id='$Transaction_Id'
,Transaction_Type='$Transaction_Type'
,Amount='$Amount',Transaction_Gateway='$Transaction_Gateway'  where id='$id'";
@$rs=mysqli_query($conn,$insert1) or die(mysql_error());

if(isset($rs)){
echo "<script>alert('Congratulations, Transaction is updated successfully');</script>
<script>window.location='view_sales.php?id=$id';</script>";
}

else{
echo "<script>alert('Ops, this Transaction is not yet updated. Try again!');</script>
<script>window.location='view_sales.php?id=$id';</script>";
}

}
}
$query1=mysqli_query($conn,"select * from sales where id='$id'");
$query2=mysqli_fetch_array($query1);
?>
<form action="" method="POST">
      
       <fieldset>
     
      <ul>
	  <li>
        <label for="Sales_Date" class="text">Sales Date</label>
        <input type="date" name="Sales_Date" id="Sales_Date"  value="<?php echo $query2['Sales_Date']; ?>" required>
      </li>
	  <li>
        <label for="Customer_Name" class="text">Customer Name</label>
        <input type="text" name="Customer_Name" id="Customer_Name"  value="<?php echo $query2['Customer_Name']; ?>">
      </li>
	  <li>
        <label for="Transaction_Id" class="text">Transaction Id</label>
        <input type="text" name="Transaction_Id" id="Transaction_Id"  value="<?php echo $query2['Transaction_Id']; ?>">
      </li>
      <li>
       <label>Transaction Type</label> <br>  
       <select name="Transaction_Type" required>
         <option value="<?php echo $query2['Transaction_Type']; ?>">--select--</option>
            <option value="Deposity">Deposity-Kuweka</option>
            <option value="Withdraw">Withdraw-Kutoa</option>        
       </select>  </li>
      <li>
        <label for="Amount" class="text">Amount</label>
        <input type="number" name="Amount" id="name"  value="<?php echo $query2['Amount']; ?>" required>
      </li>
      <li>
       <label>Transaction Gateway</label> <br>  
       <select name="Transaction_Gateway" required>
         <option value="<?php echo $query2['Transaction_Gateway']; ?>">--select--</option>
			<?php
			   $select_transaction_gateway=mysqli_query($conn,"SELECT * FROM `payment_gateways`");

				while($query_transaction_gateway=mysqli_fetch_array($select_transaction_gateway))
				{
					echo "<option value='$query_transaction_gateway[id]'>$query_transaction_gateway[Gateway_Name]</option>";
				}
			?>
       </select>
        </li>
      </ul>
      
      
        
        <input type="submit" name="update_transaction" value="Update">
<button><a href="logout.php" >LOG OUT</a></button>
<button><a href="result11.php" >BACK</a></button></li>

        
          
        
      
    </fieldset>
  </form>
  </div>
</div>

</section>
	
</body>
</html>
