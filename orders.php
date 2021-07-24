<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password,"riverineresorts_shop");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['paylater']))
{	 
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $houseno=$_POST['houseno'];
    $building=$_POST['building'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $pincode=$_POST['pincode'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $total=$_POST['total'];
	$mop=$_POST['pay1'];
	
	$sql1 = "INSERT INTO customers  VALUES ('','$fname','$lname','$houseno','$building','$city','$state','$pincode','$mobile','$email')";
	mysqli_query($conn, $sql1);
	
    $sql2="SELECT customer_id FROM customers where mobile_number='$mobile'";
    $result=mysqli_query($conn,$sql2);
    $id=0;
    while ($row=mysqli_fetch_assoc($result))
    {
        $id= $row["customer_id"];   
    }
    $sql3="INSERT into orders values('','$id',CURRENT_DATE(),null,'$total','$mop')"; 
    mysqli_query($conn,$sql3);
    
    $sql5="SELECT order_id FROM orders where customer_id='$id'";
    $result=mysqli_query($conn,$sql5);
    $oid=0;
    while ($row=mysqli_fetch_assoc($result))
    {
        $oid= $row["order_id"];   
    }
    for($x = 1; $x <= 12; $x++){
        $proid=100+$x;
        $qty=(int)($_POST[$x]);
        if($qty!= 0){
            $sql6="SELECT product_stock FROM products where product_id='$proid'";
            $result=mysqli_query($conn,$sql6);
            $proqty=0;
            while ($row=mysqli_fetch_assoc($result))
            {
                $proqty= $row["product_stock"];   
            }
            if(($proid-$qty)>=0)
            { 
                $sql4="INSERT into order_detail values('$oid','$proid','$qty')"; 
                mysqli_query($conn,$sql4);   
            }
            else{
                echo '<script>alert("Sorry this item '.$proid.' is out of stock.")</script>';
            }       
        }
    }
}
echo '<script>alert("Thanks for ordering. Your order id is '.$oid.'. Please note this for cancelling your order The parcel will get delivered in 5-7 days. We will contact you for confirmation."); window.location = "merchandise.php";</script>';
mysqli_close($conn);

?>

