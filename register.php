<?php include('common/head.php');?>
        <!-- Navigation-->
        <?php include('common/navbar.php');?>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('public/assets/img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Register</h1>
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
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Info</h3>

            <form class="px-md-2" method="post">

              <div class="form-outline mb-4">
                <label class="form-label" for="form3Example1q">Name</label>
                <input type="text" name="name" id="form3Example1q" class="form-control" />
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="form3Example1q">Email</label>
                <input type="text" name="email" id="form3Example1q" class="form-control" />
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="form3Example1q">Phone</label>
                <input type="text" name="phone" id="form3Example1q" class="form-control" />
              </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form3Example1q">Password</label>
                <input type="text" name="password" id="form3Example1q" class="form-control" />
              </div>

              <div class="form-outline mb-4">
                <label class="form-label" for="form3Example1q">Confirm Password</label>
                <input type="text" name="c_password" id="form3Example1q" class="form-control" />
              </div>

              

              <button type="submit" name="submit" class="btn btn-success btn-lg mb-1">Register</button>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
       <?php include('common/footer.php');?> 
<?php
include('db/connection.php');
if (isset($_POST['submit'])) {
  if($_POST['password']==$_POST['c_password']){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];

    $query="insert into  register (name, email, phone, password) values('$name', '$email', '$phone', '$password')";
    $sql=mysqli_query($conn,$query);

    //$row=mysqli_fetch_array($sql)
    if ($sql) {
      //echo "<script> alert('success')</script>";
      $test="SELECT * FROM  register where email='$email' and password='$password'";
      $r=mysqli_query($conn,$test);
      $a=mysqli_fetch_array($r);
      $_SESSION['id']=$a['id'];
      $_SESSION['name']=$a['name'];
      //header('location:home.php');
      echo "<script>window.location.href = 'http://localhost/php_new_class/project/post.php';</script>";
    }
    else{
      echo "<script> alert('failed')</script>";
    }
  }
  
}


?>