<html>
<head>
	<title></title>
	<?php require 'head.php';?>
</head>
<body>

<?php require 'menu.php';?>
<form method="post">
    <table class="table">
        <Tr>
            <td>
                Search By Category
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
            </td>
            <Td>
                <input class="btn btn-primary" type="submit" name="btnsearchbycat" value="Search">
            </Td>
        </Tr>
        <Tr>
            <td>
                Search By Letters
            </td>
            <td>
                <input class="form-control" type="text" name="txtsearch">
            </td>
            <Td>
                <input class="btn btn-primary" type="submit" name="btnsearch" value="Search">
            </Td>
        </Tr>
    </table>
    </table>
    </form>
<div class="row">
<?php
if(isset($_POST['btnsearch'])){
    extract($_POST);
$q=mysqli_query($con,"select * from tblmedicine where mname like '%".$txtsearch."%'");
}
else if(isset($_POST['btnsearchbycat'])){
    extract($_POST);
$q=mysqli_query($con,"select * from tblmedicine where cid='$cmbcategory'");
}
else{
$q=mysqli_query($con,"select * from tblmedicine");
}
while ($r=mysqli_fetch_array($q)) {
    ?>
    <div class="col-md-3">
    <div class="form-control" class="card">  <img src="<?php echo $r['mimage'];?>" class="card-img-top" alt="..." height="300px" />
  <div  class="card-body">
    <h5  class="card-title"><?php
	echo $r["mname"];?></h5>
    <p class="card-text">
    	<table class="table">
    		<tR>
    			<td>
    				₹<strike><?php echo $r['mprice'];?></strike>/-
    			</td>
    		</tR>
            <tr>
                <td> 
                    ₹<?php echo $r['mdprice'];?>/-
                
            </td></tr>
             <tr>
                <td> 
                    Location Rack: <?php echo $r['lid'];?>
                
            </td></tr>
        
    		
    	</table>


    </p>
    <a href="viewdetails.php?id=<?php echo $r['mid'];?>" class="btn btn-primary">View Details</a>
  </div>
</div>
</div>
<?php
}

?>
<?php require 'footer.php';?>
</body>
</html>