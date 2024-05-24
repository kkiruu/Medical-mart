
<html>
<head>
	<title></title>
	<?php require 'head.php';?>
</head>
<body style="background-color:white">


<?php
if(isset($_POST['btnregister'])){
	extract($_POST);
	mysqli_query($con,"insert into tbladmin(aname,apass,aemail,aphone,aaddres,rbgender)values('$txtname','$txtpass','$txtemail','$txtphone','$txtaddress','$rbgender')");

}

?>
<?php require 'menu.php';?>
<div class="row">
	<div class="col-md-3">
	</div>
	<div class="col-md-6">
		<div class="card text-center">
  <div class="card-body">
  	<div class="card bg-dark text-white">
  <img src="img/p7.jpg" class="card-img" alt="..." height="350px"/>
  <div class="card-img-overlay">
    <h5 class="card-title">REGISTRATION</h5>
    <p class="card-text">
       Register To Our Medical Mart For More Details </p>
  </div>
</div>

    <p class="card-text"><form method="post">
	<table class="table">
		<tr>
			<td>
				Name
			</td>
			<td>
				<input type="text" class="form-control" pattern="^[a-z]*$" name="txtname" required placeholder="Enter Only Letters">
			</td>
		</tr>
		
		<tr>
			<td>
				Gender
			</td>
			<td>
				<input type="radio" checked name="rbgender" value="Male">Male
				<input type="radio" name="rbgender" value="Female">Female
			</td>
		</tr>
		<tr>
			<td>
				Email
			</td>
			<td>
				<input type="email" class="form-control" pattern="[a-z]+[0-9]*@[a-z]+[0-9]*\.[a-z]{2,3}" name="txtemail" required>
			</td>
		</tr>
		<tr>
			<tr>
			<td>
				Password
			</td>
			<td>
				<input type="password" class="form-control" name="txtpass" required>
			</td>
		</tr>
			<td>
				Phone
			</td>
			<td>
				<input type="text" class="form-control" required pattern="[0-9]{10}" name="txtphone">
			</td>
		</tr>
		<tr>
			<td>
				Address
			</td>
			<td>
				<textarea name="txtaddress" required class="form-control" required></textarea>
			</td>
		</tr>
		
		<tR>
			<Td align="center" colspan=2>
				<input type="submit" class="btn btn-primary" name="btnregister" value="Sign Up">
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