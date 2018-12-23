<?php  




$servername = "localhost";
$username = "root";
$dbname="msro2a";
$password = "";

// Create connection
$db = new mysqli($servername, $username,$password,$dbname);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 
echo "Connected successfully";


$username=$mail=$password=$confirmpassword=$phonenumber="";
$errors=array();
if(isset($_POST['Sign-up']))
{

	$username=$_POST['fullname'];
	$email=$_POST['Email'];
	$password=$_POST['password'];
	$confirmpassword=$_POST['Repeatepassword'];
	$phonenumber=$_POST['phonenumber'];
	$id="9";
	$photo="oooo";



		$sql="INSERT INTO users (fullName,phoneNumber,email,password)
		VALUES ('$username','$phonenumber','$email','$password')";
		mysqli_query($db,$sql);


if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}





}












?>