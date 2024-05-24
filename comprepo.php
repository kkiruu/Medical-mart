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
		TOTAL NO. OF COMPANY :
	</td>
</tr>
<?php
$q=mysqli_query($con,"select count(*) as totaluser from tbladdcomp");
$r=mysqli_fetch_array($q);
echo $r['totaluser'];
?>
</h1>
</center>

<table class="table">
	<tr>
		<tr>
		<td>Compony Name</td>
		<td>Address</td>
		</tr>
	</tr>


<?php
$q=mysqli_query($con,"select * from tbladdcomp");
while ($r=mysqli_fetch_array($q)) {
	?>
	<Tr>
		<td>
	<?php echo $r["compname"];?>
</td>
<td>
	<?php echo $r["comaddres"];?>
</td>
</Tr>
<?php
}

?>

</table>
<?php require 'footer.php';?>
</body>
</html>