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
                    <div class="row">

                       <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">About data</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>About Contant</th>
                                            <th>image</th>
                                            <th colspan="3">Action</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <tr>
                                        	<td>1</td>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td><a href="add-about.php" class=" btn btn-success">Add</a></td>
                                            <td><a href="" class=" btn btn-primary">Update</a></td>
                                            <td><a href="" class="btn btn-danger">Update</a></td>
                                        </tr>
                                        
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                       
                        
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           <?php include('common/footer.php');?>