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
                            <h4 class="mb-sm-0">Add Student</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                    <li class="breadcrumb-item active">Add Student</li>
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
                                        <a href="enroll_student.php" class="btn btn-info">Update/Delete</a>
                                    </div>
                                    <div class="title mt-4">Upload Student Image</div>
                                    <form method="POST" enctype="multipart/form-data">

                                        <div class="mb-3 mt-4">
                                            <input type="file" class="form-control" name="studentPhoto" id="studentPhoto">
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

  $targetfolder = 'images/students/';
  $orgfilename = preg_replace('/\s+/', '_', uniqid()."_".$_FILES['studentPhoto']['name']);
  $tmpfilename = $_FILES['studentPhoto']['tmp_name'];
  $imageaddress = $base_url.$targetfolder.$orgfilename;

$StudName = $_POST['student_name'];
$RegNo = $_POST['register_number'];
$StudID = $_POST['studentID'];
$DOB = $_POST['date_of_birth'];
$Gender = $_POST['gender'];
$BloodGroup = $_POST['blood_group'];
$Class = $_POST['class'];
$FarherGuardian = $_POST['father_guardian_name'];
$mother = $_POST['mother_name'];
$Address = $_POST['address'];
$EmerContact = $_POST['emergency_contact'];

  if(isset($_POST['uploadPhoto'])){
    if(!empty($_FILES['studentPhoto']['name'])) 
    {
      move_uploaded_file($tmpfilename, $targetfolder.$orgfilename);
      
      mysqli_query($config,"INSERT INTO students_directory(student_name,register_number,studentID,date_of_birth,gender,blood_group,class,father_guardian_name,mother_name, address, emergency_contact, students_image)VALUES('$StudName', '$RegNo', '$StudID', '$DOB', '$Gender', '$BloodGroup', '$Class', '$FarherGuardian','$mother', '$Address', '$EmerContact', '$imageaddress')");

      echo "<script>alert('Image uploaded Successfully');window.location.href='enroll_student.php';</script>";
    }
    else
    {
      echo "<script>alert('Image Not Uploaded');window.location.href='add_student.php';</script>";
    } 
  }

// $targetFolder = "images/students/";
// $orginalFileName = preg_replace('/\s+/','_',uniqid()."_".$_FILES['studentPhoto']['name']);
// $tmpFileName = $_FILES['studentPhoto']['tmp_name'];
// $completeAddress = $base_url.$targetFolder.$orginalFileName;

// $dummyData = 'To be Updated';
// if(isset($_POST['uploadPhoto']))
// {
//     if(!empty($_FILES['studentPhoto']['name']))
//     {
//         move_uploaded_file($tmpFileName,$targetFolder.$orginalFileName);
//         mysqli_query($config,"INSERT INTO students_directory(student_name,register_number,studentID,gender,blood_group,class,father_guardian_name,address,emergency_contact,students_image)VALUES('$dummyData','$dummyData','$dummyData','$dummyData','$dummyData','$dummyData','$dummyData','$dummyData','$dummyData','$completeAddress')");

//         echo "<script>alert('Image Uploaded Successfully');window.location.href='enroll_student.php';</script>";
//     }
// }
?>