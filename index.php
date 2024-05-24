
<html>
<head>
  <title></title>
  <?php require 'head.php';?>
</head>
<body>
<?php require 'menu.php';?>
<!-- Carousel wrapper -->
<div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
  <!-- Indicators -->
  <div class="carousel-indicators">
    <button
      type="button"
      data-mdb-target="#carouselBasicExample"
      data-mdb-slide-to="0"
      class="active"
      aria-current="true"
      aria-label="Slide 1"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselBasicExample"
      data-mdb-slide-to="1"
      aria-label="Slide 2"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselBasicExample"
      data-mdb-slide-to="2"
      aria-label="Slide 3"
    ></button>
  </div>
  

  <!-- Inner -->
  <div class="carousel-inner">
    <!-- Single item --> 
    <div class="carousel-item active">
      <img src="img/p4.jpg" class="d-block w-100 " alt="..." height="700px" width="700px" />
      <div class="carousel-caption d-none d-md-block">
        <h1 class="text-black"><b><i>    MEDICAL MART
          <i class="far fa-grin-beam"></i>
          <br><br>
          <br>
        </b></i></h1>
        <h2 class="text-black">All you need is right here...</h2>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img src="img/p10.jpg" class="d-block w-100" alt="Canyon at Nigh" height="700px" width="700px" />
      <div class="carousel-caption d-none d-md-block">
        <h1 class="text-white"> <i class="fab fa-gratipay"></i>  Making You More Healthy <br><br><br><br><br><br><br><br><br><br><br><br></h1>
        <h1 class="text-white">Feel Good With Us...!!!</h1>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img src="img/p6.jpg" class="d-block w-100" alt="Cliff Above a Stormy Sea" height="700px" width="700px" />
      <div class="carousel-caption d-none d-md-block">
        <h1 class="text-black">More Than Just A Shop... <i class="fas fa-comment-medical"></i><br><br><br><br><br><br></h5>
        <h1 class="text-black">Your Health Is Our Concern.</h1>
      </div>
    </div>
  </div>
  <!-- Inner -->

  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Carousel wrapper -->
<?php require 'footer.php';?>
</body>
</html>