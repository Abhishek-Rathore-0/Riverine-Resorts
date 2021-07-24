<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <title>Riverine Resorts | ACTIVITIES</title>
        <link rel="stylesheet" href="activity.css">
        <link rel="stylesheet" href="general.css">
        <link rel = "icon" href ="rleaf1.png" type = "image/x-icon">
        <script src="activity.js"></script>
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
                <li ><a href="resort.php">RESORT</a></li>
                <li ><a href="#"class="active">ACTIVITIES</a> </li>
                <li ><a href="merchandise.php">MERCHANDISE</a></li>
                <li ><a href="reservation.php">RESERVATION</a></li>
                <li ><a href="contact.php">CONTACT US</a></li>   
            </ul>
        </nav>   
        <header>
            <div class="title">
                <div class="head">ACTIVITIES</div>
                <div class="head" style="font-size: 60px;">AND</div>
                <div class="head">EXPERIENCES</div>
            </div>
        </header>
        <section class="Atresort mar">
            <p class="subhead">AT THE RESORT</p>
            <div class="div-group">
                <div class="box1" onclick="topup('modal1')" style="background: url(tealeaf\ massage1.jpg);background-size: cover; background-repeat:no-repeat;">
                    <p class="desc">Tea leaf Massage</p>
                </div>
                <div class="modal" id="modal1">
                    <div class="modal-heading">
                        Tea leaf Massage
                        <button onclick="rem()" class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="tealeaf massage.jpg" style="width: 100%;height:100%;">
                        <div class="desc">
                            Welcome to an abode of relaxation, rejuvenation, and renewal. A trip to Munnar would be incomplete without experiencing its richAyurvedic spa culture. For city dwellers, this is an opportunity to tune out the chaos and focus merely on the serenity. Immerse yourselves in a green haventhat is the essence of Riverine Resorts. It is the place to be for those who are seeking peace and tranquility, above all else.<br>And while you&#39;re there, book yourself into Svaastha Spa for one our most unique treatments. The Tea Leaf Massage in Munnar is a holistic massagetherapy that incorporates the ingredient of tea leaves, sometimes dissolved in oil or used by itself. The scent of tea is known to pacify people’s minds, whilethe leaves itself make for a wonderful balm to soothe achy muscles. And with Munnar’s cultivation of tea, this treatment could not be a more perfect way toget acquainted with the rich customs and practices of the region.
                        </div>        
                    </div>
                </div>

                <div class="box1" onclick="topup('modal2')" style="background: url(bike.jpg);background-size: cover; background-repeat:no-repeat;">
                    <p class="desc">Bullet Bike Excursions</p>
                </div>
                <div class="modal" id="modal2">
                    <div class="modal-heading">
                        Bullet Bike Excursions in the Hills
                        <button onclick="rem()" class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="bike.jpg" style="width: 100%;height:100%;">
                        <div class="desc">
                            One of Munnar’s most famed features is its lush environs. A thousand shades of green, from lime to sage, blanket the landscapes. Topographies consisting of hills and valleys roll and tumble, as far as the eye can see. And, this is precisely what makes Kerala’s beloved destination so special at all times of the year. Ever dreamed of gliding past these very plains, wind coursing through your hair and adrenaline pumping through your veins?<br>
                            With Riverine Resorts, this is possible! One of our adventure activities include a Bullet Bike Excursion in the Hills. For all you biking enthusiasts and thrill junkies out there, this is your moment to shine. Zoom across mountain passes on a sleek bullet, watching scenery change and evolve right before your very eyes. Soak in the charming atmosphere, drink in the unadulterated peace and let the calm engulf you. As you zip past vistas, plantations, and pastures, focus on the Now.
                        </div>        
                    </div>
                </div>

                <div class="box1" onclick="topup('modal3')" style="background: url(martialarts1.jpg);background-size: cover; background-repeat:no-repeat;">
                    <p class="desc">Learning Kalaripayattu</p>
                </div>
                <div class="modal" id="modal3">
                    <div class="modal-heading">
                        Learning the Ancient Indian Martial Arts Form of Kalaripayattu
                        <button onclick="rem()" class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="martialarts.jpg" style="width: 100%;height:100%;">
                        <div class="desc">
                            A holiday should evoke certain emotions in you. Excitement. Intrigue. Fun. Fascination. Curiosity. It’s about letting go of the ordinary and embracing the novel. At Riverine Resorts, we ensure our guests are constantly surprised and delighted. Our signature offerings are designed to bring out the best in all members of the family, by offering them what is unique and enlightening. <br>
                            One experience that we’d definitely vouch for is learning about the Indian Martial Arts form of Kalaripayattu. Also known as Kalari, it is a fighting style that originated as far back as the 3rd Century BC. Deemed as the oldest form of Martial Arts, it draws from the religion of Hinduism and is based on the medicinal principles of Ayurveda. In fact, practitioners of Kalaripayattu have an intricate knowledge of the pressure points on the human body and know of healing techniques that incorporate aspects of Yoga.
                        </div>        
                    </div>
                </div>

                <div class="box1" onclick="topup('modal4')" style="background: url(teapicking.jpg);background-size: cover; background-repeat:no-repeat;">
                    <p class="desc">Tea Picking</p>
                </div>
                <div class="modal" id="modal4">
                    <div class="modal-heading">
                        Learning the Art of Tea Picking
                        <button onclick="rem()" class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="teapicking.jpg" style="width: 100%;height:100%;">
                        <div class="desc">
                            Munnar is undoubtedly one of the best places in India to experience the craft and skill of tea cultivation. Nestled in the hills of Kerala, this gorgeous region encompasses some of the most elevated tea plantations in the world. A former British summer retreat, Munnar acted as a sort of escape from the lowland heat. Its altitude, then and today, offers breath-taking views over valleys and plantations. <br>
                            Ready to witness this natural bounty, yourself? With Riverine Resorts, Munnar, you have the privilege of learning the art of tea picking whilst soaking in stunning sceneries. Let our guides take you on plantations tours through aromatic tea gardens. Observe the process of tea harvesting, which occurs by hand. Not all leaves are picked during the harvesting season, only the young and juicy ones with the bud or tip. Watch as leaves are plucked, withered, rolled, oxidized, sorted and packed.
                        </div>        
                    </div>
                </div>

                <div class="box1" onclick="topup('modal5')" style="background: url(meterlongtea.jpg);background-size: cover; background-repeat:no-repeat;">
                    <p class="desc">Meter-Long Tea</p>
                </div>
                <div class="modal" id="modal5">
                    <div class="modal-heading">
                        Meter-Long Tea
                        <button onclick="rem()" class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="meterlongtea.jpg" style="width: 100%;height:100%;">
                        <div class="desc">
                            As Indians, we understand the importance of a good cup of tea or chai. While preparations and techniques vary, the underlying love for this quintessential beverage remains strong. As a guest of Riverine Resorts, Munnar, we bring to you, cultural experiences that will colour your trip and make it more enriching. <br>
                            One such experience has got to do with the art of mixing and cooling tea for the purpose of quick serves. It is known as meter long tea, and is Kerala’s version of cutting chai. Marvel at this exceptional method that involves high amounts of expertise and proficiency. Watch the hot liquid extend into metre-long tea spouts and fall into your cup. After which, drinking it becomes all the more satisfying. Savour the taste, smooth on the tongue, rich in flavor.
                        </div>        
                    </div>
                </div>
                
                <div class="box1" onclick="topup('modal6')" style="background: url(camping.jpg);background-size: cover; background-repeat:no-repeat;">
                    <p class="desc">Overnight Camping with Bonfire</p>
                </div>
                <div class="modal" id="modal6">
                    <div class="modal-heading">
                        Overnight Camping with Bonfire
                        <button onclick="rem()" class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="camping.jpg" style="width: 100%;height:100%;">
                        <div class="desc">
                            Pitching a tent with your loved ones is a great team building exercise. Not only is it fun, it’s extremely rewarding too. Especially, when you’re doing so in nature’s backyard. At Riverine Resorts, Munnar you can engage in Overnight Camping with your family and friends. Get a taste of rustic living or we’d like to call it, living on the wild side. Picture this, a vast open sky dotted with stars. Pitch-perfect silence, with only the buzz of insects to keep you company. <br>
                            Ever dreamed of sharing tales over a crackling bonfire? Well, now is your chance to be the ultimate storyteller. Keen to play a game of Antakshari? Here’s the perfect time to show off your high notes. Overnight Camping is yet another experience that trumps our list of things to do in Munnar! Cook on open fires, count the stars, engage in invigorating conversation and bond with one another. Experiences like these come far and few, so grab them when you can!

                        </div>        
                    </div>
                </div>
            </div>
        </section>

        <section class="nearby mar">
            <p class="subhead">NEARBY</p>
            <div class="div-group">
                <div class="box1" onclick="topup('moda1')" style="background: url(kolukkumalai1.jpg);background-size: cover; background-repeat:no-repeat;">
                    <p class="desc">Kolukkumalai Sunrise Jeep Safari</p>
                </div>
                <div class="modal" id="moda1">
                    <div class="modal-heading">
                        Kolukkumalai Sunrise Jeep Safari with a Tea Factory Visit
                        <button onclick="rem()" class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="kolukkumalai.jpg" style="width: 100%;height:100%;">
                        <div class="desc">
                            Ready for one of the most exhilarating adventures of your lifetime? Riverine Resorts, Munnar offers your family a chance to go on a one-of-a-kind safari expedition. This one is in the region of Kolukkumalai, the second highest peak in South India. Enjoy a bumpy, yet fun ride with family and friends. After which, another surprise waits in store for you. Yes, we present to you an action-packed experience - the Kolukkumalai Sunrise Jeep Safari with a Tea Factory Visit. <br>Navigate rugged, diverse and bold terrains, as you journey to the peak. On your way up, you will pass exquisite tea plantations. Upon arrival, you can marvel at the world below – lovely tea estates, quaint villages, charming rural life, and more. Savouring the view from atop is perhaps one of the most rewarding things to do in Munnar. But, the most special part of this tour is the visit to Kolukkumalai Tea factory – one of the oldest tea plantations in the world and nicest places to visit in Munnar. Observe rare techniques that have been practiced for over 70 years. Sip on delicious organic tea, whilst giving in to the ethereal surroundings
                        </div>        
                    </div>
                </div>

                <div class="box1" onclick="topup('moda2')" style="background: url(neelakurinji.jpg);background-size: cover; background-repeat:no-repeat;">
                    <p class="desc">Neelkurunji flower Blooms</p>
                </div>
                <div class="modal" id="moda2">
                    <div class="modal-heading">
                        Neelkurunji flower Blooms(Seasonal)
                        <button onclick="rem()" class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="neelakurinji.jpg" style="width: 100%;height:100%;">
                        <div class="desc">
                            A sea of blooming flowers, dancing in the wind. A riot of colours ranging from indigo to violet. Fragrant, soft and romantic. Covering every inch of the hills of Munnar. Can you take a lucky guess at what we’re describing? Here’s introducing, Neelkurunji flowers, one of the most spectacular natural phenomena of the state! Exploring pastures of flowers is one of the most enchanting things to do in Munnar. <br> This gorgeous flower is said to blossom every 12 years, or so, during the months of July to October. During this time, the hills of Munnar swiftly transform into gardens of Eden – a place fit for the heavens. The striking blue image is like a page right from a storybook. Every corner spells magic. Every inch is dreamy. Kids will feel like they are part of a fairy-tale. Parents will be reminded of their childhood fantasies. Grandparents will be left speechless to have witnessed this spectacle. An extraordinary sight for human eyes, botanists describe it as the blooming of ‘Strobilanthes kunthianus’. With 40 odd varieties to its name, it makes for a visual extravaganza like no other. While the flower will only bloom in the year 2030, the region is still breath-taking to visit
                        </div>        
                    </div>
                </div>

                <div class="box1" onclick="topup('moda3')" style="background: url(naturetour.jpg);background-size: cover; background-repeat:no-repeat;">
                    <p class="desc">Munnar Nature Tour</p>
                </div>
                <div class="modal" id="moda3">
                    <div class="modal-heading">
                         Munnar Nature Tour
                        <button onclick="rem()" class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="naturetour.jpg" style="width: 100%;height:100%;">
                        <div class="desc">
                            Munnar’s varying topography and vast plains are incredible, to say the least. Exploring these landscapes, while discovering the many facets of nature, will surely leave you speechless. No matter what path you take, you will encounter mountains, valleys, plantations, and forests. Additionally, the land overflows with waterfalls, lakes and rivers. It is for this reason; Kerala is fairly deemed as ‘God’s own Country’. Trust us, at Riverine Resorts, to show you what Munnar is all about. We will ensure that you and your family have an amazing time. <br> If you’re brooding over things to do in Munnar, our Munnar Nature Tour definitely stands out! Let expert navigators guide you on a magical journey through a turquoise- green planet. Visit Blossom International Park, one of the best places to visit in Munnar for flower species spotting. Sniff the fragrant blooms, cycle along tree-lined paths and take a peaceful boat ride. Head over to Munnar Echo Point and shout out to your heart’s content. Hear your own voice reverberate over mountains and valleys! Make your way to Eravikulam National Park to spot the endangered Nilgiri Tahr. After which, a trip to Chinnar Wildlife Sanctuary is a must. Here, you can spot sandalwood forests, giant grizzly squirrels and of course, the white bison
                        </div>
                    </div>
                </div>

                <div class="box1" onclick="topup('moda4')" style="background: url(spiceplantation.jpg);background-size: cover; background-repeat:no-repeat;">
                    <p class="desc">Spice Plantations Tour</p>
                </div>
                <div class="modal" id="moda4">
                    <div class="modal-heading">
                        Spice Plantations Tour
                        <button onclick="rem()" class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="spiceplantation.jpg" style="width: 100%;height:100%;">
                        <div class="desc">
                            The most precious jewel in Munnar’s crown is undoubtedly its plantations. Lush, aromatic, bright and awe-inspiring. what’s not to love about these heavenly pieces of land? From tea to several other spices, the hills and elevated slopes are blanketed with more than 50 estates, going back decades. Rows and rows of bushes with ever-green leaves sit alongside valleys, lakes, rivers and forests. Isn’t that just a sight for sore eyes? Which is why a spice plantation tour, is one of the most amazing things to do in Munnar. <br> Head to Cinnamon Gardens Spice Plantation. It definitely tops the list of ‘places to visit in Munnar’. This charming property consists of a showcase garden along with a larger plantation that lies adjacent to it. We would recommend strolling through the entire place to glimpse all the condiments that are growing. The plantation is home to approximately 100 species of spices, herbs, ayurvedic medicinal plants and economically lucrative tropical plants. <br>               Enjoy a guided spice plantation tour and be spellbound by the sheer variety of spices originating from across the globe. Let your kids jump up with joy as they identify the correct spice, or your partner exclaim with excitement as she spots a popular household herb. At Riverine resorts, we curate the most special experiences for the whole family!
                            </div>        
                    </div>
                </div>

                <div class="box1" onclick="topup('moda5')" style="background: url(chinnar1.jpg);background-size: cover; background-repeat:no-repeat;">
                    <p class="desc">Chinnar Wildlife Sanctuary</p>
                </div>
                <div class="modal" id="moda5">
                    <div class="modal-heading">
                        Chinnar Wildlife Sanctuary
                        <button onclick="rem()" class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="chinnar.jpg" style="width: 100%;height:100%;">
                        <div class="desc">
                            Chinnar Wildlife Sanctuary is one among twelve wildlife sanctuaries in Kerala that make up the protected areas of the state. As such, it is one of the most fascinating places to visit in Munnar. More so, for the nature buffs and wildlife enthusiasts. It is the only rehabilitation centre for the Indian star tortoise. Furthermore, it is under consideration by the UNESCO World Heritage Committee for selection as a World Heritage Site. <br> Prepare for an unforgettable experience within this animal kingdom, along with your family. You have the rare opportunity to spot a repertoire of flora and fauna. The park consists of 28 mammal species, 225 bird species, 52 reptile species, 14 fish species, 15 amphibian species and 156 butterfly species! Spot the Indian leopard, Indian star tortoise, spotted deer and yellow throated bulbul. Imagine being able to glimpse creatures you’ve only read about in books or seen on the Discovery Channel. It is a surreal experience. And if you’re lucky, you may catch sight of the majestic Bengal tiger in its natural habitat. Embark on a safari ride. To reiterate, it is one of the best things to do in Munnar!
                        </div>        
                    </div>
                </div>
                
                <div class="box1" onclick="topup('moda6')" style="background: url(gudambara1.jpg);background-size: cover; background-repeat:no-repeat;">
                    <p class="desc">Gudampara Estate Night Safari</p>
                </div>
                <div class="modal" id="moda6">
                    <div class="modal-heading">
                        Gudampara Estate Night Safari
                        <button onclick="rem()" class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="gudambara.jpg" style="width: 100%;height:100%;">
                        <div class="desc">
                            One of the most rugged yet picturesque spots in Munnar is the glorious Gudampara Peak and Valley, situated on the border of Kerala and Tamil Nadu. It is definitely one of the best places to visit in Munnar, if you’re looking for panoramic views. Jagged grey mountains, dotted in emerald greenery, stretch far and wide. A deep, entwining valley boasts of rich biodiversity. And nestled within this spectacular spot is Gudampara Estate, acres and acres of land just waiting to be explored. Come, dawn or dusk, these plains sparkle with immense natural beauty.<br> Love adventure? Then, get ready to embark on the Gudampara Estate Night Safari. We’re sure that it will be one of the highlights of your trip. Parents and kids will be equally mesmerised and thrilled by this exciting excursion. It is indeed one of the best things to do in Munnar. Climb aboard an open jeep and let the wilderness guide you to places you could have never dreamed of! Drive past diverse terrains – pastures, forests, little streams… you will feel like you are in an SUV advertisement or a video game, for the ride is a little bumpy but filled with thrills.
                        </div>        
                    </div>
                </div>
            </div>
        </section>
        <section class="Child mar">
            <p class="subhead">UNFORGETTABLE EXPERIENCES FOR YOUR CHILDREN</p>
            <div class="div-group">
                <div class="box1" onclick="topup('mod1')" style="background: url(puppetmaking.jpg);background-size: cover; background-repeat:no-repeat;">
                    <p class="desc">Puppet Making Workshop</p>
                </div>
                <div class="modal" id="mod1">
                    <div class="modal-heading">
                        Puppet Making Workshop
                        <button onclick="rem()" class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="puppetmaking.jpg" style="width: 100%;height:100%;">
                        <div class="desc">
                            Riverine Resorts focus on the all-round development of its junior guests. Which is why, all activities and experiences are designed to enhance a child’s physical, emotional and social well-being. Children are given enough freedom to express themselves creatively and, in any form, they choose to – be it painting, mask-making, clay-shaping, drawing, or acting. <br>One such activity that has gained immense popularity is Puppet-Making. Puppet play helps young children develop creative skills by using their imagination across diverse areas. They help make the puppets, create a storyline for a play, define the characters and what role each one will play, create situations, and other things. This is then hosted by professional puppeteers whom the kids assist
                        </div>        
                    </div>
                </div>

                <div class="box1" onclick="topup('mod2')" style="background: url(stonepaintin.jpg);background-size: cover; background-repeat:no-repeat;">
                    <p class="desc">Stone painting</p>
                </div>
                <div class="modal" id="mod2">
                    <div class="modal-heading">
                        Stone painting
                        <button onclick="rem()" class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="stonepaintin.jpg" style="width: 100%;height:100%;">
                        <div class="desc">
                            Who would have thought that untouched pebbles, found in nature, under the blue skies could be a canvas for creativity? Yes, a simple stone can be painted in all sorts of ways and colours to bring it alive. Wear your creative hats and let your vivid imagination guide your paint brush as you learn the art of Stone Painting. Let your children turn simple stones into stellar ones with colourful strokes of their imagination. <br>Paint a cute message to gift your children or maybe an aesthetic design as a loving gesture for your spouse. These can be kept as prized possessions or set on display in your living room. Get artsy and lose track of time as you spend an entire day with the family, simply painting stones. Colourful noses, stained hands and clothes smudged in red, blue or orange are sure to be an after effect of this Stone Painting Class. Sounds too good to be true? Well, at Riverine Resorts we make such moments happen!<br>Take back home with you a souvenir, created by you and your family, and gift the same to your friends and relatives.  Now that you have learned the basics, make sure you turn this into a hobby where every lazy Sunday afternoon is reserved for a colourful Stone Painting session with the family.                       </div>        
                    </div>
                </div>

                <div class="box1" onclick="topup('mod3')" style="background: url(towelorigami.jpg);background-size: cover; background-repeat:no-repeat;">
                    <p class="desc">Learn Towel Origami</p>
                </div>
                <div class="modal" id="mod3">
                    <div class="modal-heading">
                        Learn Towel Origami
                        <button onclick="rem()" class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="towelorigami.jpg" style="width: 100%;height:100%;">
                        <div class="desc">
                            If you too have been welcomed by unusual yet beautiful shapes created out of towels in hotel rooms, such as two white swans facing each other to form a heart or a baby elephant, here is your chance to learn the same! From something as simple as Napkin Folding to creating beautiful roses, this Towel Origami Class teaches it all. Who knew that towels could do a lot more than just cleaning and drying? No wonder Towel Origami is one of the most popular things to do at our resorts. <br>Kids, why don’t you surprise your parents by folding a towel into a beautiful rose? Or maybe make them a long-necked peacock, well displayed and laying gloriously on their bed. They might just wonder if their room was visited by little elves! Husbands, how about folding a towel into a heart and giving it to your spouse? Since your heart does belong to your better half! You are also surely going to impress your friends and relatives with this new method of art creation that you just learned!
                        </div>        
                    </div>
                </div>

                <div class="box1" onclick="topup('mod4')" style="background: url(cycling.jpg);background-size: cover; background-repeat:no-repeat;">
                    <p class="desc">Cycling tours/p>
                </div>
                <div class="modal" id="mod4">
                    <div class="modal-heading">
                        Cycling tours
                        <button onclick="rem()" class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="cycling.jpg" style="width: 100%;height:100%;">
                        <div class="desc">
                            Munnar is undoubtedly one of the best places in India to experience the craft and skill of tea cultivation. Nestled in the hills of Kerala, this gorgeous region encompasses some of the most elevated tea plantations in the world. A former British summer retreat, Munnar acted as a sort of escape from the lowland heat. Its altitude, then and today, offers breath-taking views over valleys and plantations. <br>
                            Ready to witness this natural bounty, yourself? With Riverine Resorts, Munnar, you have the privilege of learning the art of tea picking whilst soaking in stunning sceneries. Let our guides take you on plantations tours through aromatic tea gardens. Observe the process of tea harvesting, which occurs by hand. Not all leaves are picked during the harvesting season, only the young and juicy ones with the bud or tip. Watch as leaves are plucked, withered, rolled, oxidized, sorted and packed.
                        </div>        
                    </div>
                </div>

                <div class="box1" onclick="topup('mod5')" style="background: url(playzone.jpg);background-size: cover; background-repeat:no-repeat;">
                    <p class="desc">Kids Play Zone</p>
                </div>
                <div class="modal" id="mod5">
                    <div class="modal-heading">
                        Kids Play Zone
                       <button onclick="rem()" class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="playzone.jpg" style="width: 100%;height:100%;">
                        <div class="desc">
                            The Play Zone is especially dedicated for toddlers, however older kids will enjoy it as well. It has a variety of toys, board games and slides. From Chess to Monopoly, the Kids Zone has it all. Our specialized babysitters can take care of your baby while you are out for some activity so that you can enjoy every experience.
                        </div>        
                    </div>
                </div>
            </div>
        </div>
        </section>

        <section class="mar faq">
            <p class="subhead">FAQs</p>
            <div class="ques">
                <div class="faq1" onclick="top1('a1')">
                        How many days do I need to experience every activity?
                        <span class="fa fa-plus a1"></span>    
                        <span class="fa fa-minus a1"></span>
                </div>
                <div class="answer sty" id="a1">
                    You can enjoy all the experiences in around 3-4 days.
                </div>
            </div>
            <div class="ques">
                <div class="faq1" onclick="top1('a2')">
                        Does the resort provide a bike for the excursions?
                        <span class="fa fa-plus a2"></span>    
                        <span class="fa fa-minus a2"></span>
                </div>
                <div class="answer sty" id="a2">
                    Our resort has a limited number of Bullet bikes for Bike Excursions which are available on first come basis.</div>
            </div>
            <div class="ques">
                <div class="faq1" onclick="top1('a3')">
                        Can kids take the stones and puppets which they make during workshops?
                        <span class="fa fa-plus a3"></span>    
                        <span class="fa fa-minus a3"></span>
                </div>
                <div class="answer sty" id="a3">
                    Yes. Kids are allowed to take home their work as souvenirs.
                </div>
            </div>
            <div class="ques">
                <div class="faq1" onclick="top1('a4')">
                        Are kids allowed in every activity/experience?
                        <span class="fa fa-plus a4"></span>    
                        <span class="fa fa-minus a4"></span>
                </div>
                <div class="answer sty" id="a4">
                    Kids are allowed in all activities except Bullet Bike Excursions.
                </div>
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