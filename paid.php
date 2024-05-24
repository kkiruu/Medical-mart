<html>
<head>
	<title></title>
		<?php require 'head.php';?>
	
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>
		<?php require 'menu.php';?>
		<center>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
	<button class="btn btn-success" onclick="popUp()" id="pop" ><h1><B><i> CLICK ME..........
		<i class="far fa-grin-wink"></i>
	<br> <br>TO MAKE PAYMENT CONFIRM...!!!</B></i></h1></button>
		</center>
	<script>
		function popUp(){
			swal({
  	 title: "Good job!",
  	 text: "Payment Successfull",
 	 icon: "success",
 	 button: "CONGRATUTIONS",
	});
		}
	</script>
	<br>
			<br>
			<br>
			<br>
			<br>
			<br>


<?php require 'footer.php';?>
</body>
</html>