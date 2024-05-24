
<html>
<head>
    <title></title>
    <?php require 'head.php';?>
</head>
<body>

<?php require 'menu.php';?>
<?php
if(isset($_POST["btnaddcart"])){
extract($_POST);

$q=mysqli_query($con,"select * from tblmedicine where mid=".$_GET['id']);
$r=mysqli_fetch_array($q);
$oldstock=$r['mstock'];
$newstock=$oldstock-$txtqty;
if($r['mexp']>date('Y-m-d')){
if($newstock>=0){
    mysqli_query($con,"update tblmedicine set mstock='$newstock' where mid=".$_GET['id']);
    $year=date('Y');
    $month=date('m');
mysqli_query($con,"insert into tblcart(mid,qty,aid,status)values('".$_GET["id"]."','$txtqty','".$_SESSION['aid']."','0')");
}
else{
    ?>
    <script type="text/javascript">
        alert("OUT OF STOCK");
    </script>
    <?php
}
}
else{
    ?>
    <script type="text/javascript">
        alert('Expired');
    </script>
    <?php
}
}
?>

<div class="row">
    <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-12">
      <img
        src="img/p8.jpg"
        alt="MEDICINE"
        class="img-fluid rounded-start"
      />
    </div>
    <div class="col-md-4"></div>
    <div class="col-md-12">
      <div class="card-body">
        <h1 class="card-title">DETAILS OF MEDICINE.</h1>
        <p class="card-text">
            <h5>
                1.Here Enter The Quantity You Want To Purchase, Becouse It's Necessory & Click On "Add To Cart" Button!!!
                <br>
                2.Then Go To The "View Cart" From The Options..>>
            </h5>
        </p>
        </div>
    </div>
  </div>
</div>
    

<?php
$q=mysqli_query($con,"select * from tblmedicine where mid=".$_GET['id']);
while ($r=mysqli_fetch_array($q)) {
    ?>

    <div class="col-md-3">
    <div class="card">
  <img src="<?php echo $r['mimage'];?>" class="card-img-top" alt="..."/>
  <div class="card-body">
    <h5 class="card-title"><?php
    echo $r["mname"];?></h5>
    <p class="card-text">
        <form method="post">
        <table class="table">
            <tR>
                <td>
                    ₹<strike><?php echo $r['mprice'];?></strike>/-
                </td>
            </tR>
            <tR>
                <td>
                    ₹<?php echo $r['mdprice'];?>/-
                </td>
            </tR>
            <tR>
                <td>
                    <?php echo $r['mexp'];?>
                </td>
            </tR>
            <Tr>
                </tr>
            
                <td>
                    <input type="number" name="txtqty" placeholder="Enter Quantity" required>
                </td>
            </Tr>
            <tr>
                <Td>
                    <input type="submit" name="btnaddcart" value="Add To Cart" class="btn btn-success">
                </Td>
            </tr>
        </table>
    </form>


    </p>
    
  </div>
</div>
</div>
</div>
</div>
<?php
}

?>
<?php require 'footer.php';?>
</body>
</html>