<!DOCTYPE html>
<html lang="en">
<?php
require_once '../config/conexion.php';

include 'head.php';
?>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
  <?php
    include 'nav.php';
    ?>

    <div class="container mt-5">
      <div class="page-banner">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-md-6">
            <nav aria-label="Breadcrumb">
              <ul class="breadcrumb justify-content-center py-0 bg-transparent">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">SignIn</li>
              </ul>
            </nav>
            <h1 class="text-center">Sign In</h1>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main>
    <div class="page-section">
      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-lg-6 py-3">
            <div class="subhead">You don't have an account? <a href="signup.php">Register</a> </div>
            <h2 class="title-section">Sign In into your account</h2>
            <div class="divider"></div>
            
            <form action="../config/auth.php" method="POST">
              <div class="py-2">
                <input type="text" class="form-control" placeholder="Username" name="user">
              </div>
              <div class="py-2">
                <input type="password" class="form-control" placeholder="Password" name="pass">
              </div>
              <button type="submit" class="btn btn-primary rounded-pill mt-4" name="confirm">Login</button>
            </form>
          
			
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
  </main>

  <?php
  include 'footer.php';
  ?>

  <?php
  include 'js.php';
  ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>


  <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script> -->


</body>
</html>