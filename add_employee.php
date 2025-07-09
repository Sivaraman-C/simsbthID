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
                            <h4 class="mb-sm-0">Add Employee</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                    <li class="breadcrumb-item active">Add Employee</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="container mt-4">
                        <div class="forms">
                            <div class="form-content">
                                <div class="edit-form">
                                    <div class="d-flex justify-content-start mt-4">
                                        <a href="enroll_employee.php" class="btn btn-info">Update/Delete</a>
                                    </div>
                                    <div class="title mt-4">Upload Employee Image</div>
                                    <form method="POST" enctype="multipart/form-data">
                                        <div class="mb-3 mt-4">
                                            <input type="file" class="form-control" name="teachersPhoto" id="teachersPhoto">
                                        </div>
                                        <div class="d-flex justify-content-center mt-4">
                                            <button type="submit" class="btn btn-primary" name="uploadPhoto">Upload</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
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

  $targetfolder = 'images/teachers/';
  $orgfilename = preg_replace('/\s+/', '_', uniqid()."_".$_FILES['teachersPhoto']['name']);
  $tmpfilename = $_FILES['teachersPhoto']['tmp_name'];
  $imgaddress = $base_url.$targetfolder.$orgfilename;

$TeacherName = $_POST['teacher_name'];
$DOB = $_POST['date_of_birth'];
$Gender = $_POST['gender'];
$BloodGroup = $_POST['blood_group'];
$EmployeeID = $_POST['employeeID'];
$Designation = $_POST['designation'];
$FarherSpouse = $_POST['father_spouse_name'];
$Address = $_POST['address'];
$Contact = $_POST['contact_no'];
$Email = $_POST['email'];
$EmerContactPerson = $_POST['emer_contact_person'];
$Relation = $_POST['relation'];
$EmerContact = $_POST['emergency_contact'];

  if(isset($_POST['uploadPhoto'])){
    if(!empty($_FILES['teachersPhoto']['name'])) 
    {
      move_uploaded_file($tmpfilename, $targetfolder.$orgfilename);
      
      mysqli_query($config,"INSERT INTO teachers_directory(teacher_name,date_of_birth,gender,blood_group,employeeID,designation,father_spouse_name, address, contact_no, email, emer_contact_person, relation, emergency_contact, teachers_image)VALUES('$TeacherName', '$DOB','$Gender','$BloodGroup','$EmployeeID','$Designation','$FarherSpouse','$Address','$Contact','$Email','$EmerContactPerson','$Relation','$EmerContact','$imgaddress')");

      echo "<script>alert('Image uploaded Successfully');window.location.href='enroll_employee.php';</script>";
    }
    else
    {
      echo "<script>alert('Image Not Uploaded');window.location.href='add_employee.php';</script>";
    } 
  }

?>