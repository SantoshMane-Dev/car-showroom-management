 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="car_showroom.css?ver=1.2">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <title>Your Car Showroom</title>
</head>

<body>
    <!-- Headersection starts  here -->

    <header class="header">

        <i id="menu-btn" class="fa-solid fa-bars"></i>

        <!-- <button id="menu-btn" onclick="hide()">
            Menu
            <i class="fa-solid fa-bars"></i>
        </button> -->


        <a href="#" class="logo"><span>BCA</span>GADDIWALA</a>

        <nav class="navbar" id="navbar">
            <a href="#Home">Home</a>
            <a href="#Vehicles">Vehicles</a>
            <a href="#featured">featured cars</a>
            <a href="#services">Services</a>
            <a href="#review">Reviews</a>
            <a href="#contact">Contact</a>
        </nav>

        <div id="login-btn">
            <button class="invis"></button>
            <i style='font-size:24px' class='fas'>&#xf406;</i>
            <!-- <i class='fas'>&#xf406;</i> -->
        </div>

    </header>

    <!-- Headersection ends -->



<!-- LOGIN FORM STARTS -->

<div class="login-form">
    <span id="close-login-form" class="fa-solid fa-xmark"></span>
    <form action="login.php" method="post">
        <h3>User login</h3>
        <input type="email" name="email" placeholder="E-mail" class="box">
        <input type="password" name="password" placeholder="Password" class="box">
        <p>Forgot your password? <a href="#">Click here</a></p>
        <input type="submit" name="login" value="Login" class="btn">
        <p>Or login with:</p>
        <div class="buttons">
            <a href="https://accounts.google.com/v3/signin/identifier?hl=en-gb&ifkv=ARZ0qKLbMjotNjlg7CQtXfTObYtMMFisF0uOc6J_JEyEvJGvS3TmcVwKJNktBUjNIfQQ1bnIRYeNRw&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S1410157297%3A1713072202604605&theme=mn&ddm=0" class="btn">Google</a>
            <a href="https://www.facebook.com/login/" class="btn">Facebook</a>
        </div>
        <p>Don't have an account? <a href="register.php" id="create-btn">Create account</a></p>
    </form>
    <?php if (!empty($errorMessage)) { ?>
        <p class="error-message"><?php echo $errorMessage; ?></p>
    <?php } ?>
</div>

<!-- LOGIN FORM ENDS -->


<!-- REGISTRATION FORM STARTS -->

<div class="create-form">
    <span id="create-form-close" class="fa-solid fa-xmark"></span>
    <form action="register.php" method="post">
        <h3>Create Account</h3>
        <input type="text" name="username" placeholder="Username" class="box">
        <input type="email" name="email" placeholder="Email" class="box">
        <input type="number" name="phone" placeholder="Phone" class="box">
        <input type="text" name="location" placeholder="Location" class="box">
        <input type="password" name="password" placeholder="Password" class="box">
        <input type="password" name="confirm_password" placeholder="Confirm Password" class="box">
        <input type="submit" name="signup" value="Register" class="btn">
        <p>Already have an account? <a href="login.php" id="login2">Login here</a></p>
    </form>
</div>

<!-- REGISTRATION FORM ENDS -->

    <!-- HOME SECTION START -->


    <section class="home" id="Home">
        <!-- data-* attribute gives ability to acces stored data in all html elements. wecan use this data attribute directly in Js  -->

        <h1 class="home-page" data-speed="-2" style="transform: scale(.5)">Get your desired car</h1>
        <img src="https://i.pinimg.com/originals/cd/f0/32/cdf032bbcd43dafc9ed373dab7de0adb.png" alt="" class="home-page"
            data-speed="5">
        <a href="#Vehicles" class="home-page" data-speed="7">Explore cars</a>

    </section>

    <!-- HOME SECTION ENDS -->

    <!-- ICONS TO TELL MORE ABOUT OUR Showroom  -->

    <section class="icons-container">
        <div class="icons">
            <i class="fa fa-home"></i>
            <div class="content">
                <h3>50+</h3>
                <p>branches</p>
            </div>
        </div>

        <div class="icons">
            <i class="fa fa-car"></i>
            <div class="content">
                <h3>690+</h3>
                <p>cars sold</p>
            </div>
        </div>

        <div class="icons">
            <i class="fa fa-users"></i>
            <div class="content">
                <h3>490+</h3>
                <p>happy clients</p>
            </div>
        </div>

        <div class="icons">
            <i class="fa fa-car"></i>
            <div class="content">
                <h3>30+</h3>
                <p>new cars</p>
            </div>
        </div>
    </section>

    <!-- VEHICLES SECTION STARTS -->

    <section id="Vehicles" class="Vehicles">

        <h1 class="heading">Demanded <span> Vehicles</span></h1>

        <div class="swiper vehicles-s">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="images/XUV 700.png" alt="">
                    <div class="content">
                        <h3>XUV 700</h3>
                        <div class="price"><span>Price: </span> 14-27 lakh/-</div>
                        <p>
                            new
                            <span class="fas fa-circle"></span>year
                            <span class="fas fa-circle"></span>transmition
                            <span class="fas fa-circle"></span>fuel type
                            <span class="fas fa-circle"></span>max speed
                        </p>
                        <a href="https://youtu.be/0QJNibP_Vpc?si=RVE9BxjEl2qVVRVv" class="btn">CHECKOUT</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="images\TornadoBlue-0-1.webp" alt="">
                    <div class="content">
                        <h3>Tata Punch</h3>
                        <div class="price"><span>Price: </span>10.10 lakh /-</div>
                        <p>
                            new
                            <span class="fas fa-circle"></span>year
                            <span class="fas fa-circle"></span>transmition
                            <span class="fas fa-circle"></span>fuel type
                            <span class="fas fa-circle"></span>max speed
                        </p>
                        <a href="https://youtu.be/eos4GBavUDk?si=IIqf-0Shuk2xDAUK" class="btn">CHECKOUT</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="images\Mahindra-Scorpio.png"
                        alt="">
                    <div class="content">
                        <h3> MAHINDRA SCORPIO</h3>
                        <div class="price"><span>Price: </span> 15-24 lakh /-</div>
                        <p>
                            new
                            <span class="fas fa-circle"></span>year
                            <span class="fas fa-circle"></span>transmition
                            <span class="fas fa-circle"></span>fuel type
                            <span class="fas fa-circle"></span>max speed
                        </p>
                        <a href="https://youtu.be/4XrfUu0QMG8?si=NxBisjQCJUbiz8Db" class="btn">CHECKOUT</a>
                    </div>
                </div>
  
                <div class="swiper-slide box">
                    <img src="images\SunlitYellow-0.webp" alt="">
                    <div class="content">
                        <h3>TATA Harrier</h3>
                        <div class="price"><span>Price: </span> 14-25 lakh/-</div>
                        <p>
                            new
                            <span class="fas fa-circle"></span>year
                            <span class="fas fa-circle"></span>transmition
                            <span class="fas fa-circle"></span>fuel type
                            <span class="fas fa-circle"></span>max speed
                        </p>
                        <a href="https://youtu.be/BTOJSnSX0Bo?si=zcvrOdeIitrF3-sD" class="btn">CHECKOUT</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="images\color_range_688x360_red.webp" alt="">
                    <div class="content">
                        <h3>Maruti Suzuki Alto</h3>
                        <div class="price"><span>Price: </span> 5-8 lakh/-</div>
                        <p>
                            new
                            <span class="fas fa-circle"></span>year
                            <span class="fas fa-circle"></span>transmition
                            <span class="fas fa-circle"></span>fuel type
                            <span class="fas fa-circle"></span>max speed
                        </p>
                        <a href="https://youtu.be/-wsKvFwQTu4?si=0euldkB9OdfNNvdY" class="btn">CHECKOUT</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="images\mahindra-xuv300-more-features-500x500-500x500-500x500.webp" alt="">
                    <div class="content">
                        <h3>XUV 300</h3>
                        <div class="price"><span>Price: </span>8 lakh /-</div>
                        <p>
                            new
                            <span class="fas fa-circle"></span>year
                            <span class="fas fa-circle"></span>transmition
                            <span class="fas fa-circle"></span>fuel type
                            <span class="fas fa-circle"></span>max speed
                        </p>
                        <a href="https://youtu.be/Pelx540jnL8?si=Tdy232yd0m2iBxBa" class="btn">CHECKOUT</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="images\model-tiago-seo-image-1725968482330.webp"
                        alt="">
                    <div class="content">
                        <h3>TIAGO.EV</h3>
                        <div class="price"><span>Price: </span> 7-10 lakh/-</div>
                        <p>
                            new
                            <span class="fas fa-circle"></span>year
                            <span class="fas fa-circle"></span>transmition
                            <span class="fas fa-circle"></span>fuel type
                            <span class="fas fa-circle"></span>max speed
                        </p>
                        <a href="https://youtu.be/Lt1Kf7laVXY?si=buf-T3jzVFgIrqWw" class="btn">CHECKOUT</a>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>

        </div>

    </section>

    <!-- VEHICLEs SECTION ENDS -->


    <section class="featured" id="featured">
        <h1 class="heading"><span>featured </span> cars</h1>

        <div class="swiper featured-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <img src="images\2f6962914d29a5dcd89776405771f0c8.png"
                        alt="">
                    <h3>RANGE ROVER</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price">Rs 68,00,000/-</div>
                    <a href="https://youtu.be/lanEmqMnwTg?si=BQDZPhJrQWsRA4mf" class="btn">CHECKOUT</a>
                </div>

                <div class="swiper-slide box">
                    <img src="images\152-1520163_tata-zest-front-side-tata-zest-black-colour.png" alt="">
                    <h3>TATA ZEST</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price">Rs 28,00,000/-</div>
                    <a href="https://youtu.be/VWlxLsYvUm8?si=g5DDv5xofRzqdJ6_" class="btn">CHECKOUT</a>
                </div>


                <div class="swiper-slide box">
                    <img src="images\Mahindra_Thar_Green_1716261507027_1716261515527.webp"
                        alt="">
                    <h3>MAHINDRA THAR</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">Rs 18,00,000/-</div>
                    <a href="https://youtu.be/l5i7LgAKkKI?si=ARK0Z-SffCBtYqM0" class="btn">CHECKOUT</a>
                </div>

                <div class="swiper-slide box">
                    <img src="images\model-tiago-seo-image-1725968482330.webp"
                        alt="">
                    <h3>TIAGO.EV</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>

                    </div>
                    <div class="price">Rs 23,00,000/-</div>
                    <a href="https://youtu.be/Lt1Kf7laVXY?si=buf-T3jzVFgIrqWw" class="btn">CHECKOUT</a>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

        <div class="swiper featured-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <img src="https://i.pinimg.com/originals/24/76/4f/24764fa2649f3394f7ba2ad89fe53bc3.png" alt="">
                    <h3>LAND CRUISER</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">Rs 60,00,000/-</div>
                    <a href="https://youtu.be/pPmAq-aRs08?si=CFbrx4lxaJZ3SzVZ" class="btn">CHECKOUT</a>
                </div>

                <div class="swiper-slide box">
                    <img src="https://static.vecteezy.com/system/resources/previews/017/281/511/non_2x/toyota-fortuner-top-model-2755cc-automatic-transmission-turbo-engine-6-speed-gear-free-png.png"
                        alt="">
                    <h3>TOYOTA FORTUNER</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">Rs 35,00,000/-</div>
                    <a href="https://youtu.be/SGOZeEkjhg0?si=d0gldnTA5Zef_iI3" class="btn">CHECKOUT</a>
                </div>


                <div class="swiper-slide box">
                    <img src="images\hc-img-dsc-064.webp"
                        alt="">
                    <h3>MG HECTOR</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>

                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">Rs 18,00,000/-</div>
                    <a href="https://youtu.be/AMIQaBsLSWA?si=IPkXH6c3vf30vxi0" class="btn">CHECKOUT</a>
                </div>

                <div class="swiper-slide box">
                    <img src="images\Suzuki-Baleno-Transparent-Image.png"
                        alt="">
                    <h3>SWIFT BALENO</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fa-regular fa-star-sharp"></i>
                    </div>
                    <div class="price">Rs 30,00,000/-</div>
                    <a href="https://youtu.be/DbFj_LwCEBE?si=B5snTbtlSrHovsQm   " class="btn">CHECKOUT</a>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </section>



    <section id="services" class="services">
        <h1 class="heading">Services</h1>
        <div class="box-container">
            <div class="box">
                <i class="fas fa-car"></i>
                <h3>Car Selling</h3>
                <p align="left">
                1. Zero Charges when you sell <br>
                2. Fair Pricing with No Middleman or Low Ball Offers <br>
                3. Completely Transparent & Unbiased Process <br>
                4. Paperwork, RTO & Delivery by Droom <br> <br>
                </p>
                <a href="#contact" class="btn">Enquire</a>
            </div>
            <div class="box">
                <i class="fas fa-tools"></i>
                <h3>Repair</h3>
                <p align="left">Periodic car servicing <br>
                1. Car mechanical and electrical repairs <br>
                2. Car denting painting services <br>
                3. Car wash and detailing <br>
                4. Car tyre & battery care <br>
                5. Cashless insurance repairs</p>
                <a href="#contact" class="btn">Enquire</a>
            </div>
            <div class="box">
                <i class="fas fa-car-crash"></i>
                <h3>Car Insurance</h3>
                <p align="left">
                1. 4300+ Cashless Garages <br>
                2. 4 Hour Quick Claim Settlement <br>
                3. 4.8 Customer ratings <br>
                4. Roadside Assistance Included <br>
                5. Instant Policy Issuance !</p> 
                <a href="#contact" class="btn">Enquire</a>
            </div>
            <div class="box">
                <i class="fas fa-car-battery"></i>
                <h3>Battery Selling</h3>
                <p align="left">
                1. FREE SHIPPING <br>
                2. CASH ON DELIVERY <br>
                3. FAST INSTALLATION <br>
                </p> <br> <br> 
                <a href="#contact" class="btn">Enquire</a>
            </div>
            <div class="box">
                <i class="fas fa-gas-pump"></i>
                <h3>Oil Change</h3>
                <p align="left">
                1. EXTERIOR FOAM WASH <br>
                2. 24 POINTS CHECK UP <br>
                3. INTERIOR VACUUMING <br>
                4. COOLANT TOP UP <br>
                5. ENGINE OIL REPLACEMENT <br>
                6. OIL FILTER REPLACEMENT <br>
                </p>
                <a href="#contact" class="btn">Enquire</a>
            </div>
            <div class="box">
                <i class="fas fa-headset"></i>
                <h3>Support</h3>
                <p align="left">
                1. Dedicated team available to assist you with any car-related queries. <br>
                2. Fair Price Enjoy transparent pricing and value-for-money services. <br>
                3. Personal information and car records are kept strictly confidential. <br>
                4. Rev up your convenience! Book car services anytime, anywhere, with Instant Service at your fingertips! <br>
            </p>
                <a href="#contact" class="btn">Enquire</a>
            </div>
        </div>
    </section>

    <!-- REVIEW SECTION STARTS  -->

    <section class="review" id="review">

        <h1 class="heading">client's <span>review</span></h1>

        <div class="review-slider">

            <div class="box">
                <img src="images\business-global-economy_24877-41082.avif" alt="person 1">
                <div class="content">
                    <p> Really awesome place. I had received excellent customer service upon my arrival I loved it. They also are the only TRIPLE AAA Certified auto Shop in the area.</p>
                    <h3>pranav dawane</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>

                </div>


            </div>


            <div class="box">
                <img src="images\business-global-economy_24877-41082.avif" alt="person 2">
                <div class="content">
                    <p>1.Excellent Build quality. <br>
                    2.Ample amount of Torque. <br>
                    3.Cosmetics and features are long lasting and practical.</p><br>
                    <h3>charudatta joshi</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>

                </div>


            </div>


            <div class="box">
                <img src="images\business-global-economy_24877-41082.avif" alt="person 3">
                <div class="content">
                    <p>
                    Buying experience is awesome and Dealer also helped us to find the correct model as per requirement. The riding experience is just freaking fantastic and ride quality is awesome as well</p>
                    <h3>pranav gaikwad</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>

                </div>


            </div>


            <div class="box">
                <img src="images\business-global-economy_24877-41082.avif" alt="person 4">
                <div class="content">
                    <p> 1.Handling and Breaking are the best in segment. <br>
                        2.Music system ( one of the best in segment in terms of sound quality) <br>
                        3.Smooth gear shifting.</p><br>
                    <h3>saurabh jadhav</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>

                </div>


            </div>

        </div>

    </section>


    <!-- REVIEW SECTION ENDs -->

    <!-- CONTACT SECTION -->

    <section class="contact" id="contact">

        <h3 class="heading"><span>Contact </span> us</h3>

        <div class="row">

            <iframe class="map"
               src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19098.985053874007!2d73.82346022837638!3d18.459076552666613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc29543b46aa46b%3A0x18f80f58e3f2c3a!2sNavale%20Bridge!5e0!3m2!1sen!2sin!4v1711259526696!5m2!1sen!2sin" width="600" height="780" style="border:2px solid black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
             <!--   allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->

<form action="billing.php" method="post" style="background-color:white;">
    <h3>Get in Touch</h3>
    <input type="text" name="name" placeholder="Name" class="box" style="background-color:#e6e8e8;" required>
    <input type="email" name="email" placeholder="Email" class="box" style="background-color:#e6e8e8;" required>
    <input type="number" name="phone" placeholder="Mobile No" class="box" style="background-color:#e6e8e8;" required>
    <input type="text" name="location" placeholder="Location" class="box" style="background-color:#e6e8e8;" required>
    
    <div class="box" style="background-color:#e6e8e8;">
        <p align="left">SELECT SERVICE:</p>
        <input type="checkbox" name="chk1[]" id="chk-buy-car" value="BUY CAR">
        <label for="chk-buy-car">BUY CAR (₹50)</label>
        &ensp;&ensp;
        <input type="checkbox" name="chk1[]" id="chk-sell-car" value="SELL CAR">
        <label for="chk-sell-car">SELL CAR (₹50)</label>
        &ensp;&ensp;
        <input type="checkbox" name="chk1[]" id="chk-car-insurance" value="CAR INSURANCE">
        <label for="chk-car-insurance">CAR INSURANCE (₹50)</label> 
        <br><br>
        <input type="checkbox" name="chk1[]" id="chk-battery-related" value="BATTERY RELATED">
        <label for="chk-battery-related">BATTERY RELATED (₹50)</label> 
        &ensp;
        <input type="checkbox" name="chk1[]" id="chk-car-repair" value="CAR REPAIR">
        <label for="chk-car-repair">CAR REPAIR (₹50)</label>   
        &ensp;
        <input type="checkbox" name="chk1[]" id="chk-oil-change" value="OIL CHANGE">
        <label for="chk-oil-change">OIL CHANGE (₹50)</label>
    </div>
    
    <fieldset class="box" style="font-size:15px; background-color:#e6e8e8;">
        <h2>Appointment Request</h2> <br>
        <span align="left">
            <label> Date: 
                <input type="date" name="date" required>
            </label>&ensp;&ensp;&ensp;&ensp;
            <span align="center">
                <label>
                    <input type="radio" name="time" value="morning" checked> Morning &ensp;&ensp;
                    <input type="radio" name="time" value="afternoon"> Afternoon
                </label>&ensp;&ensp;
            </span>
        </span> <br><br>
        <p>Confirmation Requested By:</p>
        <div>
            <label>
                <input type="radio" name="chk2" value="email"> Email
            </label>&ensp;
            <label>
                <input type="radio" name="chk2" value="phone" checked> Phone Call
            </label>
        </div> <br>
        <div>
            <label>
                <input type="checkbox" name="confirmed" value="Yes" required>
                <span>I agree to the processing of my data for the handling of my request by <a href="#HOME" target="_blank">BCAGADDIWALA</a>.</span>
            </label>
        </div>
    </fieldset> <br>
    
    <input type="submit" value=" PROCEED " class="btn">
</form>


    </div>

</section>



    <!-- CONTACT SECTION ENDS -->

<!-- Footer Section HTML -->
<section class="footer">

    <div class="box-branch"> 

        <div class="branch">
            <h3>Our Branches</h3>
            <a href="#"><i class="fas fa-map-marker-alt"></i> narhe </a>
            <a href="#"><i class="fas fa-map-marker-alt"></i> katraj </a>
            <a href="#"><i class="fas fa-map-marker-alt"></i> swarget </a>
            <a href="#"><i class="fas fa-map-marker-alt"></i> bavdhan </a>
            <a href="#"><i class="fas fa-map-marker-alt"></i> baner </a>
            <a href="#"><i class="fas fa-map-marker-alt"></i> chakan </a>
            <a href="#"><i class="fas fa-map-marker-alt"></i> kharadi </a>
            <a href="#"><i class="fas fa-map-marker-alt"></i> hadapsar </a>
        </div>

        <div class="branch">
            <h3>Quick links</h3>
            <a href="#Home"><i class="fas fa-arrow-right"></i> Home </a>
            <a href="#Vehicles"><i class="fas fa-arrow-right"></i> Vehicles </a>
            <a href="#services"><i class="fas fa-arrow-right"></i> Services </a>
            <a href="#fetured"><i class="fas fa-arrow-right"></i> featured </a>
            <a href="#review"><i class="fas fa-arrow-right"></i> Reviews </a>
            <a href="#contact"><i class="fas fa-arrow-right"></i> Contact </a>
        </div>

        <div class="branch">
            <h3>Quick links</h3>
            <a href="#"><i class="fas fa-phone"></i> 9890355403 </a>
            <a href="#"><i class="fas fa-phone"></i> 9890355404 </a>
            <a href="#"><i class="fas fa-envelope"></i> godsantu0p@gmail.com </a>
            <a href="#"><i class="fas fa-envelope"></i> bcagaddiwala@gmail.com </a>
        </div>

        <div class="branch">
            <h3>Quick links</h3>
            <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i> facebook
            </a>
            <a href="https://twitter.com/?lang=en" target="_blank"><i class="fa-brands fa-twitter"></i> twitter
            </a>
            <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i>
                instagram
            </a>
            <a href="https://in.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin-in"></i> linkedin
            </a>
        </div>

    </div>
    <div class="credit" align="center">By Your Car | All right reserve</div>

</section>


    <!-- FOOTER SECTION HTML ENDS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"
    integrity="sha512-KBUB5M+7mYr+fwvcCo0L+R+19DX8HTFJQstqu0MmGshJkbWf9I2Aco0r6AeMpjvTBuq4s4eqyOy6R7BtyV+5Dg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="car_showroom.js"></script>
  
</body>

</html>

