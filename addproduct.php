<html>
<head>
	<title></title>
	<?php require 'head.php';?>
</head>
<body>
<?php require 'menu.php';?>
<?php
if(isset($_POST["btnaddmedicine"])){
	extract($_POST);
	$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	 if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
	mysqli_query($con,"insert into tblmedicine(mname,mprice,mdprice,mdesc,mimage,cid,lid,mstock,mexp)values('$txtmname','$txtmprice','$txtmdprice','$txtmdesc','$target_file','$cmbcategory','$cmblocation','$txtstock','$txtexp')");
}

?>
<div class="row">
	<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-12">
      <img 
        src="img/p13.jpg"
        alt="MEDICINE"
        class="img-fluid rounded-start"
      />
    </div>
    <div class="col-md-4"></div>
    <div class="col-md-12">
      <div class="card-body">
        <h1 class="card-title">ADD MEDICINE</h1>
        <p class="card-text">
        	<h5>
        <br>  1.Select Your Category Of The Medicine
         <br> 2.Add medicine Name You Required.
         <br> 3.And Fill The Other Informetion Mentioned.
         <br> 4.Add The Image of Prescription.
         	</h5>
        </p>
        </div>
    </div>
  </div>
</div>
	
	<div class="col-md-6">
<form method="post" enctype="multipart/form-data">

	<table class="table">

		<tR>
			<td>
				Choose Category
			</td>
			<td>
				<select name="cmbcategory" class="form-control">
					<?php
						$q=mysqli_query($con,"select * from tblcategory");
						while ($r=mysqli_fetch_array($q)) {
							?>
							<option value="<?php echo $r['cid'];?>"><?php echo $r["cname"];?></option>
							<?php
						}
					?>
				</select>
		</tR>
		<tR>
			<td>
				Choose location
			</td>
			<td>
				<select name="cmblocation" class="form-control">
					<?php
						$q=mysqli_query($con,"select * from tbllocation");
						while ($r=mysqli_fetch_array($q)) {
							?>
							<option value="<?php echo $r['lid'];?>"><?php echo $r["lrack"];?></option>
							<?php
						}
					?>
				</select>
		</tR>
		<tr>
			<tD>
				Medicine Name
			</tD>
			<td>
				<input type="text" class="form-control" name="txtmname" required>
			</td>
		</tr>
		<tr>
			<tD>
				Medicine Price
			</tD>
			<td>
				<input type="text" class="form-control" name="txtmprice" required>
			</td>
		</tr>
			<tr>
			<tD>
				Medicine Discount Price
			</tD>
			<td>
				<input type="text" name="txtmdprice" class="form-control" required>
			</td>
		</tr>
	
		<tr>
			<tD>
				Medicine Expiry
			</tD>
			<td>
				<input type="date" class="form-control" name="txtexp" required>
			</td>
		</tr>
		<tr>
			<tD>
				Medicine Description
			</tD>
			<td>
				<textarea name="txtmdesc" class="form-control" required></textarea>
			</td>
		</tr>
		<tr>
			<td>
				Product Stock
			</td>
			<Td>
				<input type="text" name="txtstock" class="form-control" required>
			</Td>
		</tr>
		<tr>
			<tD>
				Medicine Image
			</tD>
			<td>
				<input type="file"  name="fileToUpload" required>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" class="btn btn-warning" name="btnaddmedicine" value="Add Medicine">		
			</td>
		</tr>
	</table>
</form>
</div>
<?php require 'footer.php';?>
</body>
</html>