
<html>
<head>
	<title></title>
	<?php require 'head.php';?>
</head>
<body>

<?php require 'menu.php';?>
<table class="table">
	<tr>
		<td>Medicine Name</td>
		<td>Medicine Price</td>
		<td>Quantity</td>
		<td>Total</td>
	</tr>


<?php
$q=mysqli_query($con,"select * from tblcart,tblmedicine where tblmedicine.mid=tblcart.mid and tblcart.status='1' and tblcart.aid=".$_SESSION['aid']);
while ($r=mysqli_fetch_array($q)) {
	?>
	<Tr>
		<td>
	<?php echo $r["mname"];?>
</td>
<td>
	<?php echo $r["mdprice"];?>
</td>
<td>
	<?php echo $r["qty"];?>
</td>
<td>
	<?php echo $total= $r["qty"]*$r["mdprice"];$ftotal+=$total;?>
</td>
<td>
	<?php echo $r["deliverystatus"];?>
</td>
</Tr>
<?php
}

?>
<Tr>
	<td>
		<b><b> BILL :  
	</td>
	<td>
		<?php echo $ftotal;?>
	</td>
</Tr>
<tr>
	<Td>
		<input type="button" class="btn btn-success" value="Print" name="" onclick="print()">
	</Td>
</tr>
</table>
<?php require 'footer.php';?>
</body>
</html>