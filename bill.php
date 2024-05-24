
<html>
<head>
	<title></title>
	<?php require 'head.php';?>
</head>
<body>

<?php require 'menu.php';?>

<?php
if(isset($_POST['btnpay'])){
	extract($_POST);
	mysqli_query($con,"update tblcart set status='1' where aid=".$_SESSION['aid']);
	header("location:paid.php");
}

?>
<center>
<br>    
</br>
<input class="btn btn-success" type="button" value="Print" onclick="print()" name="">
</center>

<table class="table">
	<tr>
		<td>Medicine Name</td>
		<td>Medicine Price</td>
		<td>Quantity</td>
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

</Tr>
<?php
}

?>
<Tr>
	<td>
		Bill
	</td>
	<td>
		<?php echo $ftotal;?>
	</td>
</Tr>
</table>
<form method="post">
<table>
<tr>
	<Td>
		<input class="btn btn-success" type="submit" name="btnpay" value="Pay">
	</Td>
</tr>
</table>
</form>
<?php require 'footer.php';?>
</body>
</html>