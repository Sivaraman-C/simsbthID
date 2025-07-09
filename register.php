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
<body onload="showPasscode()">
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
                            <a href="<?php echo $base_url; ?>">
                                <div class="logo">
                                    <img class="logo-size" src="images/logo-yellow.svg" alt="">
                                </div>
                            </a>
                        </div>
                         <h3 class="font-md">Creating trusted identities, one card at a time.</h3>
                        <p>Each card we generate is a step towards building stronger, safer, and more connected communities.</p>
                        
                        <form method="POST">

                        	<?php 
                        	if(isset($_SESSION['flash_message']))
                        	{
                        		echo "<div class='alert alert-success text-success' role='alert'>
                        		" . $_SESSION['flash_message'] . "</div>";
                        		unset($_SESSION['flash_message']); 
                        	}
                        	if(isset($_SESSION['duplicateMsg']))
                        	{
                        		echo "<div class='alert alert-danger text-danger' role='alert'>
                        		" . $_SESSION['duplicateMsg'] . "</div>";
                        		unset($_SESSION['duplicateMsg']); 
                        	}

                        	?>

                        	<input type="text" id="adminName" name="adminName" class="form-control" oninput="changeToTitle()" placeholder="Enter Your Name">

                        	<input class="form-control" type="number" name="mobileNo" placeholder="Your Phone No." onkeypress="if(this.value.length === 10)return false" required>

                        	<code>Your Passcode:</code>
                            <input class="form-control" type="text" id="passcodetext" name="passcode" required>
                            

                            <div class="form-button d-flex">
                                <button class="btn btn-outline-primary" type="submit" name="registerUser">Register Here</button>
                                <a href="<?php echo $base_url; ?>" class="btn btn-outline-primary">Back to Home</a>
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

<script type="text/javascript">
	function showPasscode()
	{
		var generatedCode = document.getElementById('passcodetext');
		var passcode = Math.floor(1000 + Math.random() * 9000);
		generatedCode.value = passcode;
	}

	function changeToTitle()
	{
		var adminName = document.getElementById('adminName');
		adminName.value = adminName.value.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
	}
</script>

<?php 

$adminName = $_POST['adminName'];
$mobileNo = $_POST['mobileNo'];
$passcode = $_POST['passcode'];

if (isset($_POST['registerUser']))
{
	$searchMobNo = mysqli_query($config,"SELECT * FROM admin_directory WHERE admin_phone = '$mobileNo'");

	if(mysqli_num_rows($searchMobNo)>0)
	{
		$_SESSION['duplicateMsg'] = "Duplicate Contacts Found";
		header("Location: " . $_SERVER['PHP_SELF']);
    	exit();
	}
	else
	{
		mysqli_query($config,"INSERT INTO admin_directory(admin_name,admin_phone,passcode) VALUES('$adminName','$mobileNo','$passcode')");

		$_SESSION['flash_message'] = "Registration Successful!";

	    header("Location: " . $_SERVER['PHP_SELF']);

	    exit();
	}   
}
?>
