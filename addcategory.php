<html>
<head>
	<title></title>
	<?php require 'head.php';?>
</head>
<body>
<?php require 'menu.php';?>
<?php
if(isset($_POST["btnsave"])){
	extract($_POST);
	mysqli_query($con,"insert into tblcategory(cname)values('$txtcname')");
}
?>
<form method="post">
	<table class="table">
		<tr>
			<div class="card-body">
			<tD>
				<h2>
				Category Name
				</h2>
			</tD>
			<div>
			<td>
				<input type="text" class="form-control" name="txtcname" required >
			</td>
		</tr>
		<tr>
			<td>
				<td>
				<input type="submit" class="btn btn-warning" name="btnsave" value="AddCategory">	
				</td>	
			</td>
		</tr>
	</table>
</form>
	</table>
<?php require 'footer.php';?>
</body>
</html>