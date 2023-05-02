<html>
<head>
<title>TEACHER: STUDENT RESULT GRADE 1</title>
<link href="css/sist.css" rel="stylesheet" type="text/css" media="all" />
<style>
    body{
		width:100%;
		background:url(images/site-background.jpg);
		}
</style>

</head>
<body>
<div class="top"><h4 style="padding:20px" align="center" style="text-align:center">REPORT YA MAUZO YA MAMA MJOMBA</h4></div>

<center>
  <form action="" method="post">
   <label for="hisabati" class="text">DATE OF DAILY {SALES}</label>
        <input type="date" name="son" id="pass" tabindex="30" value="" placeholder="YY/MM/DD" required>
       </select> <input type="submit" name="submit" id="submit" value="VIEW SALES" tabindex="140">
	   </form>
  </center>

<center>
			  
<table class="pbtable">
<thead>
<tr>
<th>DATE OF TO DAY {SALES}</th>
<th>ITEM NAME</th>
<th>QUANTITY</th>
<th>COST</th>
</tr>
</thead>

<?php
if(isset($_POST['submit'])){
require_once('connect.php');
@$son=$_POST['son'];
$select=mysql_query("select * from sales where owner='MAMA MJOMBA' and date='$son'");


while($query=mysql_fetch_array($select))
{
echo "<tr><td>".$query['date']."</td>";
echo "<td>".$query['item_name']."</td>";
echo "<td>".$query['items']."</td>";
echo "<td>".$query['cost']."</td>";
@$fujo+=$query['cost'];
}


}
?>
</ol>
</tbody>
</table>
</div>
<?php
echo 'TO DAY SALES IS ABOUT'.' '.@$fujo;
?>
<p align="center" style="text-align:center"></p>
<p align="center" style="text-align:center"></p>
<p align="center" style="text-align:center"></p>
<p align="center" style="text-align:center">
<a href="index.php" >BACK</a></p>



</body>
</html>

