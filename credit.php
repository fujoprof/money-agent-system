<?php
require_once('connect.php');

if(isset($_POST['Record_Transaction'])){
require_once('connect.php');

@$Sales_Date=$_POST['Sales_Date'];
@$Customer_Name=$_POST['Customer_Name'];
@$Transaction_Id=$_POST['Transaction_Id'];
@$Customer_Identity=$_POST['Customer_Identity'];
@$Transaction_Type=$_POST['Transaction_Type'];
@$Amount=$_POST['Amount'];
@$Transaction_Gateway=$_POST['Transaction_Gateway'];

$insert="Insert into sales values('','$Customer_Name','$Transaction_Id','$Transaction_Type',
'$Amount','$Transaction_Gateway','0','$Sales_Date')";
$rs=mysqli_query($conn,$insert) or die(mysqlI_error($conn));

if(isset($rs)){

$id = mysqli_insert_id($conn);
/*$query1=mysqli_query($conn,"select * from sales where 
Sales_Date='$Sales_Date' AND Transaction_Type='$Transaction_Type'
AND Transaction_Gateway='$Transaction_Gateway' ");
$query2=mysqli_fetch_array($query1);

$id=$query2['id'];*/

echo "<script>alert('Congratulations, Transaction is registered successfully');</script>
<script>window.location='view_credits.php?id=$id';</script>";
}
else{
echo "<script>alert('Ops, Transaction is not registered successfully');</script>
<script>window.location='sales.php';</script>";
}
}
else{
?>
<html>
<head>
<link href="css/sist.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Montserrat+Alternates' rel='stylesheet' type='text/css'>
<title>RESULTS FORM: GRADE 1</title>
<script language="javascript"> 
function toggle() {
	var ele = document.getElementById("toggleText");
	var text = document.getElementById("displayText");
	if(ele.style.display == "block") {
    		ele.style.display = "none";
		text.innerHTML = "EDIT RESULT";
  	}
	else {
		ele.style.display = "block";
		text.innerHTML = "EDIT RESULT";
	}
} 




</script>
</head>
 
<body>
<!---container--->
<div id="container">
   
   <div id="aside">
    <!-- <div class="header">  
       
       
     </div>  -->
  <div class="menu">
 <ul>
		<li><a href="index.php">Record Debits</a></li>
		<li><a href="credit.php">Record Credits</a></li>
		<li><a href="clear_credit.php">Clear Credits</a></li>
		<li><a href="scs.php">Statement Report</a></li>    	
						    	
							<div class="clear"></div>
			  </ul>
     
     </div>
   
    <p align="center" style="text-align:center"><o:p>&nbsp;</o:p></p>
  <p align="center" style="text-align:center">&nbsp;</p>
  <p align="center" style="text-align:center"><o:p>&nbsp;</o:p></p>
  <p align="center" style="text-align:center">&nbsp;</p>
  <p align="center" style="text-align:center"><o:p>&nbsp;</o:p></p>
   <p align="center" style="text-align:center"><o:p>&nbsp;</o:p></p>
  <p align="center" style="text-align:center">&nbsp;</p>
  <p align="center" style="text-align:center"><o:p>&nbsp;</o:p></p>
  <p align="center" style="text-align:center">&nbsp;</p>
  
  
    </div>
    
  <div id="content_box">
    
    <div class="top">
   <h1 align="center" style="text-align:center">CREDIT MANAGEMENT PORTAL - CMP</h1>
   </div>
  
  <form action="" method="POST">
 
  <fieldset>
      
      <ul class="formList">
	     
	  
       <ul>
       
  <li>
        <label for="Sales_Date" class="text">DATE OF TO DAY {SALES}</label>
        <input type="date" name="Sales_Date" id="Sales_Date" value="" placeholder="DATE OF TO DAY" required>
		
		
        </li>  
		
		  <li>
        <label for="Customer_Name" class="text">COSTOMER NAME</label>
        <input type="text" name="Customer_Name" id="Customer_Name" value=""  placeholder="CUSTOMER NAME">
        </li> 
		<li>
        <label for="transaction_id" class="text">TRANSACTION ID</label>
        <input type="text" name="Transaction_Id" id="transaction_id" value=""  placeholder="TRANSACTION ID">
        </li> 		
		<li>
        <label>TRANSACTION TYPE</label> <br>  
       <select name="Transaction_Type" required>
         <option value="">--select--</option>
            <option value="Deposit">Deposit-Kuweka</option>
            <option value="Withdraw">Withdraw-Kutoa</option>        
       </select> 
	   </li>
		
		 <li>
        <label for="Amount" class="text">AMOUNT IN TZS</label>
        <input type="number" name="Amount" id="amount" value=""placeholder="AMOUNT-KIASI" required>
        </li>
		 <li>
       <label>TRANSACTION GATEWAY</label> <br>  
       <select name="Transaction_Gateway" required>
	       <option value="">--select--</option>
	   <?php
	   $select_transaction_gateway=mysqli_query($conn,"SELECT * FROM `payment_gateways`");

		while($query_transaction_gateway=mysqli_fetch_array($select_transaction_gateway))
		{
            echo "<option value='$query_transaction_gateway[id]'>$query_transaction_gateway[Gateway_Name]</option>";
		}
		?>
       </select>
        </li>

	  <li>
	  <input type="submit" name="Record_Transaction" id="submit" value="Record-Transaction" tabindex="140">
          <input type="reset" name="reset" id="submit" value="Reset" tabindex="140">
		  </li>
      </ul>
        
    </fieldset>
  </form>
  
 </div>
  </div>
</body>
</html>
<?php 

}

 ?>