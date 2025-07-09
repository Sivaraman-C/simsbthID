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
                            <h4 class="mb-sm-0">Edit Employee Details</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                    <li class="breadcrumb-item active">Edit< Employee Details</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="container">
    <div class="d-flex justify-content-start">
            <a href="enroll_employee.php" class="btn btn-lg btn-outline-success"><i class="ri-arrow-left-fill"></i></a>
      </div>
    <div class="forms mt-4">
        <div class="form-content">
        <div class="edit-form">
          <?php
          $selectedUID = $_GET['id'];
          $fetchSelectedID = mysqli_query($config,"SELECT * FROM teachers_directory WHERE id= '$selectedUID'");
          while ($row = mysqli_fetch_assoc($fetchSelectedID)) {?>
           
        <form method="POST" >

          <div style="text-align: center;">
               <img src="<?php echo $row['teachers_image']; ?>" width="150">
              </div>
            <div class="input-boxes">
              <div class="input-box">
                <i class="ri-user-fill"></i>
                <input type="text" id="teacher_name" name="teacher_name" placeholder="Enter employee name" oninput="changetoTitle()" value="<?php echo $row['teacher_name']; ?>" required>
              </div>
              <div class="input-box">
                <i class="ri-calendar-event-fill"></i>
                <input type="date" id="date_of_birth" value="<?php echo $row['date_of_birth']; ?>" name="date_of_birth" placeholder="Enter the Dateofbirth" required>
              </div>
              <div class="input-box">
                <i class="ri-group-2-fill"></i>
                <input type="text" id="gender" value="<?php echo $row['gender']; ?>" name="gender" placeholder="Enter the gender" required>
              </div>
              <div class="input-box">
                <i class="ri-contrast-drop-2-fill"></i>
                <input type="text" id="blood_group" value="<?php echo $row['blood_group']; ?>" name="blood_group" placeholder="Enter the bloodgroup" required>
              </div>
              <div class="input-box">
                <i class="ri-user-4-fill"></i>
                <input type="text" id="employeeID" value="<?php echo $row['employeeID']; ?>" name="employeeID" placeholder="Enter the employeeID" required>
              </div>
              <div class="input-box">
                <i class="ri-account-pin-circle-fill"></i>
                <input type="text" id="designation" value="<?php echo $row['designation']; ?>" name="designation" placeholder="Enter designation" required>
              </div>
              <div class="input-box">
                <i class="ri-user-heart-fill"></i>
                <input type="text" id="father_spouse_name" value="<?php echo $row['father_spouse_name']; ?>" name="father_spouse_name" placeholder="Enter father/spouse name" required>
              </div>
              <div class="input-box">
                <i class="ri-map-pin-user-fill"></i>
                <input type="text" id="address" value="<?php echo $row['address']; ?>" name="address" placeholder="Enter the address" required>
              </div>
               <div class="input-box">
                <i class="ri-contacts-book-2-fill"></i>
                <input type="number" id="contact_no" name="contact_no" value="<?php echo $row['contact_no']; ?>" placeholder="Enter The Contact" min="1" onkeypress="if(this.value.length===10) return false" required>
              </div>
              <div class="input-box">
                <i class="ri-mail-fill"></i>
                <input type="text" id="email" value="<?php echo $row['email']; ?>" name="email" placeholder="Enter the email" required>
              </div>
              <div class="input-box">
                <i class="ri-shield-user-fill"></i>
                <input type="text" id="emer_contact_person" value="<?php echo $row['emer_contact_person']; ?>" name="emer_contact_person" placeholder="Enter emergency contact person name" required>
              </div>
              <div class="input-box">
                <i class="ri-arrow-left-right-fill"></i>
                <input type="text" id="relation" value="<?php echo $row['relation']; ?>" name="relation" placeholder="Enter relation" required>
              </div>
              <div class="input-box">
                <i class="ri-contacts-fill"></i>
                <input type="number" id="emergency_contact" value="<?php echo $row['emergency_contact']; ?>" name="emergency_contact" placeholder="Enter emergency contact number" min="1" onkeypress="if(this.value.length===10) return false" required>
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

if(isset($_POST['update'])){
    
    $query = "UPDATE teachers_directory SET teacher_name = '$TeacherName',date_of_birth = '$DOB', gender = '$Gender', blood_group = '$BloodGroup', employeeID = '$EmployeeID', designation = '$Designation' ,father_spouse_name = '$FarherSpouse',address = '$Address', contact_no = '$Contact', email = '$Email', emer_contact_person = '$EmerContactPerson', relation = '$Relation', emergency_contact = '$EmerContact' WHERE id='$id'";
    $result = mysqli_query($config,$query);

    if ($result) {
        echo "<script>alert('Updated Successfully');window.location.href='enroll_employee.php'</script>";
    }else{
        echo "<script>alert('Updation Failed');window.location.href='edit_employee.php'</script>";
    }
}

?>