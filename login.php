<?php require('common/head.php');?>
        <!-- Navigation-->
        <?php require('common/navbar.php');?>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('public/assets/img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Login</h1>
                            <span class="subheading">A Blog Theme by Start Bootstrap</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
       <section class="h-100 h-custom" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Sample photo">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Login Info</h3>

            <form class="px-md-2" method="post">
              <div class="form-outline mb-4">
                <label class="form-label" for="form3Example1q">Email</label>
                <input type="text" name="email" id="form3Example1q" class="form-control" />
              </div>
            <div class="form-outline mb-4">
                <label class="form-label" for="form3Example1q">Password</label>
                <input type="text" name="password" id="form3Example1q" class="form-control" />
              </div>

              

              

              <button type="submit" name="submit" class="btn btn-success btn-lg mb-1">Login</button>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
       <?php require('common/footer.php');?> 
<?php
include('db/connection.php');
if (isset($_POST['submit'])) {

    $email=$_POST['email'];   
    $password=$_POST['password'];

    $query="SELECT * FROM register where email='$email' and password='$password'";
    $sql=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($sql);
    if (is_array($row)) {
      //echo "<script> alert('login successfull')</script>";
      //header('location:show.php');
      $_SESSION["id"]=$row['id'];
      $_SESSION["name"]=$row['name'];
      //print_r($_SESSION); exit();
      //echo $_SESSION["id"]; exit();
      
      //header('location:home.php');
       echo "<script>window.location.href = 'http://localhost/php_new_class/project/post.php';</script>";
      
    }
    else{
      echo "<script> alert('login failed')</script>";
    }
  
  
}


?>