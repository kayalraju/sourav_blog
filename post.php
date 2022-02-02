<?php require('common/head.php');?>
        <!-- Navigation-->
        <?php require('common/navbar.php');?>

            <?php
            if (!isset($_SESSION['id'])) {
            header('location:login.php');
            }
            ?>

        <!-- Page Header-->
        <header class="masthead" style="background-image: url('public/assets/img/post-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            
                            <h2 class="subheading">Problems look mighty small from 150 miles up</h2>
                            <span class="meta">
                                Posted by
                                <a href="#!">Start Bootstrap</a>
                                on August 24, 2021
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                  <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <form action="/addpost" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Post Title</label><br>
                      <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter post title">
                    
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Post Subtitle</label><br>
                      <input type="text" class="form-control" name="subtitle" id="exampleInputPassword1" placeholder="enter post sub title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Enter Post</label><br>
                    <textarea name="editor1"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Post image:</label><br>
                    <input type="file" class="form-control" name="image" id="exampleInputPassword1" placeholder="enter post sub title">
                  </div>
                  <p>
                    <button type="submit" class="btn btn-primary">Post</button>
                  </form>
            </div>
        </div>
    </article>

                </div>
            </div>
        </article>
       <?php require('common/footer.php');?> 

<script>
    CKEDITOR.replace( 'editor1' );
</script>

