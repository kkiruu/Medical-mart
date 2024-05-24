
<html>
<head>
	<title></title>
	<?php require 'head.php';?>
</head>
<body>

<?php require 'menu.php';?>
<center>
	<br>

</br>
	<h5>
<input class="btn btn-success" type="button" onclick="print()" name="" value="Print"><br>
    </h5>
</center>
<center>
	<br>

</br>
<h1>
<tr>
	<td> 
		TOTAL NO. OF MEDICINES :
	</td>
</tr>
<?php
$q=mysqli_query($con,"select count(*) as totaluser from tblmedicine");
$r=mysqli_fetch_array($q);
echo $r['totaluser'];
?>
</h1>
</center>

<table class="table">
	<tr>
		<tr>
		<tr>
		<td>Medicine Name</td>
		<td>Medicine Price</td>
		<td>Discount Price</td>
		<td>Medicine Stock</td>
		</tr>
		</tr>
	</tr>


<?php
$q=mysqli_query($con,"select * from tblmedicine");
while ($r=mysqli_fetch_array($q)) {
	?>
	<Tr>
		<td>
	<?php echo $r["mname"];?>
</td>
<td>
	<?php echo $r["mprice"];?>
</td>
<td>
	<?php echo $r["mdprice"];?>
</td>
<td>
	<?php echo $r["mstock"];?>
</td>
</Tr>
<?php
}

?>

</table>
<?php require 'footer.php';?>
</body>
</html>