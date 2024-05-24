<html>
<head>
	<title></title>
	<?php require 'head.php';?>
</head>
<body style="background-color:white">


<?php
if(isset($_POST['btnsubmit'])){
	extract($_POST);
	mysqli_query($con,"insert into tbladdcomp(compname,comaddres)values('$txtname','$txtaddress')");
}

?>
<?php require 'menu.php';?>
<div class="row">
	<div class="col-md-3">
	</div>
	<div class="col-md-6">
		<div class="card text-center">
  <div class="card-body">
  	<div class="card bg-black text-white">
      <h5 class="card-title">Company Info</h5>
      </div>
</div>

    <p class="card-text"><form method="post">
	<table class="table">
		
		<tr>
			<td>
				Company Name
			</td>
			<td>
				<input type="text" class="form-control" pattern="^[a-z]*$" name="txtname" required placeholder="Enter only letters">
			</td>
		</tr>
		<tr>
			<td>
				Company Address
			</td>
			<td>
				<textarea name="txtaddress" required class="form-control" required></textarea>

			</td>
		</tr>
		
		<tR>
			<Td align="center" colspan=2>
				<input type="submit" class="btn btn-black" name="btnsubmit" value="Submit">
			</Td>
		</tR>
	</table>
</form></p>
    
  </div>
  
</div>

</div>
	<div class="col-md-3">
	</div>
</div>
<?php require 'footer.php';?>
</body>
</html>