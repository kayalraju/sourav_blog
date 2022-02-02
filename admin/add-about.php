<!DOCTYPE html>
<html lang="en">

<?php include('common/head.php');?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       <?php include('common/sidebar.php');?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                       
                        <a href="" class="btn btn-primary">Logout</a>
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard | About page</h1>
                        
                    </div>

                    <!-- Content Row -->
                   

                       

					<form action="" method="post" enctype="multipart/form-data">
						<div class="form-group">
						<label for="comment">About Contant:</label>
						<textarea class="form-control" rows="5" id="comment"
						name="comment"></textarea>
						</div>
						<div class="form-group">
						<label for="pwd">image:</label>
						<input type="file" class="form-control" id="pwd" name="image">
						</div>
						
						<button type="submit" class="btn btn-primary">Add About</button>
					</form>






                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           <?php include('common/footer.php');?>