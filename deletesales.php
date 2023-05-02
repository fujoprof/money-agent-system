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
$delete=mysqli_query($conn,"delete from sales where id='$id'");
if($delete)
{
echo "<script>alert('Congratulations, Transaction is deleted successfully');</script>
<script>window.location='view_sales.php?id=$id';</script>";
}
}
?>
</body>
</html>
