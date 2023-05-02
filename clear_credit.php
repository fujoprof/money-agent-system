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
<div class="top"><h4 style="padding:20px" align="center" style="text-align:center">CLEAR ALL/SPECIFIC CUSTOMER CREDIT</h4></div>
<center>
	<form action="" method="post">
		<div class="raw">
			<div class="col-md-4">	
				<input type="text" name="Customer_Name" id="Customer_Name" value="" placeholder="Customer_Name" required>
				<input type="submit" name="View_Loans" id="submit" value="VIEW REPORT">
			</div>
			
		</div>   
	</form>			  
<table class="pbtable">
<thead>
<tr>
<th>SN</th>
<th>Customer Name</th>
<th>Transaction Id</th>
<th>Transaction Type</th>
<th>Amount</th>
<th>Transaction Gateway</th>
<th>UPDATE</th>
<th>CLEAR</th>
</tr>
</thead>

<?php
require_once('connect.php');
if(isset($_POST['View_Loans'])){
$id=0;
@$Customer_Name=$_POST['Customer_Name'];
$select=mysqli_query($conn,"SELECT sales.id AS sales_id,sales.*,payment_gateways.* FROM `sales` 
JOIN payment_gateways ON
sales.Transaction_Gateway = payment_gateways.id
WHERE sales.status = $id AND sales.Customer_Name like '%$Customer_Name%' OR sales.Customer_Name = '$Customer_Name';");

$no = 0;

while($query=mysqli_fetch_array($select))
{
$no=$no+1;	
echo "<tr><td style='color: black'>".$no."</td>";
echo "<td style='color: black'>".$query['Customer_Name']."</td>";
echo "<td style='color: black'>".$query['Transaction_Id']."</td>";
echo "<td style='color: black'>".$query['Transaction_Type']."</td>";
echo "<td style='color: black'>TZS ".number_format($query['Amount'],2)."</td>";
echo "<td style='color: black'>".$query['Gateway_Name']."</td>";
echo "<td><a href='update_credit.php?id=".$query['sales_id']."'>UPDATE</a></td>";
echo "<td><a href='clear_loan.php?id=".$query['sales_id']."'>CLEAR</a></td></tr>";
}
}else{
$id=0;
$select=mysqli_query($conn,"SELECT sales.id AS sales_id,sales.*,payment_gateways.* FROM `sales` 
JOIN payment_gateways ON
sales.Transaction_Gateway = payment_gateways.id
WHERE sales.status = $id;");

$no = 0;

while($query=mysqli_fetch_array($select))
{
$no=$no+1;	
echo "<tr><td style='color: black'>".$no."</td>";
echo "<td style='color: black'>".$query['Customer_Name']."</td>";
echo "<td style='color: black'>".$query['Transaction_Id']."</td>";
echo "<td style='color: black'>".$query['Transaction_Type']."</td>";
echo "<td style='color: black'>TZS ".number_format($query['Amount'],2)."</td>";
echo "<td style='color: black'>".$query['Gateway_Name']."</td>";
echo "<td><a href='update_credit.php?id=".$query['sales_id']."'>UPDATE</a></td>";
echo "<td><a href='clear_loan.php?id=".$query['sales_id']."'>CLEAR</a></td></tr>";
}
}
?>
</ol>
</tbody>
</table>
  </center>
</div>

<p align="center" style="text-align:center"></p>
<p align="center" style="text-align:center"></p>
<p align="center" style="text-align:center"></p>
<p align="center" style="text-align:center">
<a href="credit.php" >ADD->BACK</a></p>



</body>
</html>

