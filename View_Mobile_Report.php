<html>
<head>
<title>FDIT</title>
<link href="css/sist.css" rel="stylesheet" type="text/css" media="all" />
<style>
    body{
		width:100%;
		background:url(images/site-background.jpg);
		}
</style>

</head>
<body>
<div class="top"><h4 style="padding:20px" align="center" style="text-align:center">MOBILE TRANSACTIONS REPORT</h4></div>

<center>
	<form action="" method="post">
		<div class="raw">
			<div class="col-md-4">
				<label for="Sales_Date" class="text">SELECT DATE TO VIEW REPORT</label>
				<select name="Transaction_Gateway" required>
					<option value="">Transaction Gateway</option>
					<option value="TigoPesa">TigoPesa</option>
					<option value="Mpesa">Mpesa</option>        
					<option value="Airtel_Money">Airtel Money</option>        
					<option value="Halo_Pesa">Halo Pesa</option>        
					<option value="crdb">CRDB</option>        
					<option value="nmb">NMB</option>        
					<option value="nbc">NBC</option>        
					<option value="tcb">TCB</option>        
			   </select>
				<select name="Transaction_Type" required>
					<option value="">Transaction Type</option>
					<option value="Deposit">Deposit Report</option>
					<option value="Withdraw">Withdraw Report</option>        
				</select> 				
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
<th>Customer Identity</th>
<th>Transaction Type</th>
<th>Transaction_Gateway</th>
<th>Amount</th>
</tr>
</thead>

<?php
if(isset($_POST['View_Mobile_Report'])){
require_once('connect.php');
@$Date_From=$_POST['Date_From'];
@$Date_To=$_POST['Date_To'];
@$Transaction_Type=$_POST['Transaction_Type'];
@$Transaction_Gateway=$_POST['Transaction_Gateway'];
$select=mysqli_query($conn,"select * from sales where 
Transaction_Type='$Transaction_Type' AND Transaction_Gateway='$Transaction_Gateway'
AND (Sales_Date BETWEEN '$Date_From' AND '$Date_To')");

$no=0;

while($query=mysqli_fetch_array($select))
{
$no=$no+1;
echo "<tr><td>".$no."</td>";
echo "<td>".$query['Customer_Identity']."</td>";
echo "<td>".$query['Transaction_Type']."</td>";
echo "<td>".$query['Transaction_Gateway']."</td>";
echo "<td>".$query['Amount']."</td>";
@$Total_Amount+=$query['Amount'];
}
echo "<tr>
<td></td>
<td></td>
<td></td>
<td>Total</td>
<td>".$Total_Amount."</td>
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

