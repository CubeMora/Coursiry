<?php
				include "../config/connection.php";
				if(isset($_POST["add"])){
          $email = $_POST["email"];
					$realname = $_POST["realname"];
          $user = $_POST["user"];
					$pass = $_POST["pass"];
          $age = $_POST["age"];
					

					$result = $mysql->prepare("INSERT INTO users (email, realname, username, pass, age) VALUES (?,?,?,?,?)");
					$result->bind_param("ssssi",$email,$realname,$user,$pass,$age);
					$result->execute();
					header("Location:signin.php");

					if(isset($_POST["delete_record"])){
						$id = $_POST["id"];
						$result = $mysql->prepare("DELETE FROM users WHERE id = ?");
						$result->bind_param("i",$id);
						$result->execute();

						$result = $mysql->prepare("SELECT * FROM users");
						$rows = $result->fetche_all(MYSQLI_ASSOC);
					
					}

					}
				
		?>

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
                <li class="breadcrumb-item active">SignUp</li>
              </ul>
            </nav>
            <h1 class="text-center">Sign Up</h1>
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
            <div class="subhead">Already have an account? <a href="signin.php">Login</a> </div>
            <h2 class="title-section">Sign Up into your account</h2>
            <div class="divider"></div>
            
            <form method="POST">
              <div class="py-2">
              <input type="text" class="form-control" placeholder="Email" name="email">
                
              </div>
              <div class="py-2">
              <input type="text" class="form-control" placeholder="Real Name" name="realname">
              </div>
              <div class="py-2">
              <input type="text" class="form-control" placeholder="Username" name="user">
                
              </div>
              <div class="py-2">
              <input type="text" class="form-control" placeholder="Password" name="pass">
              </div>
              <div class="py-2">
              <input type="text" class="form-control" placeholder="Age" name="age">
              </div>

              <button type="submit" class="btn btn-primary rounded-pill mt-4" name="add">Register</button>
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