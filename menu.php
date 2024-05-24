<nav class="navbar navbar-expand-lg navbar-dark bg-black">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MEDICAL MART..<i class="fas fa-cart-plus"></i></a>
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarText"
      aria-controls="navbarText"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
          <!-- Left links -->
  </div>

    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"><span class="glyphicon glyphicon-home"></span><i class="fas fa-home"></i> HOME</a>
        </li>

        <?php
        if($_SESSION['aid']==null){
          ?>
           <li class="nav-item">
          <a class="nav-link" href="register.php"><i class="fas fa-registered"></i>Registration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt"></i>LOGIN</a>
        </li>
          <?php
        }  
       else{
        ?>
<li class="nav-item">
          <a class="nav-link" href="welcome.php"><i class="fas fa-capsules"></i>MEDICINES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="viewcart.php"><i class="fas fa-cart-plus"></i>ViewCart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="addproduct.php">Add <i class="fas fa-plus"></i>Medicines</a>
          
          <li class="nav-item">
          <a class="nav-link" href="addlocation.php">Add <i class="fas fa-plus"></i> Location</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="addcategory.php">Add <i class="fas fa-plus"></i> Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="myorder.php">My Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="addcustomer.php">Customer Info <i class="fas fa-info-circle"></i></a>
        </li>
                <li class="nav-item">
          <a class="nav-link" href="addcompany.php">Company Info <i class="fas fa-info-circle"></i></a>
        </li>
        
         <li class="nav-item">
          <a class="nav-link" href="medicinereport.php">Medicine Report</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="custrep.php">Customer Report <i class="far fa-flag"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="comprepo.php">Company Report <i class="far fa-flag"></i></a>
        </li>
        </li>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i>LOGOUT</a>
        </li>
        <?php
       }
       ?>
         
      </ul>
      
    </div>
  </div>
</nav>