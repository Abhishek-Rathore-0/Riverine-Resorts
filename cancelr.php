<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password,"riverineresorts_booking");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['cancel']))
{	 
    $id=$_POST['reservation_id'];
    $mobile=$_POST['mobile'];
    $sql="SELECT reservation_id FROM reservations where reservation_id=$id";
    $result=mysqli_query($conn,$sql);
    $rid=0;
    while ($row=mysqli_fetch_assoc($result))
    {
      $rid= $row["reservation_id"];
    }
    $sql1="SELECT guest_id FROM guest_details where mobile_number=$mobile";
    $result1=mysqli_query($conn,$sql1);
    $gid=0;
    while ($row=mysqli_fetch_assoc($result1))
    {
        $gid= $row["guest_id"];
        $sql1="delete from reservations where reservation_id=$id and guest_id=$gid"; 
        mysqli_query($conn,$sql1); 
    }
    
    if((int)$rid == 0 || (int)$gid == 0)
    { 
      echo '<script>alert("Enter correct details."); window.location = "reservation.php";</script>';
    }
    else{
      echo '<script>alert("Your reservation has been cancelled."); window.location = "reservation.php";</script>';
    }
  }
mysqli_close($conn);

?>
