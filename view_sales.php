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
<div class="top"><h4 style="padding:20px" align="center" style="text-align:center">SALES REPORT<?php  echo $_GET['id'];?></h4></div>
<center>
			  
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
<th>DELETE</th>
</tr>
</thead>

<?php
require_once('connect.php');
$id=$_GET['id'];
$select=mysqli_query($conn,"SELECT sales.id AS sales_id,sales.*,payment_gateways.* FROM `sales` 
JOIN payment_gateways ON
sales.Transaction_Gateway = payment_gateways.id
WHERE sales.id = $id;");

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
echo "<td><a href='updatesales.php?id=".$query['sales_id']."'>UPDATE</a></td>";
echo "<td><a href='deletesales.php?id=".$query['sales_id']."'>DELETE</a></td></tr>";
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
<a href="index.php" >ADD->BACK</a></p>



</body>
</html>

