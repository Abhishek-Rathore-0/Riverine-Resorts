<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <title>Riverine Resorts | HOME</title>
        <link rel="stylesheet" href="home.css">
        <link rel="stylesheet" href="general.css">
        <link rel = "icon" href ="rleaf1.png" type = "image/x-icon">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="home.js"></script>
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
                <li ><a href="#" class="active" >HOME </a></li>
                <li ><a href="resort.php">RESORT</a></li>
                <li ><a href="activity.php">ACTIVITIES</a> </li>
                <li ><a href="merchandise.php">MERCHANDISE</a></li>
                <li ><a href="reservation.php">RESERVATIONS</a></li>   
                <li ><a href="contact.php">CONTACT US</a></li>   
            </ul>
        </nav>   
        <header>
            <div class="title">
                <div class="head">DISCOVER</div>
                <div class="head">MUNNAR</div>
                <div class="weather"><img src="weather.png" style="width: 35px; height: 30px; margin-bottom: -1px;"> 18 &#8451;</div>
            </div>
        </header>
        <section class="title_text mar">
                A cup of refreshing and fragrant tea is all it takes to make friends of strangers and Munnar hill station is one of those places known for excellent produce of this agri-food. Dews on tea-leaves resulting from the hanging misty cover over the tea garden make the appearance of this aspect of human indulgence even more beautiful. This is the first image of Munnar when its name is uttered which is later plied with the other reasons of its fame which is why it is so much loved by the routine travelers along with those who have heard it enough times to have strong desire to see it at least for once.
                At around 1600 m above the sea level in Kannan Devan Hills where the mountain streams by the names- Muthirapuzha, Nallathanni and Kundala confluence, one can confidently talk about the location of Munnar as the name of the place rightfully tells, the way it is pronounced. If actual point of confluence is to be seen on Munnar tour, it is at some distance from the town though the rivers flow through it.
                The area surrounding the place is all hills of Western Ghats, lakes, greenery, wildlife, falls, etc allowing gaps in the consciousness to be filled by the silence of exhilaration. Such musings are impossible when mind is troubled by worries and infested with load of work, which is why Munnar in beautiful Idukki district offers much-looked-for respite.
                The place divided in Old Munnar and Munnar is almost self containing when one plans vacation in south- there is past to learn from, present to ponder and enjoy and future that could be visualized from what present stands for and ready to extend. And there is much over and above in the nearby villages and town included in Munnar travel package to make the experience of Munnar as complete as it can be.
                A hill destination worth setting of eyes upon!
        </section>
        
        <section class="ptv mar">
            <p class="subhead">Places to Visit</p>
            <div class="div-group">
                <div class="box1">
                    <h3 class="h3">Echo Point</h3>
                    <img src="echo_point.jpg" class="im1">
                    <p class="desc">
                        Located at an altitude of 600 ft. and at a distance of about 15 kilometres from Munnar, Echo Point is <button onclick="topup('modal1')">..read more</button>  
                    </p>
                </div>
                <div class="modal" id="modal1">
                    <div class="modal-heading">
                        Echo Point
                        <button onclick="rem()" class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="echo_point.jpg">
                        Located at an altitude of 600 ft. and at a distance of about 15 kilometres from Munnar, Echo Point is situated right in the lap of a quaint lake and misty hills covered with lush green trees. As the name suggests, this place is well known for its enthralling illustration of the phenomenon of echoing. As you scream, it is fun to hear your voice reverberate around the attraction again and again.
                        The unique beauty of the Echo Point marks the confluence of three mountain ranges, Mudrapuzha, Nallathanni, and Kundala. Situated on the banks of a lake, the calm and serenity of this place are enchanting. You can indulge in a peaceful walk around the gentle slopes of the hills here, or go for boating in the serene waters of the lake. Echo point is a paradise for birdwatchers, as many native birds can be spotted here. You can also see a few shops on the periphery of the attraction selling local items of the hill station.  You will find the rare Neelakurinji flowers or Strobilanthes that blooms and enhances its beauty.  On your visit to Munnar, Echo Point should be on your to-do list.
                    </div>
                </div>

                <div class="box1">
                    <h3 class="h3">Photo Point</h3>
                    <img src="photo_point.jpg" class="im1">
                    <p class="desc">
                        Photo Point is this picturesque site perched atop the low rolling slopes and undulating plains of Nilgiris<button onclick="topup('modal2')">..read more</button>  
                    </p>
                </div>
                <div class="modal" id="modal2">
                    <div class="modal-heading">
                        Photo Point
                        <button onclick="rem()" class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="photo_point.jpg">
                        Photo Point is this picturesque site perched atop the low rolling slopes and undulating plains of Nilgiris in Munnar. In the backdrop of the stretches of tea gardens typical to this region of the country, this point serves as an excellent photographic opportunity; as it is clear from the name itself.
                        Apart from its scenic beauty and lush green tea gardens, it is also known for aromatic spices. The route up to the spot is quite spectacular as well and makes the entire journey worth it. Photo Point is a famous sightseeing, a picnic spot and a filming destination, and rightfully so. When in Munnar, make sure that you do not miss this stunning beauty!
                    </div>
                </div>
               
                <div class="box1">
                    <h3 class="h3">Atukkad Waterfalls</h3>
                    <img src="atukkad_waterfall.jpg" class="im1">
                    <p class="desc">
                        Nestled 2 km away from Munnar amidst beautiful hills and lush green jungles, <button onclick="topup('modal3')">..read more</button>  
                    </p>
                </div>
                <div class="modal" id="modal3">
                    <div class="modal-heading">
                        Atukkad Waterfalls
                        <button onclick="rem()" class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="atukkad_waterfall.jpg">
                        Nestled 2 km away from Munnar amidst beautiful hills and lush green jungles, this pristine waterfall makes for romantic escapades and picnics site. However, the road to Atukkad is very narrow and needs a lot of experience to drive on
                    </div>
                </div>
                <div class="box1">
                    <h3 class="h3">Top Station</h3>
                    <img src="top_station.jpg" class="im1">
                    <p class="desc">
                        Top Station is located about 32 kilometres away from Munnar, on the border of Kerala<button onclick="topup('modal4')">..read more</button>  
                    </p>
                </div>
                <div class="modal" id="modal4">
                    <div class="modal-heading">
                        Top Station
                        <button onclick="rem()" class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="top_station.jpg">
                        Top Station is located about 32 kilometres away from Munnar, on the border of Kerala and Tamil Nadu. It the highest point in Munnar (1700 metres) to enjoy the panoramic view of the majestic Western Ghats and valley of Theni District of Tamil Nadu. Top Station with its low-lying clouds and abundant foliage, is an excellent example of natural beauty.
                        Top Station is historically known as a transhipment point for the delivery of tea that Munnar produced to Tamil Nadu and got its name as it was the uppermost railway station in Kundala Valley. You can still find the ruins of ropeway lines.
                        Every 12 years, Top Station provides the view to one of the most exotic sightings and beautiful miracles of nature - Neelarkunji. The hills in and around it are laden with the shrub Neelakurinji, and once in every 12 years, these shrubs blossom with blue flowers, leaving the mountains with a coat of blue. Top Station is also famous for its tea gardens. You can also interact with the tea pickers and get a taste of the regional culture and lifestyle.

                    </div>    
                </div>
                
                <div class="box1">
                    <h3 class="h3">Pothamedu View Point</h3>
                    <img src="pothamedu.jpeg" class="im1">
                    <p class="desc">
                        Pothamedu View Point, situated 5 km off Munnar, is adorned with <button onclick="topup('modal5')">..read more</button>  
                    </p>
                </div>
                <div class="modal" id="modal5">
                    <div class="modal-heading">
                        Pothamedu View Point
                        <button onclick="rem()" class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="pothamedu.jpeg">
                        Pothamedu View Point, situated 5 km off Munnar, is adorned with stretching hills and lush green mountains. One can witness the spectacular wide views of tea, coffee and cardamom plantations of the area. It is an ideal place to witness beautiful sunrises and sunsets. Idukki Arch Dam which is about 60 kms away is visible from this viewpoint on a clear day.        
                   </div>
                </div>

                <div class="box1">
                    <h3 class="h3">Tata Tea or KDHP Museum</h3>
                    <img src="tea_museum.jpg" class="im1">
                    <p class="desc">
                        Located in the Nallathanni Estate of Tata Tea around 2 km from Munnar<button onclick="topup('modal6')">..read more</button>  
                    </p>
                </div>
                <div class="modal" id="modal6">
                    <div class="modal-heading">
                        Tata Tea or KDHP Museum        
                       <button onclick="rem()" class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="tea_museum.jpg">
                        Located in the Nallathanni Estate of Tata Tea around 2 km from Munnar, the KDHP Museum showcases a variety of antiquities, the most famous being the burial urn excavated from the vicinity of Periakanal Estate, dating back to 2nd century AD. A 30 minute documentary feature by the museum will take you through a historical sojourn of the place. Visitors then proceed to the factory to understand how tea is processed.       
                   </div>
                </div>

                <div class="box1">
                    <h3 class="h3">Eravikulam National Park</h3>
                    <img src="eravikulum.png" class="im1">
                    <p class="desc">
                        Located a 45 - minute drive away from Munnar, the Eravikulam National Park houses  <button onclick="topup('modal7')">..read more</button>  
                    </p>
                </div>
                <div class="modal" id="modal7">
                    <div class="modal-heading">
                        Eravikulam National Park        
                        <button onclick="rem()" class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="eravikulum.png">
                        Located a 45 - minute drive away from Munnar, the Eravikulam National Park houses a rich and diverse variety of flora and fauna and is a UNESCO world heritage site. Also known as Rajamalai Wildlife Sanctuary, this place was managed as a game reserve by the Kanan Devan Hills Produce Company before 1971. The control was taken over by the Karnataka Government in 1971, and it was declared a national park in 1978. Elephant, Nilgiri langur, Nilgiri marten, Atlas moth (largest in the world), lion-tailed macaque, small-clawed otter and a rare tiger or leopard are some of the main animal species that can be spotted here.      
                   </div>
                </div>

                <div class="box1" >
                    <h3 class="h3">Wonder Valley Adventure and Amusement Park</h3>
                    <img src="wondervalley.jpg" class="im1">
                    <p class="desc">
                        Wonder Valley Adventure and Amusement Park is an eco-friendly park located<button onclick="topup('modal8')">..read more</button>  
                    </p>
                </div>
                <div class="modal" id="modal8">
                    <div class="modal-heading">
                        Wonder Valley Adventure and Amusement Park        
                        <button onclick="rem()" class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="wondervalley.jpg">
                        Wonder Valley Adventure and Amusement Park is an eco-friendly park located in the midst of nature. The park retains the natural landscape of the region to take its guests closer to nature and offers a thrilling experience through its adventure trails and activities. It is a perfect attraction for adventure freaks and for those who want to face and get rid of their fears. There's no age bar and the activities are designed for children, as well as for adults.        
                   </div>
                </div>

                <div class="box1">
                    <h3 class="h3">Trekking in Munnar</h3>
                    <img src="trekking.jpg" class="im1">
                    <p class="desc">
                        Perched atop the undulating peaks of the great range of Sahyadri, a World<button onclick="topup('modal9')">..read more</button>  
                    </p>
                </div>
                <div class="modal" id="modal9">
                    <div class="modal-heading">
                        Trekking in Munnar     
                        <button onclick="rem()" class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="trekking.jpg">
                        Perched atop the undulating peaks of the great range of Sahyadri, a World Heritage Site declared by UNESCO, Munnar is a mesmerising hill station in Kerala that offers a plethora of trekking trails for the trekkers to explore. The whole range is covered with carpets of greenery, low slopes covered with some of the world's highest tea plantations and rainforests rich in biodiversity, endemics and spice plantations and hills with their crests hidden behind a blanket of fog along with stretches of rugged terrains.
                        You can choose among the many existing trek routes, some of them very popular, some not so known. There are some which can be done in a day, and some take longer as the routes are interconnected to form a web of trek trail for a more adventurous and exciting experience for the trekkers. The treks vary in difficulty, but they offer equal exuberance nonetheless.
                    </div>
                </div>
        </section>

        <<section class="ask mar">
            <form action="question.php" method=post >
                <p class="subhead">Ask a Question</p>
                <div class="title_text">Ask a question from the travellers who have experience</div>
                <div class="fle">
                    <div class="im"><img src="question1.jpg" alt=""></div>
                    <div class="tex">
                        <textarea id="question" name="question" rows="6" cols="50" style="display: block; margin:10px 0;" placeholder="Write your question here.."></textarea>
                        <button onclick="ques('modal10')">Ask Question</button>
                    </div>
                </div>
                <div class="modal1" id="modal10">
                    <div class="modal-heading">
                        Enter your details     
                        <button onclick="rem()" class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                            <label for="name">Name<sup style="font-size: 12px;">*</sup> </label>
                            <input type="text" id="name" class="name" pattern="[A-Za-z ]*" name="name" required><br>
                        <label for="email">Email<sup style="font-size: 12px;">* </sup></label>
                            <input type="email" id="email" class="email" name="email" required>
                            <button type=submit name="submit">Submit</button>
                        
                    </div>
                </div>
            </form>
        </section>  	
        <section class="review mar">
            <form action="review.php" method="POST">
            <p class="subhead">Munnar Reviews</p>
            <div class="title_text">Share your valuable opinions about Munnar</div>
            <div class="fle">
                <div class="im"><img src="review1.png" alt=""></div>
                <div class="tex">
                    <textarea id="review" name="review" rows="6" cols="50" style="display: block;margin:10px 0; " placeholder="Write your review here.."></textarea>
                    <button onclick="re('modal11')">Submit Review</button>
                </div>
            </div>
            <div class="modal1" id="modal11">
                <div class="modal-heading">
                    Enter your details     
                    <button onclick="rem()" class="close-button">&times;</button>
                </div>
                <div class="modal-body">
                        <label for="name">Name<sup style="font-size: 12px;">*</sup> </label>
                        <input type="text" id="name" class="name" pattern="[A-Za-z ]*"name="name" required><br>
                    <label for="email">Email<sup style="font-size: 12px;">* </sup></label>
                        <input type="email" id="email" class="email" name="email" required>
                        <button type="submit" name="submit">Submit</button>
                   
                </div>
            </div>
            </form>
        </section>
        <section class="review mar">
            <p class="subhead">Your Reviews</p>
            <div class="title_text">
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
        
                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password,"riverineresorts");

                    $sql="SELECT review,name FROM reviews order by sno desc limit 3";
                    $result=mysqli_query($conn,$sql);
                    echo "<div class='main'>";
                    while ($row=mysqli_fetch_assoc($result))
                    {   
                        $r=$row["review"];
                        $na=$row["name"];
                        echo "<div class='rev'>
                                <img src='quotes.png' class='im'>
                                <div class='rev1'>
                                $r 
                                <p>-$na<p></div>
                              </div>";
                    }
                    echo "</div>";
                    mysqli_close($conn);
                ?>
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
                </div>
        </footer>
        <div id="overlay" onclick="rem()"></div>
    </body>
</html>