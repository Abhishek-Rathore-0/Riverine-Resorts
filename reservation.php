<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <title>Riverine Resorts | RESERVATION</title>
        <link rel="stylesheet" href="reservation.css">
        <link rel="stylesheet" href="general.css">
        <link rel = "icon" href ="rleaf1.png" type = "image/x-icon">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="reserva.js"></script>
        <script type="text/javascript">
                $(window).on('scroll',function(){
                    if ($(window).scrollTop()){
                        $('nav').addClass('black');  
                    }
                    else
                    {
                        $('nav').removeClass('black');
                    }
                });
                  $(document).ready(function(){
                      $("#pay").select(function(){
                          $(".card").slideToggle("slow");
                      });
                    $("#b1").click(function(){
                        $(".A").slideToggle("slow");
                    });
        });
    </script>
        </script>
    </head>
    <body onload="cost1();">
        <?php
            session_start();
                if(isset($_SESSION['visits']))
                    $_SESSION['visits']=$_SESSION['visits']+1;
                else
                    $_SESSION['visits']=1;
                
        ?>
        <nav>
            <img src="LOGOFINAL.png" class="logo">
    
            <ul> 
                <li ><a href="home.php">HOME </a></li>
                <li ><a href="resort.php">RESORT</a></li>
                <li ><a href="activity.php">ACTIVITIES</a> </li>
                <li ><a href="merchandise.php" >MERCHANDISE</a></li>
                <li ><a href="reservation.php" class="active">RESERVATIONS</a></li>   
                <li ><a href="contact.php">CONTACT US</a></li>   
            </ul>
        </nav>   
        <header>
            <div class="title">
                <div class="head">MAKE A <br> RESERVATION</div>
            </div>
        </header>
        <section class="check mar">
            <p class="subhead" style="text-align: center;">Check Availability</p>
            <div class="content" style="width: 1060px;">
                <form action="check.php" method="POST">
                <div class="row">
                    <div class="col1">
                        <label for="checkin">Check In Date<sup>*</sup> </label><br>
                        <input type="date" id="checkin" name="checkin" onclick="chin();" required>
                    </div>
                    <div class="col1">
                        <label for="checkout">Check Out Date<sup>*</sup> </label><br>
                        <input type="date" id="checkout" onclick="chout1();" name="checkout" required>                 
                    </div>
                    <div class="col1">
                        <label for="roomtype">Room Preference<sup>*</sup> </label><br>
                        <select name="roomtype" id="roomtype" require>
                            <option value="" disabled selected>Choose option</option>
                            <option id="classic" value="classic">Classic Room</option>
                            <option id="premium" value="premium">Premium Room</option>
                            <option id="suite" value="suite">Privilege Suite</option>
                        </select>
                    </div>
                    <div class="col1">
                        <label for="noofroom">No of Rooms<sup>*</sup> </label> <br>
                        <input type="number" id="noofroom" name="noofroom" min=1 value=1 max=5  style="width:160px;"required>
                    </div>
                </div>
                <div class="row">
                    <button type="submit" name="submit" class="col" style="width: 240px; margin :0 auto;">Check Availability</button>
                </div>
                </form>
            </div>
        </section>
        <section class="reservation mar">
            <p class="subhead" style="text-align: center;">Reservation Details</p>
            <div class="content">
                <form action="booking.php" method=post>
                    <label for="name">Name<sup>*</sup> </label> <br>
                    <input type="text" id="name" name="name" pattern="[A-Z a-z]*" required>
                <div class="row">
                    <div class="col num">
                        <label for="mobile">Mobile<sup>*</sup> </label><br>
                        <input type="text" id="mobile" name="mobile"  pattern="[0-9]{10}" maxlength="10" oninput="javascript: if(this.value.length>this.maxLength) this.value=this.value.slice(0,this.maxLength);"  required>
                    </div>
                    <div class="col">
                        <label for="email">Email<sup>*</sup> </label><br>
                        <input type="email" id="email" name="email" required>
                
                    </div>
                </div>
                
                    <label for="address">Address<sup>*</sup> </label><br>    
                    <input type="address" id="adress" name="address" required>
                
                <div class="row">
                    <div class="col">
                        <label for="city">City<sup>*</sup> </label><br>
                        <input type="text" id="city" name="city" pattern="[A-Z a-z]*" required>
                    </div>
                    <div class="col">
                        <label for="state">State<sup>*</sup> </label><br>
                        <input type="text" id="state" name="state" required>
                    </div>
                    <div class="col num">
                        <label for="pin">Pin Code<sup>*</sup> </label><br>
                        <input type="text" id="pin" name="pin" pattern="[0-9]{6}" maxlength="6" oninput="javascript: if(this.value.length>this.maxLength) this.value=this.value.slice(0,this.maxLength);" required>
                
                    </div>    
                </div>
                <div class="row">
                    <div class="col">
                        <label for="checkin1">Check In Date<sup>*</sup> </label><br>
                        <input type="date" id="checkin1" name="checkin" onclick="chin();" required>
                    </div>
                    <div class="col">
                        <label for="checkout1">Check Out Date<sup>*</sup> </label><br>
                        <input type="date" id="checkout1" onchange="cost1()" name="checkout" onclick="chout2();" required>                 
                    </div>
                </div>
                <div class="row">
                    <div class="col">    
                        <label for="roomtype">Room Preference<sup>*</sup> </label><br>
                        <select name="roomtype" id="roomtype1" onchange="cost1()" require style="width: 227px;">
                            <option id="classic" value="classic" default>Classic Room (&#x20B9; 1500)</option>
                            <option id="premium" value="premium">Premium Room (&#x20B9; 2500)</option>
                            <option id="suite" value="suite">Privilege Suite (&#x20B9; 4000)</option>
                        </select>
                    </div>
                    
                    <div class="col">
                        <label for="noofroom">No of Rooms<sup>*</sup> </label> <br>
                        <input type="number" id="noofroom1" name="noofroom" onchange="cost1()" value="1" min="1" max="5" maxlength="1" oninput="javascript: if(this.value.length>this.maxLength) this.value=this.value.slice(0,this.maxLength);" pattern="[1-5]{1}" required>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col" style="margin-top:30px;">
                        <label for="cost">Total Cost(in &#x20B9;) </label> <br>
                        <input type="text" id="cost" name="cost" value="0" readonly style="border: none; font-size:26px;"></input>
                    </div>
                    <div class="col">    
                        <label for="pay">Payment Method<sup>*</sup> </label><br>
                        <select name="pay" onchange="show();card();" onclick="card()" id="pay" require>
                            <option value="" disabled selected>Choose option</option>
                            <option id="credit" value="credit">Credit Card</option>
                            <option id="debit" value="debit">Debit Card</option>
                        </select>
                    </div>
                </div>
                <div class="card" id="card1">
                    <div class="col1"> 
                        <div style="margin: 0 auto; width:500px;text-align:center;">
                            <p style="font-size: 30px; font-weight:bold;padding:10px;font-family:roboto;">Payment Details</p>
                            <img src="card.jpeg" style="width: 500px; height:100px;"></img>
                    
                        </div>
                    </div>
                    <div class="col1" style="margin-top:-30px;font-family:roboto;">
                        <label for="cname">Name on Card<sup>*</sup> </label> <br>
                        <input type="text" id="cname" name="cname" pattern="[A-Za-z ]*" required>
                    </div>
                    <div class="col1" style="font-family:roboto;">
                        <label for="cno">Card Number<sup>*</sup> </label> <br>
                        <input type="text" id="cno" name="cno" pattern="[0-9]{16}" maxlength="16" oninput="javascript: if(this.value.length>this.maxLength) this.value=this.value.slice(0,this.maxLength);"required>
                    </div>
                    <div class="row1 small" style="font-family:roboto;">
                        <div class="col1">
                            <label for="cvv">CVV<sup>*</sup> </label> <br>
                            <input type="text" id="cvv" name="cvv" pattern="[0-9]{3}" maxlength="3" oninput="javascript: if(this.value.length>this.maxLength) this.value=this.value.slice(0,this.maxLength);"required>
                        </div>
                        <div class="col1">
                            <label for="em">Expiration<sup>*</sup> </label> <br>
                            <input type="number" id="em" name="em" pattern="[0-9]{2}" required placeholder="MM" max="12" maxlength="2" oninput="javascript: if(this.value.length>this.maxLength) this.value=this.value.slice(0,this.maxLength);">
                            <input type="nember" id="ey" name="ey" pattern="[0-9]{2}" required placeholder="YY" min="20" max="30" maxlength="2" oninput="javascript: if(this.value.length>this.maxLength) this.value=this.value.slice(0,this.maxLength);">
                        </div>
                           
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col"  style="margin:0 auto;">
                        <button type="submit" name="submit" disabled id="reser" class="col" >Request Reservation</button>
                        <button type="reset" class="col"  onclick="card()"  onmouseout="cost1();">Reset</button>  
                    </div>            
                </div>
                </form>                 
            </div>
        </section>
          
            <div class="can mar">
                <input type="button" class="cancel" value="Cancel Reservation" onclick="canc('modal')">
                <div class="moda" id="modal">
                    <p class="subhead modahead">
                        Enter your details     
                        <button onclick="rem()" class="close-button"><p style="margin:0 auto;">&times;</p></button>
                    </p>
                    <div class="content" style="text-align: left;">
                        <form action="cancelr.php" method="POST">
                            <div class="col1" style="margin:0 auto;width:280px;">
                                <div class="col">
                                    <label for="reservation_id">Reservation ID<sup style="font-size: 12px;">*</sup> </label><br>
                                    <input type="text" id="reservation_id" name="reservation_id" class="reservation_id" required>
                                </div>
                                <div class="col">
                                    <label for="mobile">Mobile Number<sup style="font-size: 12px;">* </sup></label> <br>
                                    <input type="text" id="mobile" name="mobile" pattern="[0-9]{10}" class="mobie" required>
                                </div>
                            </div>
                            <div class="row">
                                <button type="submit" name="cancel" style="margin:0 auto;margin-top:10px;">Cancel Your Reservation</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
                    
        <footer>
                <div class="main-content">
                    <div class="left box">
                        <img src="LOGOFINAL1.png">
                    </div>
                    <div class="center box">
                        <h2 class="line">Follow us </h2>
                        <div class="social">
                            <a href="https://facebook.com"><span class="fab fa-facebook-f"></span></a>
                            <a href="https://twitter.com"><span class="fab fa-twitter"></span></a>
                            <a href="https://instagram.com"><span class="fab fa-instagram"></span></a>
                            <a href="https://youtube.com"><span class="fab fa-youtube"></span></a>
                        </div>
                    </div>  
                    <div class="right box">
                        <h2 class="line">Visitor no.</h2>
                        <h2><?php echo $_SESSION['visits'];?></h2>
                    </div>
            </section>
        </footer>
        <div id="overlay" onclick="rem()"></div>
        <script>
            cost();
            function cost(){
        //var a=document.getElementById("noofroom").nodeValue;
        document.getElementById("cost").nodeValue=10;
            }
        </script>
    </body>
</html>