<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.html">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="home.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.php">About</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="post.php">Post</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact.php">Contact</a></li>
                         <li class="nav-item">
        <?php
       // print_r($_)+
        if (isset($_SESSION['id'])) {
          $name=explode(' ', $_SESSION['name']);
          echo "<span style='color:red;'>Welcome:&nbsp</span>".strtoupper($name[0]);
        }
        else{
        ?>

        <a href="register.php" class="nav-link px-lg-3 py-3 py-lg-4">Sign Up</a>
      <?php } ?>
      </li>

      <li class="nav-item">
        <?php
        if (isset($_SESSION['id'])) {?>
          
        
      
        <a href="logout.php" class="nav-link px-lg-3 py-3 py-lg-4">Logout</a>
        <?php } else{?>
      </li>

      <li class="nav-item"><a href="login.php" class="nav-link px-lg-3 py-3 py-lg-4"> Login</a>
        <?php } ?>
      </li>
                    </ul>
                </div>
            </div>
        </nav>