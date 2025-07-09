<?php 
include('master_page/dashboard_header.php');
include('master_page/dashboard_sidebar.php');
include('config.php');
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
                            <h4 class="mb-sm-0">Enroll Employee</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                    <li class="breadcrumb-item active">Enroll Employee</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="container mt-4" style="background: white;">
      <div class="d-flex justify-content-start mt-4 mb-4">
            <a href="add_employee.php" class="btn btn-lg btn-outline-success">
              <i class="ri-arrow-left-fill"></i>
            </a>
          </div>
      <table id="example" class="display" style="width:100%; background: white;">
        <thead>
            <tr>
                <th>Sl. No</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $fetchTeachers = mysqli_query($config,"SELECT * FROM teachers_directory");
            while ($row = mysqli_fetch_assoc($fetchTeachers)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><img src="<?php echo $row['teachers_image']; ?>" class="rounded float-start" alt="..." height="140"></td>
                <td><a href="edit_employee.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a></td>
                <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row['id']; ?>">Delete</button></td>                
            </tr>
             <div class="modal fade" id="exampleModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLabel">Are you sure to Delete Image <?php echo $row['id']; ?> ?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Image once Delete will not be recovered. Proceed only if you are sure to Delete.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="delete_employee.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Yes, Delete</a>
      </div>
    </div>
  </div>
</div>
        <?php } ?>
           
        </tbody>
        <tfoot>
             <tr>
                <th>Sl. No</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </tfoot>
    </table>
    </div>
                                    
                </div>
                <!-- end row -->

                

               
                <!-- end row -->
            </div>

        </div>
        <!-- End Page-content -->

<script type="text/javascript">
  new DataTable('#example');
</script>



<?php 
include('master_page/dashboard_footer.php');
?>