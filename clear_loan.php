<html>
<body>
<?php
include('connect.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
//$query1=mysqli_query("select * from sales where id='$id'");
//$query2=mysql_fetch_array($query1);

//$ona=$query2['owner'];
$delete=mysqli_query($conn,"update sales set status=1 where id='$id'");
if($delete)
{
echo "<script>alert('Congratulations, Customer Credit is cleared successfully');</script>
<script>window.location='clear_credit.php';</script>";
}
}
?>
</body>
</html>