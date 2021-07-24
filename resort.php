<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <title>Riverine Resorts | RESORT</title>
        <link rel="stylesheet" href="resort.css">
        <link rel="stylesheet" href="general.css">
        <link rel="stylesheet" href="lightbox.min.css">
        <link rel = "icon" href ="rleaf1.png" type = "image/x-icon">
        <script src="home.js"></script>
        <script src="lightbox-plus-jquery.min.js"></script>
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
                <li ><a href="home.php" >HOME </a></li>
                <li ><a href="#"class="active">RESORT</a></li>
                <li ><a href="activity.php">ACTIVITIES</a> </li>
                <li ><a href="merchandise.php">MERCHANDISE</a></li>
                <li ><a href="reservation.php">RESERVATION</a></li>
                <li ><a href="contact.php">CONTACT US</a></li>   
            </ul>
        </nav>   
        <header>
            <div class="title">
                <div class="head">RIVERINE RESORTS</div>
                <div class="head">Munnar,Kerala</div>
            </div>
        </header>

        <section class="about mar">
            <p class="subhead">About Us</p>
            <div class="title_text">
                Lush landscapes, vast skies and endless lagoons make Munnar one of the most enchanting holiday destinations in India. A trip to Riverine Retreat resort is the family vacation you have all been waiting for! This is where love, happiness and fun meet – amidst hills and valleys.
            </div>
        </section>
        
        <section class="amenities mar">
            <p class="subhead">Resort Amenities</p>
            <div class="title_text">
                <ul style="list-style-type:circle">
                    <li>Amphitheatre</li>
                    <li>Baggage Storage</li>
                    <li>Banqueting</li>
                    <li>Complimentary Wi-Fi in Lobby & Restaurant</li>
                    <li>Concierge</li>
                    <li>Fitness Centre</li>
                    <li>Holiday Activity Centre</li>
                    <li>In-Room Dining</li>
                    <li>Laundry</li>
                    <li>Multi Cuisine Restaurant</li>
                    <li>Parking (Based on availability)</li>
                    <li>Power Backup</li>
                    <li>Spa</li>
                    <li>Travel Desk</li>
                  </ul>
            </div>
        </section>
        
        <section class="room mar">
            <p class="subhead">Rooms</p>
            <p class="title_text">Wake up to chiselled tea plantations wrapped around the rolling hills of Munnar. The magnificent Riverine Resort is right in the middle of picturesque scenery. Spacious rooms and plush, soft beds beg you to luxuriate the day away. And you well can, for the breath-taking views will leave you spellbound!</p>
            <div class="div-group">
                <div class="box1" onclick="topup('modal1')" style="background: url(classic1.jpeg);background-size: cover; background-repeat:no-repeat;">
                    <h3 class="h3">Classic Room</h3>
                    <p class="desc">2 adults<br>
                    255 sq.ft.</p>
                </div>
                <div class="modal" id="modal1">
                    <div class="modal-heading">
                        Classic Room (Cost-&#x20B9; 1500 per night)
                        <button onclick="rem()" class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="classic1.jpeg" style="width: 100%;height:100%;">
                        <div class="desc">
                            <p style="font-size: 20px;font-weight: bold;">Amenities</p>
                            <ul style="list-style-type:none">
                                <li>Air Conditioning/Heating</li>
                                <li>Ironing Board on Request</li>
                                <li>LCD/LED TV</li>
                                <li>Mini-Fridge</li>
                                <li>Safe Locker</li>
                                <li>Telephone</li>
                            </ul>
                        </div>        
                    </div>
                </div>
                
                <div class="box1" onclick="topup('modal2')" style="background: url(premium1.jpeg);background-size: cover; background-repeat:no-repeat;">
                    <h3 class="h3">Premium Room</h3>
                    <p class="desc">2 adults 1 child<br>
                        325 sq.ft.</p>
                </div>
                <div class="modal" id="modal2">
                    <div class="modal-heading">
                        Premium Room (Cost-&#x20B9; 2500 per night)
                        <button onclick="rem()" class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="premium1.jpeg" style="width: 100%; height:100%;">
                        <div class="desc">
                            <p style="font-size: 20px;font-weight: bold;">Amenities</p>
                            <ul style="list-style-type:none">
                                <li>Air Conditioning/Heating</li>
                                <li>Dinner Plates/ Utensils</li>
                                <li>Ironing Board on Request</li>
                                <li>LCD/LED TV</li>
                                <li>Microwave</li>
                                <li>Mini-Fridge</li>
                                <li>Safe Locker</li>
                                <li>Telephone</li>
                            </ul>
                        </div>  
                    </div>
                </div>

                <div class="box1" onclick="topup('modal3')" style="background: url(suite3.jpeg);background-size: cover; background-repeat:no-repeat;">
                    <h3 class="h3">Privilege Suite</h3>
                    <p class="desc">2 adults 2 children<br>
                    550 sq. ft.</p>
                </div>
                <div class="modal" id="modal3">
                    <div class="modal-heading">
                        Privilege Suite (Cost-&#x20B9; 4000 per night)
                        <button onclick="rem()" class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="suite1.jpeg" style="width: 100%;height: 100%;">
                        <div class="desc">
                            <p style="font-size: 20px;font-weight: bold;">Amenities</p>
                            <ul style="list-style-type:none">
                                <li>Air Conditioning/Heating</li>
                                <li>Dinner Plates/ Utensils</li>
                                <li>Ironing Board on Request</li>
                                <li>LCD/LED TV</li>
                                <li>Microwave</li>
                                <li>Mini-Fridge</li>
                                <li>Safe Locker</li>
                                <li>Tea/Coffee Maker</li>
                                <li>Telephone</li>
                            </ul>
                        </div>  
                    </div>
                </div>
            </div>
        </section>

        <section class="dining mar">
            <p class="subhead">Dining</p>
            <div class="flex1">
                <div class="title_text" style="margin-right: 30px;">
                    Planter's Kitchen is the in-house restaurant at Riverine Resorts, Munnar where age-old preparations meet innovative, modern blends. Come, enjoy our warm hospitality, charming interiors, vibrant menus and unforgettable dining experiences. Select between candlelight dinners, riverside picnics, royal banquets, bonfire meals, treetop dining and so much more! We have something to suit every palate and preference. So, let us indulge your taste buds like never before. The best part is, we place special emphasis on procuring fresh, organic produce from local farmers, to whip up the most healthy and delicious foods. We also get to know your family’s needs better, so that we can recommend the best meal options. Are you ready to be wooed?    
                </div>
                <img src="restaurant.jpg" width="580px" height="350px">
            </div>
        </section>
        
        <section class="package mar">
            <p class="subhead">Packages</p>
            <p class="title_text" style="margin:10px 0;">Riverine Resorts offer packages at a discounted price. These packages can be booked in-person only.</p>
            <div class="flex1">
                <div class="title_text p1">
                    <p style="font-size: 25px; font-weight: bold; margin-bottom: 2px;">Honeymoon Package(Cost-&#x20B9; 9000)</p>
                    <ul style="list-style-type:circle">
                        <li>1 Premium Room</li>
                        <li>3N/4D</li>
                        <li>All In-resort activities included</li>
                        <li>Dinner at Planter’s Kitchen</li>
                        <li>Complimentary Breakfast in room</li>
                    </ul>
                </div>
                <div class="title_text p2">
                    <p style="font-size: 25px; font-weight: bold; margin-bottom: 2px;">Family package(Cost-&#x20B9; 14000)</p>
                    <ul style="list-style-type:circle">
                        <li>1 Privilege Suite</li>
                        <li>3N/4D</li>
                        <li>All In-resort activities included</li>
                        <li>All kids Activities included</li>
                        <li>Free access to Kids Lounge </li>
                        <li>Dinner at Planter’s Kitchen</li>
                        <li>Complimentary Breakfast in room</li>
                    </ul>
                </div>
            </div>
        </section>
        
        <section class="about mar">
            <p class="subhead">Gallery</p>
            <div class="gallery">
                <a href="gallery1.jpg" data-lightbox="mygallery"><img src="gallery1.jpg"></a>
                <a href="gallery2.jpg" data-lightbox="mygallery"><img src="gallery2.jpg"></a>
                <a href="gallery3.jpg" data-lightbox="mygallery"><img src="gallery3.jpg"></a>
                <a href="gallery4.jpeg" data-lightbox="mygallery"><img src="gallery4.jpeg"></a>
                <a href="gallery5.jpg" data-lightbox="mygallery"><img src="gallery5.jpg"></a>   
            </div>
        </section>

        <section class="mar faq">
            <p class="subhead">FAQs</p>
            <div class="ques">
                <div class="faq1" onclick="top1('a1')">
                        Is parking available at Riverine Resorts?
                        <span class="fa fa-plus a1"></span>    
                        <span class="fa fa-minus a1"></span>
                </div>
                <div class="answer sty" id="a1">
                   Yes
                </div>
            </div>
            <div class="ques">
                <div class="faq1" onclick="top1('a2')">
                        How do I reach Riverine Resorts Munnar?
                        <span class="fa fa-plus a2"></span>    
                        <span class="fa fa-minus a2"></span>
                </div>
                <div class="answer sty" id="a2">
                    To reach this resort in Munnar, travellers can avail of flights to Cochin International Airport or trains to Kochi or Ernakulam railway station. Furthermore, buses are available from KSRTC.
                </div>
            </div>
            <div class="ques">
                <div class="faq1" onclick="top1('a3')">
                    How many places can you visit in Munnar in one day?
                    <span class="fa fa-plus a3"></span>    
                    <span class="fa fa-minus a3"></span>
                </div>
                <div class="answer sty" id="a3">
                    The number of places you visit in one day will depend upon your interests and energy levels. If you’re looking for a relaxing time, try minimising sight-seeing to 1 or 2 places a day and enjoy the resort offerings instead.
                </div>
            </div>
            <div class="ques">
                <div class="faq1" onclick="top1('a4')">
                    What is the best time to visit the Resort?
                    <span class="fa fa-plus a4"></span>    
                    <span class="fa fa-minus a4"></span>
                </div>
                <div class="answer sty" id="a4">
                    Come sunshine, rain or mist, Club Mahindra Munnar resort is equally mesmerising. With that being said, the period of September to March is the best time to visit Munnar due to pleasant weather conditions. April to June is a little warm, but one can still enjoy Munnar during this season. July to August experiences heavy rainfall which could hamper travel plans, but the resort is especially magical at this time.
                </div>
            </div>
            <div class="ques">
                <div class="faq1" onclick="top1('a5')">
                    What are the different languages spoken by the staff at Club Mahindra Munnar?
                    <span class="fa fa-plus a5"></span>    
                    <span class="fa fa-minus a5"></span>
                </div>
                <div class="answer sty" id="a5">
                    The staff at the Munnar resort can speak Malayalam, Tamil, Hindi & English    
             </div>
        </section>
        <footer>
            <section>
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
                </div>
            </section>
        </footer>
        <div id="overlay" onclick="rem()"></div>
    </body>
</html>