<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <title>Riverine Resorts | MERCHANDISE</title>
        <link rel="stylesheet" href="merchandise.css">
        <link rel="stylesheet" href="general.css">
        <link rel = "icon" href ="rleaf1.png" type = "image/x-icon">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="merchandise.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script type="text/javascript">
                $(window).on('scroll',function(){
                    if ($(window).scrollTop()){
                        $('nav').addClass('black');  
                        $('.cart').addClass('active');
                    }
                    else
                    {
                        $('nav').removeClass('black');
                        $('.cart').removeClass('active');
                    }
                });
                $(window).scroll(function() {
                    if ($(document).height() <= ($(window).height() + $(window).scrollTop())) {
                        $('.cart').removeClass('active');
                    }
                });          
        </script>
    </head>
    <body>
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
                <li ><a href="#" class="active">MERCHANDISE</a></li>
                <li ><a href="reservation.php">RESERVATIONS</a></li>   
                <li ><a href="contact.php">CONTACT US</a></li>   
            </ul>
            <button class="cart"><a href="#cart11" class="fa fa-shopping-cart"></a></button>
        </nav>   
        <header>
            <div class="title">
                <div class="head">MERCHANDISE</div>
            </div>
        </header>
        <section class="title_text mar">
            Riverine’s own souvenir and merchandise shop is perfect place for you to shop for yourself, your friends and family. The shop sells an exciting range of exquisite items including fine tea leaves, aromatic oils and homemade chocolates etc. You can also buy your photos of your trip and have them printed on a range of products. <br>
            Now you can also shop selected items online and get the best of Munnar delivered right at your home. Happy Shopping!            
        </section>
        <section class="item">
            <div class="mar">
                <div class="div-group">
                    <div class="box1">
                        <img src="Black-Tea-Ginger.png" alt="">
                        <p class="h3">
                            Black Tea With Natural Ginger - 100 g
                        </p>
                        <p class="desc">&#x20B9; 90</p>
                        <input type="button" id="b1" onclick="atc('b1','c1','1')" value="Add to Cart">
                    </div>

                    <div class="box1">
                        <img src="Black-Tea-Masala.png" alt="">
                        <p class="h3">Black Tea With Natural Masala - 100 g</p>
                        <p class="desc">&#x20B9;90 </p>
                        <input type="button" id="b2" onclick="atc('b2','c2','2')" value="Add to Cart">
                    </div>

                    <div class="box1">
                        <img src="Green-tea-lemon.png" alt="">
                        <p class="h3">Green Tea With Natural Lemon - 100 g </p>
                        <p class="desc">&#x20B9; 100</p>
                        <input type="button" id="b3" onclick="atc('b3','c3','3')" value="Add to Cart">
                    </div>

                    <div class="box1">
                        <img src="premium-dust-tea.png" alt="">
                        <p class="h3">Premium Dust Tea - 250 g</p>
                        <p class="desc">&#x20B9; 80</p>
                        <input type="button" id="b4" onclick="atc('b4','c4','4')" value="Add to Cart">
                    </div>

                    <div class="box1">
                        <img src="cocoa-butter1.jpg" alt="">
                        <p class="h3">Cocoa Butter - 250 gm</p>
                        <p class="desc">&#x20B9; 450</p>
                        <input type="button" id="b5" onclick="atc('b5','c5','5')" value="Add to Cart">
                    </div>

                    <div class="box1">
                        <img src="kerala-nut1.jpg" alt="">
                        <p class="h3">Kerela Assorted Nuts - 500 gm</p>
                        <p class="desc">&#x20B9; 500</p>
                        <input type="button" id="b6" onclick="atc('b6','c6','6')" value="Add to Cart">
                    </div>

                    <div class="box1">
                        <img src="slow-baked-pistachios1.jpg" alt="">
                        <p class="h3">Slow Baked Pistachios - 200 gm</p>
                        <p class="desc">&#x20B9;240 </p>
                        <input type="button" id="b7" onclick="atc('b7','c7','7')" value="Add to Cart">
                    </div>
                    <div class="box1">
                        <img src="soap.jpg" alt="">
                        <p class="h3">Natural & Hand Made Vetive</p>
                        <p class="desc">&#x20B9;350</p>
                        <input type="button" id="b8" onclick="atc('b8','c8','8')" value="Add to Cart">
                    </div>

                    <div class="box1">
                        <img src="ayurvedic-soap.png" alt="">
                        <p class="h3">Pure Ayurvedic Soap Box( set of 3)</p>
                        <p class="desc">&#x20B9; 300</p>
                        <input type="button" id="b9" onclick="atc('b9','c9','9')" value="Add to Cart">
                    </div>

                    <div class="box1">
                        <img src="LemonGrass.png" alt="">
                        <p class="h3">Lemon Grass Oil - 50 ml</p>
                        <p class="desc">&#x20B9;150 </p>
                        <input type="button" id="b10" onclick="atc('b10','c10','10')" value="Add to Cart">
                    </div>

                    <div class="box1">
                        <img src="dark-chocolate.png" alt="">
                        <p class="h3">Premium Dark Chocolate - 500g</p>
                        <p class="desc">&#x20B9;900 </p>
                        <input type="button" id="b11" onclick="atc('b11','c11','11')" value="Add to Cart">    
                    </div>
                    <div class="box1">
                        <img src="Eucalyptus_oil.png" alt="">
                        <p class="h3">Eucalyptus Oil - 50 ml </p>
                        <p class="desc">&#x20B9; 180</p>    
                        <input type="button" id="b12" onclick="atc('b12','c12','12')" value="Add to Cart">
                    </div>
                </div>    
            </div>
        </section>
        <section class="cart1 mar" id="cart11" style="display: block;">
            <form action="orders.php" method=POST>
            <p class="subhead" style="font-family: roboto-head;">Shopping Bag</p>
            <table class="cart2">
                <tr class="c0 col" id="c1">
                    <td><img src="Black-Tea-Ginger.png"></td>
                    <td>Black Tea With Natural Ginger <br> 100 g</td>
                    <td>
                        <div class="atc">
                            <button onclick="sub('i1','r1','90')">-</button>
                            <input type="text" id="i1" name="1" value="0" readonly>
                            <button onclick="add('i1','r1','90')">+</button>
                        </div>
                    </td>
                    <td>&#x20B9; <input type="text" class="rs" id="r1" name="r1" value="90" readonly></td>
                    <td>
                        <button class="close-button" onclick="atc('b1','c1','1')">&times;</button>
                    </td>
                </tr>
                
                <tr class="c0 col" id="c2">
                    <td><img src="Black-Tea-Masala.png"></td>
                    <td>Black Tea With Natural Masala <br> 100 g</td>
                    <td>
                        <div class="atc">
                            <button onclick="sub('i2','r2','90')">-</button>
                            <input type="text" id="i2" name="2" value="0" readonly>
                            <button onclick="add('i2','r2','90')">+</button>
                        </div>
                    </td>
                    <td>&#x20B9; <input type="text" class="rs" id="r2" value="90" name="r2"  readonly></td>
                    <td>
                        <button class="close-button" onclick="atc('b2','c2','2')">&times;</button>
                    </td> 
                </tr>
                
                <tr class="c0 col" id="c3">
                    <td><img src="Green-tea-lemon.png"></td>
                    <td>Green Tea with Natural Lemon <br> 100 g</td>
                    <td>
                        <div class="atc">
                            <button onclick="sub('i3','r3','100')">-</button>
                            <input type="text" id="i3" name="3" value="0" readonly>
                            <button onclick="add('i3','r3','100')">+</button>
                        </div>
                    </td>
                    <td>&#x20B9; <input type="text" class="rs" id="r3" name="r3" value="100" readonly></td>
                    <td>
                        <button class="close-button" onclick="atc('b3','c3','3')">&times;</button>
                    </td> 
                </tr>

                <tr class="c0 col" id="c4">
                    <td><img src="premium-dust-tea.png"></td>
                    <td>Premium Dust Tea  <br> 250 g</td>
                    <td>
                        <div class="atc">
                            <button onclick="sub('i4','r4','80')">-</button>
                            <input type="text" id="i4" value="0" name="4" readonly>
                            <button onclick="add('i4','r4','80')">+</button>
                        </div>
                    </td>
                    <td>&#x20B9; <input type="text" class="rs" id="r4" name="r4" value="80" readonly></td>
                    <td>
                        <button class="close-button" onclick="atc('b4','c4','4')">&times;</button>
                    </td> 
                </tr>
                
                <tr class="c0 col" id="c5">
                    <td><img src="cocoa-butter1.jpg"></td>
                    <td>Cocoa Butter  <br> 450 g</td>
                    <td>
                        <div class="atc">
                            <button onclick="sub('i5','r5','450')">-</button>
                            <input type="text" id="i5" value="0" name="5" readonly>
                            <button onclick="add('i5','r5','450')">+</button>
                        </div>
                    </td>
                    <td>&#x20B9; <input type="text" class="rs" id="r5" name="r5"  value="450" readonly></td>
                    <td>
                        <button class="close-button" onclick="atc('b5','c5','5')">&times;</button>
                    </td> 
                </tr>

                <tr class="c0 col" id="c6">
                    <td><img src="kerala-nut1.jpg"></td>
                    <td>Kerela Assorted Nuts <br> 500 g</td>
                    <td>
                        <div class="atc">
                            <button onclick="sub('i6','r6','500')">-</button>
                            <input type="text" id="i6" name="6" value="0" readonly>
                            <button onclick="add('i6','r6','500')">+</button>
                        </div>
                    </td>
                    <td>&#x20B9; <input type="text" class="rs" id="r6" value="500" name="r6" readonly></td>
                    <td>
                        <button class="close-button" onclick="atc('b6','c6','6')">&times;</button>
                    </td> 
                </tr>
                
                <tr class="c0 col" id="c7">
                    <td><img src="slow-baked-pistachios1.jpg"></td>
                    <td>Slow baked pistachios  <br> 200 g</td>
                    <td>
                        <div class="atc">
                            <button onclick="sub('i7','r7','240')">-</button>
                            <input type="text" id="i7" name="7" value="0" readonly>
                            <button onclick="add('i7','r7','240')">+</button>
                        </div>
                    </td>
                    <td>&#x20B9; <input type="text" class="rs" id="r7" value="240" name="r7"  readonly></td>
                    <td>
                        <button class="close-button" onclick="atc('b7','c7','7')">&times;</button>
                    </td> 
                </tr>
                
                <tr class="c0 col" id="c8">
                    <td><img src="soap.jpg"></td>
                    <td>Natural & Hand Made Vetiver <br> Set of 4</td>
                    <td>
                        <div class="atc">
                            <button onclick="sub('i8','r8','350')">-</button>
                            <input type="text" id="i8" name="8" value="0" readonly>
                            <button onclick="add('i8','r8','350')">+</button>
                        </div>
                    </td>
                    <td>&#x20B9; <input type="text" class="rs" id="r8" value="350" name="r8"  readonly></td>
                    <td>
                        <button class="close-button" onclick="atc('b8','c8','8')">&times;</button>
                    </td> 
                </tr>
                
                <tr class="c0 col" id="c9">
                    <td><img src="ayurvedic-soap.png"></td>
                    <td>Pure ayurvedic soap box <br> Set of 3</td>
                    <td>
                        <div class="atc">
                            <button onclick="sub('i9','r9','300')">-</button>
                            <input type="text" id="i9" name="9" value="0" readonly>
                            <button onclick="add('i9','r9','300')">+</button>
                        </div>
                    </td>
                    <td>&#x20B9; <input type="text" class="rs" id="r9" value="300" name="r9" readonly></td>
                    <td>
                        <button class="close-button" onclick="atc('b9','c9','9')">&times;</button>
                    </td> 
                </tr>
                
                <tr class="c0 col" id="c10">
                    <td><img src="LemonGrass.png"></td>
                    <td>Lemon Grass Oil <br> 50 ml</td>
                    <td>
                        <div class="atc">
                            <button onclick="sub('i10','r10','150')">-</button>
                            <input type="text" id="i10" name="10" value="0" readonly>
                            <button onclick="add('i10','r10','150')">+</button>
                        </div>
                    </td>
                    <td>&#x20B9; <input type="text" class="rs" id="r10" value="150" name="r10" readonly></td>
                    <td>
                        <button class="close-button" onclick="atc('b10','c10','10')">&times;</button>
                    </td> 
                </tr>
                    
                    <tr class="c0 col" id="c11">
                        <td><img src="dark-chocolate.png"></td>
                        <td>Premium Dark Chocolate <br> 500 gm</td>
                        <td>
                            <div class="atc">
                                <button onclick="sub('i11','r11','900')">-</button>
                                <input type="text" id="i11" name="11" value="0" readonly>
                                <button onclick="add('i11','r11','900')">+</button>
                            </div>
                        </td>
                        <td>&#x20B9;<input type="text" class="rs" id="r11" value="900" name="r11" readonly></td>
                        <td>
                            <button class="close-button" onclick="atc('b11','c11','11')">&times;</button>
                        </td> 
                    </tr>                        
                    
                <tr class="c0 col" id="c12">
                    <td><img src="Eucalyptus_oil.png"></td>
                    <td>Eucalyptus Oil  <br> 50 ml</td>
                    <td>
                        <div class="atc">
                            <button onclick="sub('i12','r12','180')">-</button>
                            <input type="text" id="i12" name="12" value="0" readonly>
                            <button onclick="add('i12','r12','180')">+</button>
                        </div>
                    </td>
                    <td>&#x20B9; <input type="text" class="rs" id="r12" value="180" name="r12" readonly></td>
                    <td>
                        <button class="close-button" onclick="atc('b12','c12','12')">&times;</button>
                    </td> 
                </tr>                   
                
                <tr class="c0 col" id="c13">
                    
                    <td></td>
                    <td></td>
                    <td>Total</td>
                    <td>&#x20B9; <input type="text" name="total" class ="rs" id="s1" readonly><br>(Incl. of all taxes)</td>
                    <td>
                        <input type="button" class="buy" onclick="canc('modal2')" value="Buy now">
                        <div id="modal2" class="moda">
                            <p class="subhead modahead">
                               <b style="font-family:roboto-head;font-size: 40px;font-weight:bold">Enter your details</b>     
                               <button onclick="rem()" class="close-button"><p style="margin:0 auto;">&times;</p></button>
                            </p>
                            <div class="content" style="text-align: left;">
                                <div class="row">
                                    <div class="col">
                                        <label for="fname">First Name<sup style="font-size: 12px;">*</sup> </label><br>
                                        <input type="text"  class="fname" id="fname" name="fname" pattern="[A-Za-z]*" required>
                                    </div>
                                    <div class="col">
                                        <label for="lname">Last Name<sup style="font-size: 12px;">*</sup> </label><br>
                                        <input type="text" class="lname" id="lname" name="lname" pattern="[A-Za-z]*" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="mobile">Mobile Number<sup style="font-size: 12px;">*</sup> </label><br>
                                        <input type="text" class="mobile" name="mobile" id="mobile" pattern="[0-9]{10}" maxlength="10" oninput="javascript: if(this.value.length>this.maxLength) this.value=this.value.slice(0,this.maxLength);"  required><br>    
                                    </div>
                                    <div class="col">
                                        <label for="email">Email<sup style="font-size: 12px;">*</sup> </label><br>
                                        <input type="email" class="email" name="email" id="email" required><br>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col">
                                        <label for="houseno">House no<sup style="font-size: 12px;">*</sup> </label>
                                        <input type="text" class="houseno" name="houseno"id="houseno" pattern="[0-9]{1-7}" required><br>  
                                    </div>
                                    <div class="col">
                                        <label for="building">Building/Society<sup style="font-size: 12px;">*</sup> </label>
                                        <input type="text" class="building" name="building" id="building"  required><br> 
                                    </div>
                                    <div class="col">
                                        <label for="city">City<sup style="font-size: 12px;">*</sup> </label>
                                        <input type="text" class="city" name="city" id="city" pattern="[a-zA-Z ]*" required><br>
                                    </div>    
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="state">State<sup style="font-size: 12px;">*</sup> </label> <br>
                                        <input type="text" class="state" name="state" id="state" pattern="[a-zA-Z ]*" required><br>                       
                                    </div>
                                    <div class="col">
                                        <label for="pin">Pin Code<sup style="font-size: 12px;">*</sup> </label><br>
                                        <input type="text" class="pincode" name="pincode" id="pin" pattern="[0-9]{6}" maxlength="6" oninput="javascript: if(this.value.length>this.maxLength) this.value=this.value.slice(0,this.maxLength);" required><br>   
                                    </div>
                                </div>
                                
                                
                                <div class="row">
                                    <div class="col" style="margin-top:20px;">
                                        <label for="cost">Total Cost(in &#x20B9;) </label> <br>
                                        <input type="text" id="cost" name="cost" value="0" readonly style="border: none; font-size:26px; background-color:transparent;"></input>
                                    </div>
                                    <div class="col">    
                                        <label for="pay1" style="padding-bottom: 20px;">Choose a payment method</label> <br>
                                        <select name="pay1" id="pay1" onclick="card()" onchange="show()" required>
                                           <option value="" disabled selected>Choose option</option>
                                            <option value="Cash On Delivery" id="o1">Cash On Delivery</option>
                                            <option value="Credit Card" id="o2">Credit Card</option>
                                            <option value="Debit Card" id="o3">Debit Card</option>
                                        </select>
                                    </div>
                            </div>
                <div class="card" id="card1" style="padding: 30px;">
                    <div class="col1"> 
                        <div style="margin: 0 auto; width:500px;text-align:center;margin-top:-30px;">
                            <p style="font-size: 30px; font-weight:bold;font-family:roboto;">Payment Details</p>
                            <img src="card.jpeg" style="width: 500px; height:100px;"></img>
                    
                        </div>
                    </div>
                    <div class="col1" style="margin-top:-20px;font-family:roboto;">
                        <label for="cname">Name on Card<sup>*</sup> </label> <br>
                        <input type="text" id="cname" name="cname" pattern="[A-Za-z ]*">
                    </div>
                    <div class="col1" style="font-family:roboto;">
                        <label for="cno">Card Number<sup>*</sup> </label> <br>
                        <input type="text" id="cno" name="cno" pattern="[0-9]{16}" maxlength="16" oninput="javascript: if(this.value.length>this.maxLength) this.value=this.value.slice(0,this.maxLength);">
                    </div>
                    <div class="row1 small" style="font-family:roboto; margin-top:-20px;">
                        <div class="col1">
                            <label for="cvv">CVV<sup>*</sup> </label> <br>
                            <input type="text" id="cvv" name="cvv" pattern="[0-9]{3}" maxlength="3" oninput="javascript: if(this.value.length>this.maxLength) this.value=this.value.slice(0,this.maxLength);">
                        </div>
                        <div class="col1">
                            <label for="em">Expiration<sup>*</sup> </label> <br>
                            <input type="number" id="em" name="em"  pattern="[0-9]{2}" max="12" placeholder="MM" maxlength="2" oninput="javascript: if(this.value.length>this.maxLength) this.value=this.value.slice(0,this.maxLength);">
                            <input type="number" id="ey" name="ey" pattern="[0-9]{2}"  min="20" max="30" placeholder="YY" maxlength="2" oninput="javascript: if(this.value.length>this.maxLength) this.value=this.value.slice(0,this.maxLength);">
                        </div>
                           
                    </div>
                    
                </div>
                            <div class="row">
                                <div class="col" style="margin:0 auto;">
                                    <button style="width:290px; margin-top:20px;" type="submit" name="paylater" id="order1" disabled onclick="confirm()">Pay</button> 
                                                  
                                </div>
                            </div>               
                        </div>   
                    </td> 
                    
                </tr> 
                <tr class=" show d0" id="c14">
                    <td rowspan="5" id="d1">Your Shopping Bag is Empty</td>
                </tr>
                </form> 
            </table>   
        </section>
            <div class="can mar">
                <input type="button" class="cancel" value="Cancel Order" onclick="canc('modal')">
                <div class="moda1" id="modal">
                    <p class="subhead modahead">
                        Enter your details     
                        <button onclick="rem()" class="close-button"><p style="margin:0 auto;">&times;</p></button>
                    </p>
                    <div class="content" style="text-align: left;border:1px solid grey;margin:0 auto;">
                        <form action="cancel.php" method="POST">
                            <div class="col1" style="margin:0 auto;width:280px;">
                                <div class="col">
                                   <label for="order_id">Order ID<sup style="font-size: 12px;">*</sup> </label><br>
                                   <input type="text" id="order_id" name="order_id" class="order_id"  required>
                                </div>
                                <div class="col">
                                    <label for="mobile">Mobile Number<sup style="font-size: 12px;">* </sup></label> <br>
                                    <input type="text" id="mobile" name="mobile" pattern="[0-9]{10}" class="mobie" required>
                                </div>
                            </div>
                            <div class="row">
                                <button type="submit" name="cancel" style="margin:0 auto;margin-top:20px;">Cancel Your Order</button>
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
    </body>
</html>