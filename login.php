
<html>
<head>
	<title></title>
	<?php require 'head.php';?>
</head>
<body>


<?php require 'menu.php';?>
<?php
if(isset($_POST['btnlogin'])){
	extract($_POST);
	$q=mysqli_query($con,"select * from tbladmin where aemail='$txtemail' and apass='$txtpass'");
	if(mysqli_num_rows($q)>0){
		$_SESSION["email"]=$txtemail;
		$q1=mysqli_query($con,"select * from tbladmin where aemail='".$_SESSION['email']."'");
		$r1=mysqli_fetch_array($q1);
		$_SESSION["aid"]=$r1["aid"];
		header("location:welcome.php");
	}
	else{
		echo "Invalid Credentials";
	}
}

?>
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="card text-center">
<form method="post">
	<table class="table">
		 <div class="card-body"><div class="card">
  <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
    <img src="img/p3.jpg" class="img-fluid"/>
    <a href="#!">
      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
    </a>
  </div>
  <div class="card-body">
    <h4 class="card-title">Login to our Medical Mart</h4>
    <p class="card-text">We give you the star treatment!</p>
  </div>
</div>
		
		<tr>
			<td>
				Email
			</td>
			<td>
				<input type="email" class="form-control" name="txtemail" required>
			</td>
		</tr>
		<tr>
			<td>
				Password
			</td>
			<td>
				<input type="password" class="form-control" name="txtpass" required>
			</td>
		</tr>
		
		<tR>
			<Td colspan=2 align=center>
				<input type="submit" class="btn btn-primary" name="btnlogin" value="Log In">
			</Td>
		</tR>
	</table>
</form>
</div>
<div class="col-md-3"></div>
</div>
<?php require 'footer.php';?>

</body>
</html>