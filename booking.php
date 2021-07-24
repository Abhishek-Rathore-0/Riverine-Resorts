
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"riverineresorts_booking");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$var=', ';
if(isset($_POST['submit']))
{	 
    $name=$_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'].$var.$_POST['city'].$var.$_POST['state'].$var.$_POST['pin'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $roomtype=$_POST['roomtype'];
    $noofroom=$_POST['noofroom'];

    $room1=3;
    if($roomtype == 'classic')
        $room1=1;
    elseif($roomtype == 'premium')
        $room1=2;
    
    $sql1="SELECT total_rooms from room where room_type=$room1";   
    $result=mysqli_query($conn, $sql1);
    $row=mysqli_fetch_assoc($result);
    $total= $row["total_rooms"];
    
    $condition=0;
    for($i = $checkin; strtotime($i) < strtotime($checkout);   $i = date ("Y-m-d", strtotime("+1 day", strtotime($i)))){
    
        $sql2="SELECT sum(no_of_rooms) as num FROM booked_rooms WHERE room_type=$room1 AND Date(date_of_reservation)='$i' GROUP BY no_of_rooms";   
        $result1=mysqli_query($conn, $sql2);
        $row=mysqli_fetch_assoc($result1);
        $var1= $row["num"];
        
        $var2=$var1+$noofroom;
        if($var2>$total)
        {
            $condition=1;
        }  
    }
    if($condition==0)
    {
      $sql1 = "INSERT INTO guest_details  VALUES ('','$name','$mobile','$email','$address')";
      mysqli_query($conn, $sql1);
      
      $sql2="SELECT guest_id from guest_details order by guest_id desc limit 1";   
      $result=mysqli_query($conn, $sql2);
      $row=mysqli_fetch_assoc($result);
      $var1= $row["guest_id"];
      
      $sql3 ="INSERT INTO reservations VALUES('','$var1','$checkin','$checkout','$roomtype','$noofroom')";
      mysqli_query($conn, $sql3);   
      
      for($i = $checkin; strtotime($i) < strtotime($checkout);   $i = date ("Y-m-d", strtotime("+1 day", strtotime($i)))){
      $sql="INSERT into booked_rooms Values('$var1','$room1','$noofroom','$i')";
      mysqli_query($conn,$sql);
      }
      
      $sql5="SELECT reservation_id from reservations where guest_id= $var1";   
      $result5=mysqli_query($conn, $sql5);
      $row=mysqli_fetch_assoc($result5);
      $rid= $row["reservation_id"];
      
      echo '<script>alert("Your booking is successfull. Your Reservation ID is '.$rid.'. Please note this for cancelling your reservation."); window.location = "reservation.php";</script>';
      
    }  
    else{
       echo '<script>alert("Rooms are not availabe."); window.location = "reservation.php";</script>';
    }    
}
mysqli_close($conn);
?>