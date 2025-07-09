<?php 
include('config.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aadamya ID Editor</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme42.css">

     <style type="text/css">
    	input[type=number]::-webkit-inner-spin-button, 
		input[type=number]::-webkit-outer-spin-button { 
		    -webkit-appearance: none;
		    -moz-appearance: none;
		    appearance: none;
		    margin: 0; 
		}
    </style>

</head>
<body>
    <div class="form-body form-left">
        <div class="iofrm-layout">
            <div class="img-holder text-start">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="images/graphic15.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content justify-content-end">
                    <div class="form-items">
                        <div class="website-logo-inside logo-normal">
                            <a href="index.html">
                                <div class="logo">
                                    <img class="logo-size" src="images/logo-yellow.svg" alt="">
                                </div>
                            </a>
                        </div>
                        <h3 class="font-md">Creating trusted identities, one card at a time.</h3>
                        <p>Each card we generate is a step towards building stronger, safer, and more connected communities.</p>
                        
                        <form method="POST"> 
                        	<?php 
                        	if(isset($_SESSION['errorMsg']))
                        	{
                        		echo "<div class='alert alert-danger text-danger' role='alert'>".$_SESSION['errorMsg']."</div>";
                        		unset($_SESSION['errorMsg']);
                        	}

                        	?>
                        
                            <input class="form-control" type="number" name="phoneNo" placeholder="Enter Registered Mobile No." onkeypress="if(this.value.length === 10) return false;" required>

                            <input class="form-control" type="password" name="passcode" placeholder="Password" required maxlength="4">

                            <div class="form-button d-flex">
                                <button id="submit" type="submit" name="adminLogin" class="btn btn-primary">Login</button>

                                <a href="register.php" class="btn btn-outline-primary">Create account</a>
                            </div>

                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>


<?php 

$mobileNo = $_POST['phoneNo'];
$passcode = $_POST['passcode'];

$matchData = mysqli_query($config,"SELECT * FROM admin_directory WHERE admin_phone = '$mobileNo' AND passcode = '$passcode'");

if(isset($_POST['adminLogin']))
{
	if(mysqli_num_rows($matchData)>0)
	{
		session_start();
		$_SESSION['activeID'] = $mobileNo;
		header('Location:dashboard.php');
	}
	else
	{
		$_SESSION['errorMsg'] = "Wrong Credentials! Re-Enter to Login";
		header("Location: " . $_SERVER['PHP_SELF']);
		exit();
	}
}

?>