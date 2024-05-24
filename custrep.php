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
		TOTAL NO. OF CUSTOMERS :
	</td>
</tr>
<?php
$q=mysqli_query($con,"select count(*) as totaluser from tbladdcustomer");
$r=mysqli_fetch_array($q);
echo $r['totaluser'];
?>
</h1>
</center>

<table class="table">
	<tr>
		<tr>
		<tr>
		<td>Customer Name</td>
		<td>Phone No.</td>
		<td>Address</td>
		</tr>
		</tr>
	</tr>


<?php
$q=mysqli_query($con,"select * from tbladdcustomer");
while ($r=mysqli_fetch_array($q)) {
	?>
	<Tr>
		<td>
	<?php echo $r["custname"];?>
</td>
<td>
	<?php echo $r["custphone"];?>
</td>
<td>
	<?php echo $r["custaddres"];?>
</td>
</Tr>
<?php
}

?>

</table>
<?php require 'footer.php';?>
</body>
</html>