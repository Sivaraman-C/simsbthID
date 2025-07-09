<?php 

$hostname = 'localhost';
$username = 'root';
$password = 'Admin1234#@';
$dbname = 'simsbth_id';

$config = mysqli_connect($hostname,$username,$password,$dbname);

$base_url = 'http://localhost/simsbthid/';

if($config)
{
	echo "";
}
else
{
	echo "Failed to Connect with Database. The following error has been tracked\n".mysqli_connect_error();
}


?>