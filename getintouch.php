<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"riverineresorts");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['submit']))
{	 
    $name=$_POST['name'];
	$city = $_POST['city'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
    $sql1 = "INSERT INTO get_in_touch VALUES ('','$name','$city','$mobile','$email')";
    
    mysqli_query($conn, $sql1);
  
	
}
echo '<script>alert("Thank you for showing interest. We will get back to you!"); window.location = "contact.php";</script>';
mysqli_close($conn);

?>
