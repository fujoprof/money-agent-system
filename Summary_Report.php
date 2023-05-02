<html>
<?php 
require_once('connect.php');
?>
<head>
<title>FDIT</title>
<link href="css/sist.css" rel="stylesheet" type="text/css" media="all" />
<style>
    body{
		width:100%;
		background:url(images/site-background.jpg);
		}
	.pbtable td{
		color:black;
	}
</style>

</head>
<body>
<div class="top"><h4 style="padding:20px" align="center" style="text-align:center">SUMMARY REPORT</h4></div>

<center>
	<form action="" method="post">
		<div class="raw">
			<div class="col-md-4">
				<label for="Sales_Date" class="text">SELECT DATE TO VIEW REPORT</label>
				<select name="Transaction_Gateway" required>
					<option value="">-- Payment Gateway--</option>
					<?php
					   $select_transaction_gateway=mysqli_query($conn,"SELECT * FROM `payment_gateways`");

						while($query_transaction_gateway=mysqli_fetch_array($select_transaction_gateway))
						{
							echo "<option value='$query_transaction_gateway[id]'>$query_transaction_gateway[Gateway_Name]</option>";
						}
					?> 				
				<input type="date" name="Date_From" id="Date_From" value="" placeholder="Date From" required>
				<input type="date" name="Date_To" id="Date_To" value="" placeholder="Date To" required>
				<input type="submit" name="View_Mobile_Report" id="submit" value="VIEW REPORT">
			</div>
			
		</div>   
	</form>
  </center>

<center>
			  
<table class="pbtable">
<thead>
<tr>
<th>SN</th>
<th>Transaction</th>
<th>E-Wallet</th>
<th>Cash Wallet</th>
</tr>
</thead>

<?php
if(isset($_POST['View_Mobile_Report'])){
@$Date_From=$_POST['Date_From'];
@$Date_To=$_POST['Date_To'];
@$Transaction_Type=$_POST['Transaction_Type'];
@$Transaction_Gateway=$_POST['Transaction_Gateway'];

$select_initial_deposit=mysqli_query($conn,"SELECT * 
FROM `payment_gateways` 
JOIN `wallets` ON
payment_gateways.id = wallets.pid WHERE payment_gateways.id = '$Transaction_Gateway'");
$query_initial_deposit=mysqli_fetch_array($select_initial_deposit);

$select_deposit=mysqli_query($conn,"select * from sales where 
Transaction_Type='Deposit' AND Transaction_Gateway='$Transaction_Gateway'
AND (Sales_Date BETWEEN '$Date_From' AND '$Date_To')");

$select_withdraw=mysqli_query($conn,"select * from sales where 
Transaction_Type='Withdraw' AND Transaction_Gateway='$Transaction_Gateway'
AND (Sales_Date BETWEEN '$Date_From' AND '$Date_To')");

while($query_deposit=mysqli_fetch_array($select_deposit))
{
@$Total_Deposit+=$query_deposit['Amount'];
}

while($query_withdraw=mysqli_fetch_array($select_withdraw))
{
@$Total_Withdraw+=$query_withdraw['Amount'];
}

@$Total_eWallet= $query_initial_deposit['E_Wallet'];
@$Total_Cash_Wallet= $query_initial_deposit['Cash_Wallet'];

@$E = $query_initial_deposit['E_Wallet']-$Total_Deposit+$Total_Withdraw;

@$C = $query_initial_deposit['Cash_Wallet']+$Total_Deposit-$Total_Withdraw;

@$balance_sheet = $E+$C;

echo "<tr>
<td>1</td>
<td>Working Capital</td>
<td>TZS ".number_format($query_initial_deposit['E_Wallet'],2)."</td>
<td>TZS ".number_format($query_initial_deposit['Cash_Wallet'],2)."</td>
</tr>";

echo "<tr>
<td>2</td>
<td>Total Deposit</td>
<td>TZS -".@number_format($Total_Deposit,2)."</td>
<td>TZS +".@number_format($Total_Deposit,2)."</td>
</tr>";

echo "<tr>
<td>3</td>
<td>Total Withdraw</td>
<td>TZS +".@number_format($Total_Withdraw,2)."</td>
<td>TZS -".@number_format($Total_Withdraw,2)."</td>
</tr>";

echo "<tr>
<td>4</td>
<td>Total</td>
<td>TZS ".number_format($E,2)."</td>
<td>TZS ".number_format($C,2)."</td>
</tr>";

echo "<tr>
<td>5</td>
<td>Ballace Sheet</td>
<td>TZS ".number_format($balance_sheet,2)."</td>
<td>TZS ".number_format($balance_sheet,2)."</td>
</tr>";

}
?>
</ol>
</tbody>
</table>
</div>
<p align="center" style="text-align:center"></p>
<p align="center" style="text-align:center"></p>
<p align="center" style="text-align:center"></p>
<p align="center" style="text-align:center">
<a href="index.php" >BACK</a></button></p>



</body>
</html>

