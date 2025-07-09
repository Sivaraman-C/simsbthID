<?php 
include('config.php');

$id = $_GET['id'];

$fetchSelectedID = mysqli_query($config,"DELETE FROM teachers_directory WHERE id='$id'");

if($fetchSelectedID)
{
	echo "<script>alert('Image Deleted Successfully');window.location.href='enroll_employee.php'</script>";
}
else
{
	echo "<script>alert('Image Not Deleted');window.location.href='enroll_employee.php'</script>";
}

?>