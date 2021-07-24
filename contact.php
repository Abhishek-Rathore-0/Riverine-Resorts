<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <title>Riverine Resorts | CONTACT</title>
        <link rel="stylesheet" href="contact.css">
        <link rel="stylesheet" href="general.css">
        <link rel = "icon" href ="rleaf1.png" type = "image/x-icon">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
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
        </script>
    </head>
    <body>
        <script>
            function check(){
                var x = document.getElementById("condition").checked;
                if(x==false){
                    alert("Please select the checkbox to continue.");
                    return false;
                }
                else
                {   
                    return true;
                }
            }
            
        
        </script>
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
                <li ><a href="reservation.php">RESERVATIONS</a></li>   
                <li ><a href="contact.php" class="active">CONTACT US</a></li>   
            </ul>
        </nav>   
        <header>
            <div class="title">
                <div class="head">CONTACT US</div>
            </div>
        </header>
            
        <section>
            <div class="box1 mar">
                    <p class="subhead">Address</p>
                    <p class="body">Chinnakanal Suryanelli Rd, Munnar, Kerala 685618</p>
                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d32350.54796741824!2d77.16272198285425!3d10.041689698417937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b079fc8bae6439d%3A0x950866b80d2708e5!2sChinnakanal%20Suryanelli%20Rd%2C%20Chinnakanal%2C%20Kerala!5e0!3m2!1sen!2sin!4v1603785296477!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>
                </div>
                <div class="box1 mar">  
                    <p class="subhead">Phone Number</p>
                    <p class="body">+919917713050<br>+917395039084<br>(24 hours available)</p>
                </div>
                <div class="box1 mar">
                    <p class="subhead">Email Address</p>
                    <p class="body"><a href="https://mail.google.com/mail/?view=cm&fs=1&to=riverineresorts@gmail.com">riverineresorts@gmail.com</a></p>
                </div>
            </div>
        </section>
        <section class="mar">
            <p class="subhead">Get In Touch</p>
            <p>
                Please fill in form below if you have questions of any sort. We will get back to you.
            </p>
            <div class="form">
                <form id="git" method="POST" name="form1" action="getintouch.php" onsubmit=" return check()">
                   
                    <input type="text" id="name" name="name" pattern="[A-Za-z ]*"placeholder="Name" required><br>
                    
                    <input type="text" id="city" name="city" pattern="[A-Za-z ]*"placeholder="City" required><br>
                    
                    <input type="text" id="mobile" name="mobile" pattern="[0-9]{10}" placeholder="Mobile" required><br>
                    
                    <input type="email" id="email" name="email" placeholder="Email" style="margin-bottom: 20px;" required><br>
                    <input type="checkbox" id="condition"class="condition" style="width: 20px;height: 20px;"r>
                    <label for="condition" class="con">I authorize Riverine Resorts to call/email/SMS me for membership plans and ongoing promotions and offers.</label></br>
                    <input type="submit" name="submit" value="Submit"></input> 
                </form>
            </div>
        </section>
        
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
    </body>
</html>