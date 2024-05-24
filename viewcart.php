
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
		<td>Order</td>
	</tr>


<?php
$q=mysqli_query($con,"select * from tblcart,tblmedicine where tblmedicine.mid=tblcart.mid and tblcart.status='0' and tblcart.aid=".$_SESSION['aid']);
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
	<a href="cancel.php?cartid=<?php echo $r['cartid'];?>"> Cancel</a>
	</td>
</Tr>
<?php
}

?>
<Tr>
	<td colspan="5">
		<center>
		<b><b>TOTAL : &nbsp
		<?php echo $ftotal;?></center>
	</td>
</Tr>
<tr>
	<Td colspan="5">
		<center><a href="bill.php"><input type="button" class="btn btn-success" value="Pay Bill" name=""> </a></center>
	</Td>
</tr>
</table>
<?php require 'footer.php';?>
</body>
</html>