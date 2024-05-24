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
	mysqli_query($con,"insert into tbllocation(lrack)values('$txtlrack')");
}

?>
<div class="row">
	<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-12">
      <img 
        src="img/Location.jpg"
        alt="MEDICINE"
        class="img-fluid rounded-start"/>
    </div>
    <div class="col-md-6"></div>
    <div class="col-md-12">
    </div>
  </div>
</div>
	<div class="col-md-6">
<form method="post">
	<table class="table">	
		<tr>
			<div class="card-body">
			<tD>
				<h2>
				Location Rack
				</h2> 
			</tD>
			</div>
			<td>
				<input type="text" class="form-control" name="txtlrack" required>
			</td>
		</tr>
		<tr>
			<td>
				<td>
				<input type="submit" class="btn btn-warning" name="btnsave" value="Add Location">	</td>
			</td>
		</tr>
	</table>
</form>
</div>
	</table>
<?php require 'footer.php';?>
</body>
</html>