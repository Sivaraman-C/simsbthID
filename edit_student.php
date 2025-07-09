<?php 
include('master_page/dashboard_header.php');
include('master_page/dashboard_sidebar.php');
include('config.php');
?>
<style>
  
.container {
  position: relative;
  max-width: 850px;
  width: 100%;
  background: #fff;
  padding: 40px 30px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  perspective: 2700px;
}

.container .cover {
  position: absolute;
  top: 0;
  left: 50%;
  height: 100%;
  width: 50%;
  z-index: 98;
  transition: all 1s ease;
  transform-origin: left;
  transform-style: preserve-3d;
  backface-visibility: hidden;
}

.container #flip:checked ~ .cover {
  transform: rotateY(-180deg);
}

.container #flip:checked ~ .forms .login-form {
  pointer-events: none;
}

.container .cover .front,
.container .cover .back {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
}

.cover .back {
  transform: rotateY(180deg);
}

.container .cover img {
  position: absolute;
  height: 100%;
  width: 100%;
  object-fit: cover;
  z-index: 10;
}

.container .cover .text {
  position: absolute;
  z-index: 10;
  height: 100%;
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.container .cover .text::before {
  content: '';
  position: absolute;
  height: 100%;
  width: 100%;
  opacity: 0.5;
  background: #7d2ae8;
}

.cover .text .text-1,
.cover .text .text-2 {
  z-index: 20;
  font-size: 26px;
  font-weight: 600;
  color: #fff;
  text-align: center;
}

.cover .text .text-2 {
  font-size: 15px;
  font-weight: 500;
}

.container .forms {
  height: 100%;
  width: 100%;
  background: #fff;
}

.container .form-content {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.form-content .login-form,
.form-content .signup-form {
  width: calc(100% / 2 - 25px);
}
.edit-form{
  width: 100%;
}

.forms .form-content .title {
  position: relative;
  font-size: 24px;
  font-weight: 500;
  color: #333;
}

.forms .form-content .title:before {
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 25px;
  background: #7d2ae8;
}

.forms .signup-form .title:before {
  width: 20px;
}

.forms .form-content .input-boxes {
  margin-top: 30px;
}

.forms .form-content .input-box {
  display: flex;
  align-items: center;
  height: 50px;
  width: 100%;
  margin: 10px 0;
  position: relative;
}

.form-content .input-box input {
  height: 100%;
  width: 100%;
  outline: none;
  border: none;
  padding: 0 30px;
  font-size: 16px;
  font-weight: 500;
  border-bottom: 2px solid rgba(0, 0, 0, 0.2);
  transition: all 0.3s ease;
}

.upload input {
  height: 100%;
  width: 100%;
  outline: none;
  border: none;
  padding: 0 30px;
  font-size: 16px;
  font-weight: 500;
  border-bottom: 2px;
  transition: all 0.3s ease;
}

.form-content .input-box input:focus,
.form-content .input-box input:valid {
  border-color: #7d2ae8;
}

.form-content .input-box i {
  position: absolute;
  color: #7d2ae8;
  font-size: 17px;
}

.forms .form-content .text {
  font-size: 14px;
  font-weight: 500;
  color: #333;
}

.forms .form-content .text a {
  text-decoration: none;
}

.forms .form-content .text a:hover {
  text-decoration: underline;
}

.forms .form-content .button {
  color: #fff;
  margin-top: 40px;
}

.forms .form-content .button input {
  color: #fff;
  background: #7d2ae8;
  border-radius: 6px;
  padding: 0;
  cursor: pointer;
  transition: all 0.4s ease;
}

.forms .form-content .button input:hover {
  background: #5b13b9;
}

.forms .form-content label {
  color: #5b13b9;
  cursor: pointer;
}

.forms .form-content label:hover {
  text-decoration: underline;
}

.forms .form-content .login-text,
.forms .form-content .sign-up-text {
  text-align: center;
  margin-top: 25px;
}

.container #flip {
  display: none;
}

@media (max-width: 730px) {
  .container .cover {
    display: none;
  }

  .form-content .login-form,
  .form-content .signup-form {
    width: 100%;
  }

  .form-content .signup-form {
    display: none;
  }

  .container #flip:checked ~ .forms .signup-form {
    display: block;
  }

  .container #flip:checked ~ .forms .login-form {
    display: none;
  }
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style>
<style type="text/css">
      input[type=number]::-webkit-inner-spin-button, 
    input[type=number]::-webkit-outer-spin-button { 
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        margin: 0; 
    }
    </style>
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
                            <h4 class="mb-sm-0">Edit Student Details</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                    <li class="breadcrumb-item active">Edit< Student Details</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="container">
    <div class="d-flex justify-content-start">
            <a href="enroll_student.php" class="btn btn-lg btn-outline-success"><i class="ri-arrow-left-fill"></i></a>
      </div>
    <div class="forms mt-4">
        <div class="form-content">
        <div class="edit-form">
          <?php
          $selectedUID = $_GET['id'];
          $fetchSelectedID = mysqli_query($config,"SELECT * FROM students_directory WHERE id= '$selectedUID'");
          while ($row = mysqli_fetch_assoc($fetchSelectedID)) {?>
           
        <form method="POST" >

          <div style="text-align: center;">
               <img src="<?php echo $row['students_image']; ?>" width="150">
              </div>
            <div class="input-boxes">
              <div class="input-box">
                <i class="ri-user-fill"></i>
                <input type="text" id="student_name" name="student_name" placeholder="Enter student name" oninput="changetoTitle()" value="<?php echo $row['student_name']; ?>" required>
              </div>
              <div class="input-box">
                <i class="ri-registered-line"></i>
                <input type="text" id="register_number" value="<?php echo $row['register_number']; ?>" name="register_number" placeholder="Enter register number" required>
              </div>
              <div class="input-box">
                <i class="ri-user-4-fill"></i>
                <input type="text" id="studentID" value="<?php echo $row['studentID']; ?>" name="studentID" placeholder="Enter the studentID" required>
              </div>
              <div class="input-box">
                <i class="ri-calendar-event-fill"></i>
                <input type="date" id="date_of_birth" value="<?php echo $row['date_of_birth']; ?>" name="date_of_birth" placeholder="Enter date of birth" required>
              </div>
              <div class="input-box">
                <i class="ri-group-2-fill"></i>
                <input type="text" id="gender" value="<?php echo $row['gender']; ?>" name="gender" placeholder="Enter gender" required>
              </div>
              <div class="input-box">
                <i class="ri-contrast-drop-2-fill"></i>
                <input type="text" id="blood_group" value="<?php echo $row['blood_group']; ?>" name="blood_group" placeholder="Enter bloodgroup" required>
              </div>
              <div class="input-box">
                <i class="ri-account-pin-circle-fill"></i>
                <input type="text" id="class" value="<?php echo $row['class']; ?>" name="class" placeholder="Enter class" required>
              </div>
              <div class="input-box">
                <i class="ri-user-heart-fill"></i>
                <input type="text" id="father_guardian_name" value="<?php echo $row['father_guardian_name']; ?>" name="father_guardian_name" placeholder="Enter father/guardian name" required>
              </div>
              <div class="input-box">
                <i class="ri-user-heart-fill"></i>
                <input type="text" id="mother_name" value="<?php echo $row['mother_name']; ?>" name="mother_name" placeholder="Enter mother name" required>
              </div>
              <div class="input-box">
                <i class="ri-map-pin-user-fill"></i>
                <input type="text" id="address" value="<?php echo $row['address']; ?>" name="address" placeholder="Enter address" required>
              </div>
               <div class="input-box">
                <i class="ri-contacts-fill"></i>
                <input type="number" id="emergency_contact" name="emergency_contact" value="<?php echo $row['emergency_contact']; ?>" placeholder="Enter contact" min="1" onkeypress="if(this.value.length===10) return false" required>
              </div>
              
              <div class="button input-box">
                <input type="submit" name="update" value="Update">
              </div>
            </div>
      </form>
    <?php } ?>
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
?>

<?php 

$id = $_GET['id'];
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

if(isset($_POST['update'])){
    
    $query = "UPDATE students_directory SET student_name = '$StudName',register_number = '$RegNo', studentID = '$StudID',date_of_birth = '$DOB', gender = '$Gender', blood_group = '$BloodGroup', class = '$Class' ,father_guardian_name = '$FarherGuardian',mother_name = '$mother',address = '$Address', emergency_contact = '$EmerContact' WHERE id='$id'";
    $result = mysqli_query($config,$query);

    if ($result) {
        echo "<script>alert('Updated Successfully');window.location.href='enroll_student.php'</script>";
    }else{
        echo "<script>alert('Updation Failed');window.location.href='edit_student.php'</script>";
    }
}

?>