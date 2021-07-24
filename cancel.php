<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password,"riverineresorts_shop");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['cancel']))
{	 
    $order=$_POST['order_id'];
    $mobile=$_POST['mobile'];
    
    $sql2="SELECT order_id FROM orders where order_id=$order";
    $result1=mysqli_query($conn,$sql2);
    $oid=0;
    while ($row=mysqli_fetch_assoc($result1))
    {
      $oid= $row["order_id"];
    }
    $sql="SELECT customer_id FROM customers where mobile_number=$mobile";
    $result=mysqli_query($conn,$sql);
    $id=0;
    while ($row=mysqli_fetch_assoc($result))
    {
      $id= $row["customer_id"];
    	$sql1="delete from orders where order_id=$order and customer_id=$id"; 
      mysqli_query($conn,$sql1); 

    }
    
    if((int)$id == 0 || (int)$oid == 0)
    { 
      echo '<script>alert("Enter correct details."); window.location = "merchandise.php";</script>';
    }
    else{
      echo '<script>alert("Your order has been cancelled."); window.location = "merchandise.php";</script>';
    }
  }
mysqli_close($conn);

?>

