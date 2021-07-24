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
	$email = $_POST['email'];
	$review = $_POST['review'];
	
	$sql = "INSERT INTO reviews  VALUES ('','$name','$email','$review')";
	mysqli_query($conn, $sql);
		
	 
}
echo '<script>alert("Thanks for the review!"); window.location = "home.php";</script>';
mysqli_close($conn);
?>