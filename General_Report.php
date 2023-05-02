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
</style>

</head>
<body>
<div class="top"><h4 style="padding:20px" align="center" style="text-align:center">GENERAL TRANSACTION REPORT</h4></div>

<center>
			  
<table class="pbtable">
<thead>
<tr>
<th>SN</th>
<th>Payment Gateways</th>
<th>E-Wallet</th>
<th>Deposits</th>
<th>Withdrawals</th>
</tr>
</thead>

<?php
$select=mysqli_query($conn,"
SELECT payment_gateways.Gateway_Name AS All_Gateways,wallets.E_Wallet AS wallets,
SUM(CASE WHEN sales.Transaction_Type = 'Deposit' THEN sales.Amount ELSE 0 END) AS Total_Deposits, 
SUM(CASE WHEN sales.Transaction_Type = 'Withdraw' THEN sales.Amount ELSE 0 END) AS Total_Withdrawals 
FROM `sales` 
JOIN payment_gateways
ON sales.Transaction_Gateway = payment_gateways.id
JOIN wallets
ON wallets.pid = payment_gateways.id
GROUP BY sales.Transaction_Gateway;
");

$select_inital_capital=mysqli_query($conn,"
SELECT * FROM `cash`
");
$query_initial_capital=mysqli_fetch_array($select_inital_capital);

$no=0;

@$total_cash = $query_initial_capital['amount'];
while($query=mysqli_fetch_array($select))
{
$no=$no+1;
echo "<tr><td>".$no."</td>";
echo "<td>".$query['All_Gateways']."</td>";
echo "<td>".$query['wallets']."</td>";
echo "<td>TZS ".$query['Total_Deposits']."</td>";
echo "<td>TZS ".$query['Total_Withdrawals']."</td>";
@$Total_Deposits+=$query['Total_Deposits'];
@$Total_Withdrawals+=$query['Total_Withdrawals'];
@$Total_Wallets+=$query['wallets'];
}
@$Running_Capital = $Total_Deposits+$Total_Withdrawals;
echo "<tr>
<td></td>
<td>Total</td>
<td>TZS ".@number_format($Total_Wallets,2)."</td>
<td>TZS -".@number_format($Total_Deposits,2)."</td>
<td>TZS +".@number_format($Total_Withdrawals,2)."</td>
</tr>";
@$r1 = $Total_Wallets-$Total_Deposits+$Total_Withdrawals;
echo "<tr>
<td></td>
<td></td>
<td>Amount in E-Wallets</td>
<td>TZS ".@number_format($r1,2)."</td>
<td>TZS ".@number_format($r1,2)."</td>
</tr>";

echo "<tr>
<td></td>
<td></td>
<td>Capital Amount</td>
<td>TZS ".@number_format($total_cash,2)."</td>
<td>TZS ".@number_format($total_cash,2)."</td>
</tr>";

echo "<tr>
<td></td>
<td></td>
<td>Amount in Cash Wallet</td>
<td>TZS +".@number_format($total_cash-$r1,2)."</td>
<td>TZS -".@number_format($total_cash-$r1,2)."</td>
</tr>";

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

