<nav class="navbar navbar-expand-lg navbar-light navbar-float">
      <div class="container">
        <a href="index.php" class="navbar-brand">Digi<span class="text-primary">Gram.</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-lg-4 pt-3 pt-lg-0">
            <li class="nav-item active">
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="about.php" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="services.php" class="nav-link">Services</a>
            </li>
            <li class="nav-item">
              <a href="blog.php" class="nav-link">News</a>
            </li>
            <li class="nav-item">
              <a href="contact.php" class="nav-link">Contact</a>
            </li>
          </ul>

          <div class="ml-auto">
          <?php
						session_start();
						if (isset($_SESSION["auth"])) {
							echo("
							<li><a class='btn' href='../config/destroy.php'>LOGOUT</a></li>
							
							");
						}else {
							echo("
							<li><a class='btn' href='../views/signin.php'>SIGN IN / SIGN UP</a></li>
							");
						}
						?>
            
          </div>
        </div>
      </div>
    </nav>