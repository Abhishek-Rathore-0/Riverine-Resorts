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

if(isset($_POST['submit']))
{	 
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
        $var1=0;
        while($row=mysqli_fetch_assoc($result1)){
            $var1=$var1+$row["num"];
        }
        $var2=$var1+$noofroom;
        if($var2>$total)
        {
            $condition=1;
        }  
    }
    
    if($condition==0)
    {
       echo '<script>alert("Rooms are availabe."); window.location = "reservation.php";</script>';
    }  
    else{
       echo '<script>alert("Rooms are not availabe."); window.location = "reservation.php";</script>';
    }   
}
mysqli_close($conn);

?>
