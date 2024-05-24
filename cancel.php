<?php
require 'head.php';
mysqli_query($con,"delete from tblcart where cartid=".$_GET["cartid"]);
header("location:viewcart.php");
?>