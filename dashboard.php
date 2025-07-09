<?php 
include('master_page/dashboard_header.php');
include('master_page/dashboard_sidebar.php');
?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Dashboard</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <?php 
                                    $result = mysqli_query($config,"SELECT COUNT(teachers_image) AS teach_img FROM teachers_directory");
                                    while ($row = mysqli_fetch_assoc($result)) { ?>
                                <h4 class="card-title text-muted">Total Employees</h4>
                                <h2 class="mt-3 mb-2"><i class="mdi mdi-arrow-down text-danger me-2"></i><b><?php echo $row['teach_img']; ?></b>
                                </h2>
                            </div>
                        </div>
                    </div><?php } ?>

                    <?php 
                        $result = mysqli_query($config, "SELECT COUNT(*) AS total FROM teachers_directory WHERE teacher_name IS NOT NULL AND teacher_name != ''");
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-center">
                            <div class="card-body p-t-10">
                                <h4 class="card-title text-muted mb-0">ID Card Edited Teachers</h4>
                                <h2 class="mt-3 mb-2"><i class="mdi mdi-arrow-up text-success me-2"></i><b><?php echo $row['total']; ?></b></h2>
                            </div>
                        </div>
                    </div><?php } ?>

                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <?php 
                                    $result = mysqli_query($config,"SELECT COUNT(students_image) AS stud_img FROM students_directory");
                                    while ($row = mysqli_fetch_assoc($result)) { ?>
                                <h4 class="card-title text-muted">Total Students</h4>
                                <h2 class="mt-3 mb-2"><i class="mdi mdi-arrow-down text-danger me-2"></i><b><?php echo $row['stud_img']; ?></b>
                                </h2>
                            </div>
                        </div>
                    </div><?php } ?>

                    <?php 
                        $result = mysqli_query($config, "SELECT COUNT(*) AS total FROM students_directory WHERE student_name IS NOT NULL AND student_name != ''");
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-center">
                            <div class="card-body p-t-10">
                                <h4 class="card-title text-muted mb-0">ID Edited student</h4>
                                <h2 class="mt-3 mb-2"><i class="mdi mdi-arrow-up text-success me-2"></i><b><?php echo $row['total']; ?></b></h2>
                            </div>
                        </div>
                    </div><?php } ?>
                    

                    <h4 class="mb-sm-0">ID Card Sample</h4>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-center">
                            <img src="images/IDSample/ID_Front.jpg" class="img-fluid" alt="Responsive image">
                        </div>
                    </div>

					<div class="col-sm-6 col-lg-3">
                        <div class="card text-center">
                            <img src="images/IDSample/ID_Back.jpg" class="img-fluid" alt="Responsive image">
                        </div>
                    </div>

                    <div class="col-sm-12 col-lg-6">
                        <div class="card text-center">
                            <img src="images/IDSample/SIMSBTH_Stripe_2.png" class="img-fluid" alt="Responsive image">
                        </div>
                    </div>

                    

                    
                </div>
                <!-- end row -->

                

               
                <!-- end row -->
            </div>

        </div>
        <!-- End Page-content -->





<?php 
include('master_page/dashboard_footer.php');
?>