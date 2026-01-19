<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="shortcut icon" href="../_resources/images/title.png">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../home1/home1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-1</title>


</head>

<body>

    <!------------------------------------------ Connect Header ------------------------------------------>
    <?php
    include '../header/header.php';
    ?>
    <!------------------------------------------ End Connect Header ------------------------------------------>


    <!------------------------------------------ Hero Section ------------------------------------------>

    <section class="hero-slider">

        <div class="slide active" style="background-image: url(../_resources/images/home/hero/hero_back.webp)">
            <div class="slide-content">
                <div class="content-wrapper">
                    <div class="text-content">
                        <h1 class="slide-title">Welcome to Travel Mate</h1>
                        <p class="slide-description">
                            We provide reliable vehicles and trusted travel services to make your
                            Sri Lankan adventure smooth, safe, and unforgettable.
                        </p>
                        <button class="slide-cta">Book Now</button>
                    </div>
                    <div class="hero-image">
                        <img src="../_resources/images/home/hero/hero_1.webp" alt="Travel Adventure">
                    </div>
                </div>
            </div>
        </div>
        <div class="slide" style="background-image: url(../_resources/images/home/hero/hero2_back.webp)">
            <div class="slide-content">
                <div class="content-wrapper">
                    <div class="text-content">
                        <h1 class="slide-title">Discover SriLanka With Us</h1>
                        <p class="slide-description">
                            Our curated tours and reliable
                            vehicles make every journey across Sri Lanka effortless and memorable.
                            Let Travel Mate guide your next adventure.
                        </p>
                        <button class="slide-cta">View More</button>
                    </div>
                    <div class="hero-image">
                        <img src="../_resources/images/home/hero/hero_2.webp" alt="Travel Adventure">
                    </div>
                </div>
            </div>
        </div>


        <button class="slider-nav prev" onclick="changeSlide(-1)">
            <svg class="slider-arrow" width="40" height="40" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                <circle cx="24" cy="24" r="24" fill="white" />
                <path class="arrow-icon" d="M30 32 L18 24 L30 16" fill="none" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>

        <button class="slider-nav next" onclick="changeSlide(1)">
            <svg class="slider-arrow" width="40" height="40" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                <circle cx="24" cy="24" r="24" fill="white" />
                <path class="arrow-icon" d="M18 32 L30 24 L18 16" fill="none" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>


        <div class="slider-indicators">
            <div class="indicator active" onclick="goToSlide(0)"></div>
            <div class="indicator" onclick="goToSlide(1)"></div>
            <div class="indicator" onclick="goToSlide(2)"></div>
        </div>


        <div class="progress-bar" id="progressBar"></div>
    </section>

    <!------------------------------------------ End Hero Section ------------------------------------------>

    07



    <!------------------------------------------  Section 2 ------------------------------------------>

    <section class="home--sec2">
        <div class="home--sec2--container">
            <div class="home--sec2--content">
                <div class="home--sec2--text">
                    <span class="home--sec2--badge">✨ TRAVEL WITH CONFIDENCE</span>

                    <h2 class="home--sec2--title">
                        Your Trusted Travel Partner in <span class="home--sec2--highlight">Sri Lanka</span>
                    </h2>

                    <p class="home--sec2--description">
                        At Travel Mate, we help foreign travelers explore Sri Lanka with ease. From comfortable vehicles to personalized travel experiences, our goal is to make your journey safe, affordable, and unforgettable.
                    </p>

                    <a href="../aboutUs_1/about1.php" class="home--sec2--btn" aria-label="Learn more about our services">
                        Learn More
                    </a>

                    <div class="home--sec2--features">
                        <div class="home--sec2--feature">
                            <span class="home--sec2--feature-number">500+</span>
                            <span class="home--sec2--feature-text">Happy Travelers</span>
                        </div>
                        <div class="home--sec2--feature">
                            <span class="home--sec2--feature-number">50+</span>
                            <span class="home--sec2--feature-text">Tour Packages</span>
                        </div>
                        <div class="home--sec2--feature">
                            <span class="home--sec2--feature-number">24/7</span>
                            <span class="home--sec2--feature-text">Support</span>
                        </div>
                    </div>
                </div>

                <div class="home--sec2--image-wrapper">
                    <div class="home--sec2--image-card">
                        <img src="../_resources/images/home2/hero.webp"
                            alt="Travelers enjoying Sri Lanka with Travel Mate"
                            class="home--sec2--img">
                    </div>
                    <div class="home--sec2--decorator"></div>
                </div>
            </div>
        </div>
    </section>

    <!------------------------------------------ End Section 2 ------------------------------------------>





    <!------------------------------------------  Section 3 ------------------------------------------>

    <section class="home--sec3">
        <div class="home--sec3--div1">
            <div class="home--sec3--div2">
                <div class="home--sec3--div3">

                    <div class="home--se3--div4">
                        <span class="home--sec3--span1">Our Services</span>
                        <span class="home--sec3--span2">Tailored travel solutions at your fingertips</span>
                    </div>


                    <div class="home--sec3--div5">


                        <div class="home--sec3--div6 card11">
                             <div class="home--sec3--div6--extra">
                                <div class="home--sec3--div7">
                                    <img src="../_resources/images/home/sec3/wheel_white.png" alt="" class="home--sec3--img1">
                                </div>
                                <div class="home--sec3--div8">
                                    <span class="home--sec3--span3">Self-Drive Vehicles</span>
                                </div>
                                <div class="home--sec3--div9">
                                    <span class="home--sec3--span4">Drive at your own pace with our fully insured, well-maintained fleet. Choose from a wide range of vehicles to suit your journey, whether it’s a quick city ride or a long-distance road trip.</span>
                                </div>
                            </div>
                        </div>

                        <div class="home--sec3--div6 card12">
                             <div class="home--sec3--div6--extra">
                                <div class="home--sec3--div7">
                                    <img src="../_resources/images/home/sec3/driver_white.png" alt="" class="home--sec3--img1">
                                </div>
                                <div class="home--sec3--div8">
                                    <span class="home--sec3--span3">With-Driver Vehicles</span>
                                </div>
                                <div class="home--sec3--div9">
                                    <span class="home--sec3--span4">Sit back and relax while our professional drivers take the wheel. Ideal for business trips, family outings, or guided tours, our with-driver service ensures comfort, safety, and punctuality.</span>
                                </div>
                            </div>
                        </div>


                        <div class="home--sec3--div6 card13">
                            <div class="home--sec3--div6--extra">
                                <div class="home--sec3--div7">
                                    <img src="../_resources/images/home/sec3/air_white.png" alt="" class="home--sec3--img1">
                                </div>
                                <div class="home--sec3--div8">
                                    <span class="home--sec3--span3">Airport Pick-up & Drop </span>
                                </div>
                                <div class="home--sec3--div9">
                                    <span class="home--sec3--span4">Travel to and from the airport with ease. Our reliable airport transfer service guarantees on-time pick-ups and hassle-free drop-offs, no matter the hour.</span>
                                </div>
                            </div>
                        </div>


                        <div class="home--sec3--div6 card14">
                            <div class="home--sec3--div6--extra">
                                <div class="home--sec3--div7">
                                    <img src="../_resources/images/home/sec3/maintain_white.png" alt="" class="home--sec3--img1">
                                </div>
                                <div class="home--sec3--div8">
                                    <span class="home--sec3--span3">Road-Side Assistance</span>
                                </div>
                                <div class="home--sec3--div9">
                                    <span class="home--sec3--span4">Never worry about unexpected breakdowns while on the road. Our 24/7 roadside assistance covers flat tires, jump-starts, towing, and minor repairs, so you are never stranded.</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="home--se3--div7">
                        <a href="../services1/services1.php" class="home--sec3--btn1" aria-label="View more of our services">
                            More Services
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!------------------------------------------ End Section 3 ------------------------------------------>


    <!------------------------------------------  Section 4 ------------------------------------------>


    <section class="package--sec4">
        <div class="home--sec4--div1">
            <span class="home--sec4--span1">Travel Deals</span>
            <span class="home--sec4--span2">Affordable, reliable, and made for you</span>
        </div>
        <div class="wrapper">
            <div class="container">
                <input type="radio" name="slide" id="c1" checked class="input1">
                <label for="c1" class="card">
                    <div class="row">
                        <div class="icon">
                            <img src="../_resources/images/home/sec4/car.png" alt="" class="slider--icon">
                        </div>
                        <div class="description">
                            <div class="home--sec4--div9">
                                <span class="home--sec4--span3"> Economy Package</span>
                                <span class="home--sec4--span4"> Affordable & Practical</span>
                                <span class="home--sec4--span5">
                                    Perfect for budget-conscious travelers
                                    who want a reliable ride at the lowest cost.
                                </span>

                                <div class="home--sec4--divextra">
                                    <ul class="home--sec4--list1">
                                        <li class="home--sec4--item1">Compact cars for city rides</li>
                                        <li class="home--sec4--item1">Ideal for solo travelers or couples</li>
                                        <li class="home--sec4--item1">Fuel-efficient and easy to drive</li>
                                        <li class="home--sec4--item1">Includes basic insurance coverage</li>
                                        <li class="home--sec4--item1">Includes basic insurance coverage</li>
                                    </ul>

                                </div>
                                <a href="../packages1/packages1.php" class="home--sec4--btn1" aria-label="View more details about this project">
                                    More Details
                                </a>
                            </div>
                        </div>
                    </div>
                </label>

                <input type="radio" name="slide" id="c2" class="input1">
                <label for="c2" class="card">
                    <div class="row">
                        <div class="icon">
                            <img src="../_resources/images/home/sec4/car (1).png" alt="" class="slider--icon">
                        </div>
                        <div class="description">
                            <div class="home--sec4--div9">
                                <span class="home--sec4--span3"> Business Package</span>
                                <span class="home--sec4--span4"> Professional & Comfortable</span>
                                <span class="home--sec4--span5">
                                    Tailored for executives who value style and convenience on the move.
                                </span>

                                <div class="home--sec4--divextra">
                                    <ul class="home--sec4--list1">
                                        <li class="home--sec4--item1">Premium sedans or SUVs</li>
                                        <li class="home--sec4--item1">Driver included on request</li>
                                        <li class="home--sec4--item1">Priority support service</li>
                                        <li class="home--sec4--item1">Comprehensive insurance</li>
                                        <li class="home--sec4--item1">Includes basic insurance coverage</li>
                                    </ul>

                                </div>
                                <a href="../packages1/packages1.php" class="home--sec4--btn1" aria-label="View more details about this project">
                                    More Details
                                </a>
                            </div>
                        </div>
                    </div>
                </label>

                <input type="radio" name="slide" id="c3" class="input1">
                <label for="c3" class="card">
                    <div class="row">
                        <div class="icon">
                            <img src="../_resources/images/home/sec4/dance.png" alt="" class="slider--icon">
                        </div>
                        <div class="description">
                            <div class="home--sec4--div9">
                                <span class="home--sec4--span3">Family Package</span>
                                <span class="home--sec4--span4">Spacious & Safe</span>
                                <span class="home--sec4--span5">
                                    Perfect for family trips with plenty of space and comfort for everyone.
                                </span>

                                <div class="home--sec4--divextra">
                                    <ul class="home--sec4--list1">
                                        <li class="home--sec4--item1">Minivans or large SUVs</li>
                                        <li class="home--sec4--item1">Child seats on request</li>
                                        <li class="home--sec4--item1">Ample luggage space</li>
                                        <li class="home--sec4--item1">Enhanced safety features<< /li>
                                        <li class="home--sec4--item1">Includes basic insurance coverage</li>
                                    </ul>

                                </div>
                                <a href="../packages1/packages1.php" class="home--sec4--btn1" aria-label="View more details about this project">
                                    More Details
                                </a>
                            </div>
                        </div>
                    </div>
                </label>

                <input type="radio" name="slide" id="c4" class="input1">
                <label for="c4" class="card">
                    <div class="row">
                        <div class="icon">
                            <img src="../_resources/images/home/sec4/rating-star.png" alt="" class="slider--icon">
                        </div>
                        <div class="description">
                            <div class="home--sec4--div9">
                                <span class="home--sec4--span3">Luxury Package</span>
                                <span class="home--sec4--span4">Exclusive & Premium</span>
                                <span class="home--sec4--span5">
                                    For travelers who want top-tier vehicles and first-class service.
                                </span>

                                <div class="home--sec4--divextra">
                                    <ul class="home--sec4--list1">
                                        <li class="home--sec4--item1">Luxury sedans or limousines</li>
                                        <li class="home--sec4--item1">Complimentary refreshments</li>
                                        <li class="home--sec4--item1">Dedicated concierge service</li>
                                        <li class="home--sec4--item1">Full insurance & VIP perks</li>
                                        <li class="home--sec4--item1">Includes basic insurance coverage</li>
                                    </ul>

                                </div>
                                <a href="../packages1/packages1.php" class="home--sec4--btn1" aria-label="View more details about this project">
                                    More Details
                                </a>
                            </div>
                        </div>
                    </div>
                </label>

                <input type="radio" name="slide" id="c5" class="input1">
                <label for="c5" class="card">
                    <div class="row">
                        <div class="icon">
                            <img src="../_resources/images/home/sec4/desert.png" alt="" class="slider--icon">
                        </div>
                        <div class="description">
                            <div class="home--sec4--div9">
                                <span class="home--sec4--span3">Adventure Package</span>
                                <span class="home--sec4--span4">Rugged & Ready</span>
                                <span class="home--sec4--span5">
                                    Built for explorers heading off the beaten path with durable vehicles..
                                </span>

                                <div class="home--sec4--divextra">
                                    <ul class="home--sec4--list1">
                                        <li class="home--sec4--item1">4x4 SUVs or jeeps</li>
                                        <li class="home--sec4--item1">Off-road gear included</li>
                                        <li class="home--sec4--item1">Adventure-friendly insurance</li>
                                        <li class="home--sec4--item1">Optional guide services</li>
                                        <li class="home--sec4--item1">Includes basic insurance coverage</li>
                                    </ul>

                                </div>
                                <a href="../packages1/packages1.php" class="home--sec4--btn1" aria-label="View more details about this project">
                                    More Details
                                </a>
                            </div>
                        </div>
                    </div>
                </label>

                <input type="radio" name="slide" id="c6" class="input1">
                <label for="c6" class="card">
                    <div class="row">
                        <div class="icon">
                            <img src="../_resources/images/home/sec4/leaf.png" alt="" class="slider--icon">
                        </div>
                        <div class="description">
                            <div class="home--sec4--div9">
                                <span class="home--sec4--span3">Eco Package</span>
                                <span class="home--sec4--span4">Green & Sustainable</span>
                                <span class="home--sec4--span5">
                                    Eco-friendly vehicles for environmentally conscious travelers.
                                </span>

                                <div class="home--sec4--divextra">
                                    <ul class="home--sec4--list1">
                                        <li class="home--sec4--item1">Hybrid or electric cars</li>
                                        <li class="home--sec4--item1">Low emissions, high efficiency</li>
                                        <li class="home--sec4--item1">Discounted green travel perks</li>
                                        <li class="home--sec4--item1">Includes carbon offset program</li>
                                        <li class="home--sec4--item1">Full insurance coverage</li>
                                    </ul>
                                </div>
                                <a href="../packages1/packages1.php" class="home--sec4--btn1" aria-label="View more details about this project">
                                    More Details
                                </a>
                            </div>
                        </div>
                    </div>
                </label>




            </div>
        </div>
    </section>


    <!------------------------------------------ End Section 4 ------------------------------------------>


    <!------------------------------------------  Section 5 ------------------------------------------>

    <section class="home--sec5">
        <div class="home--sec5--div1">
            <div class="home--sec5--div2">
                <div class="home--sec5--div3">
                    <div class="home--sec5--div4">
                        <span class="home--sec5--span1">Our Fleet</span>
                        <span class="home--sec5--span2">Well-maintained vehicles for every journey</span>
                    </div>


                    <div class="swiper">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="home--sec5--div6">
                                    <div class="home--sec5--img1">
                                        <img src="../_resources/images/fleet/1.webp" alt="" class="home--sec5--img1">
                                    </div>
                                    <span class="home--sec5--span3">Mini Car</span>
                                    <span class="home--sec5--span4">From <span class="home--sec5--span5">$100</span> / Day</span>
                                    <button class="home--sec5--btn1">Book Now</button>
                                    <a href="../fleet_1/fleet1.php" class="home--sec5--btn2" aria-label="View our complete vehicle fleet">
                                        View All Fleet
                                    </a>
                                </div>
                            </div>


                            <div class="swiper-slide">
                                <div class="home--sec5--div6">
                                    <div class="home--sec5--div7">
                                        <img src="../_resources/images/fleet/benz.webp" alt="" class="home--sec5--img1">
                                    </div>
                                    <span class="home--sec5--span3">Luxury Car</span>
                                    <span class="home--sec5--span4">From <span class="home--sec5--span5">$150</span> / Day</span>
                                    <button class="home--sec5--btn1">Book Now</button>
                                    <a href="../fleet_1/fleet1.php" class="home--sec5--btn2" aria-label="View our complete vehicle fleet">
                                        View All Fleet
                                    </a>
                                </div>
                            </div>


                            <div class="swiper-slide">
                                <div class="home--sec5--div6">
                                    <div class="home--sec5--img1">
                                        <img src="../_resources/images/fleet/3.webp" alt="" class="home--sec5--img1">
                                    </div>
                                    <span class="home--sec5--span3">Mini Coach</span>
                                    <span class="home--sec5--span4">From <span class="home--sec5--span5">$180</span> / Day</span>
                                    <button class="home--sec5--btn1">Book Now</button>
                                    <a href="../fleet_1/fleet1.php" class="home--sec5--btn2" aria-label="View our complete vehicle fleet">
                                        View All Fleet
                                    </a>
                                </div>
                            </div>

                            <!-- Slide 4 -->
                            <div class="swiper-slide">
                                <div class="home--sec5--div6">
                                    <div class="home--sec5--img1">
                                        <img src="../_resources/images/fleet/6.webp" alt="" class="home--sec5--img1">
                                    </div>
                                    <span class="home--sec5--span3">Luxury Bus</span>
                                    <span class="home--sec5--span4">From <span class="home--sec5--span5">$300</span> / Day</span>
                                    <button class="home--sec5--btn1">Book Now</button>
                                    <a href="../fleet_1/fleet1.php" class="home--sec5--btn2" aria-label="View our complete vehicle fleet">
                                        View All Fleet
                                    </a>
                                </div>
                            </div>

                            <!-- Slide 5 -->
                            <div class="swiper-slide">
                                <div class="home--sec5--div6">
                                    <div class="home--sec5--img1">
                                        <img src="../_resources/images/fleet/5.webp" alt="" class="home--sec5--img1">
                                    </div>
                                    <span class="home--sec5--span3">EV Car</span>
                                    <span class="home--sec5--span4">From <span class="home--sec5--span5">$200</span> / Day</span>
                                    <button class="home--sec5--btn1">Book Now</button>
                                    <a href="../fleet_1/fleet1.php" class="home--sec5--btn2" aria-label="View our complete vehicle fleet">
                                        View All Fleet
                                    </a>
                                </div>
                            </div>

                            <!-- Slide 6 -->
                            <div class="swiper-slide">
                                <div class="home--sec5--div6">
                                    <div class="home--sec5--img1">
                                        <img src="../_resources/images/fleet/suv.webp" alt="" class="home--sec5--img1">
                                    </div>
                                    <span class="home--sec5--span3">Offroad</span>
                                    <span class="home--sec5--span4">From <span class="home--sec5--span5">$250</span> / Day</span>
                                    <button class="home--sec5--btn1">Book Now</button>
                                    <a href="../fleet_1/fleet1.php" class="home--sec5--btn2" aria-label="View our complete vehicle fleet">
                                        View All Fleet
                                    </a>
                                </div>
                            </div>

                            <!-- Slide 7 -->
                            <div class="swiper-slide">
                                <div class="home--sec5--div6">
                                    <div class="home--sec5--img1">
                                        <img src="../_resources/images/fleet/4.png" alt="" class="home--sec5--img1">
                                    </div>
                                    <span class="home--sec5--span3">Van</span>
                                    <span class="home--sec5--span4">From <span class="home--sec5--span5">$220</span> / Day</span>
                                    <button class="home--sec5--btn1">Book Now</button>
                                    <a href="../fleet_1/fleet1.php" class="home--sec5--btn2" aria-label="View our complete vehicle fleet">
                                        View All Fleet
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Pagination -->
                        <div class="swiper-pagination"></div>

                        <!-- Navigation arrows -->
                        <div class="swiper-button-prev">
                            <svg class="fleet-arrow" width="40" height="40" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="24" cy="24" r="24" class="arrow-bg" />
                                <path class="arrow-icon" d="M30 32 L18 24 L30 16" fill="none" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="swiper-button-next">
                            <svg class="fleet-arrow" width="40" height="40" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="24" cy="24" r="24" class="arrow-bg" />
                                <path class="arrow-icon" d="M18 32 L30 24 L18 16" fill="none" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!------------------------------------------ End Section 5 ------------------------------------------>



    <!------------------------------------------ Section 6 ------------------------------------------>
    <?php
    include "../test3/test3.php"
    ?>

    <!------------------------------------------ End Section 6 ------------------------------------------>



    <!------------------------------------------ Section 7 ------------------------------------------>
    <section class="home3--sec2">
        <div class="home3--sec2--div1">
            <div class="home3--sec2--div2">

                <!-- card1 -->
                <div class="home3--sec2--div3">
                   <img src="../_resources/images/home/sec7/1.webp" alt="" class="home1--slider--img">
                </div>

                <!-- card2 -->
               <div class="home3--sec2--div3">
                   <img src="../_resources/images/home/sec7/2.webp" alt="" class="home1--slider--img">
                </div>

                <!-- card3 -->
                <div class="home3--sec2--div3">
                    <img src="../_resources/images/home/sec7/3.webp" alt="" class="home1--slider--img">
                </div>

                <!-- card4 -->
                <div class="home3--sec2--div3">
                    <img src="../_resources/images/home/sec7/4.webp" alt="" class="home1--slider--img">
                </div>

                <!-- card1 -->
                <div class="home3--sec2--div3"><!-- slider-card -->
                    <img src="../_resources/images/home/sec7/1.webp" alt="" class="home1--slider--img">
                </div>

                <!-- card2 -->
                <div class="home3--sec2--div3">
                    <img src="../_resources/images/home/sec7/2.webp" alt="" class="home1--slider--img">
                </div>

                <!-- card3 -->
                <div class="home3--sec2--div3">
                    <img src="../_resources/images/home/sec7/3.webp" alt="" class="home1--slider--img">
                </div>

                <!-- card4 -->
                <div class="home3--sec2--div3">
                    <img src="../_resources/images/home/sec7/4.webp" alt="" class="home1--slider--img">
                </div>
                <!-- card1 -->
                <div class="home3--sec2--div3"><!-- slider-card -->
                   <img src="../_resources/images/home/sec7/1.webp" alt="" class="home1--slider--img">
                </div>

                <!-- card2 -->
                <div class="home3--sec2--div3">
                   <img src="../_resources/images/home/sec7/2.webp" alt="" class="home1--slider--img">
                </div>

                <!-- card3 -->
                <div class="home3--sec2--div3">
                   <img src="../_resources/images/home/sec7/3.webp" alt="" class="home1--slider--img">
                </div>

                <!-- card4 -->
                <div class="home3--sec2--div3">
                    <img src="../_resources/images/home/sec7/4.webp" alt="" class="home1--slider--img">
                </div>
                <!-- card1 -->
                <div class="home3--sec2--div3">
                   <img src="../_resources/images/home/sec7/1.webp" alt="" class="home1--slider--img">
                </div>

                <!-- card2 -->
               <div class="home3--sec2--div3">
                   <img src="../_resources/images/home/sec7/2.webp" alt="" class="home1--slider--img">
                </div>

                <!-- card3 -->
                <div class="home3--sec2--div3">
                    <img src="../_resources/images/home/sec7/3.webp" alt="" class="home1--slider--img">
                </div>

                <!-- card4 -->
                <div class="home3--sec2--div3">
                    <img src="../_resources/images/home/sec7/4.webp" alt="" class="home1--slider--img">
                </div>

                <!-- card1 -->
                <div class="home3--sec2--div3"><!-- slider-card -->
                    <img src="../_resources/images/home/sec7/1.webp" alt="" class="home1--slider--img">
                </div>

                <!-- card2 -->
                <div class="home3--sec2--div3">
                    <img src="../_resources/images/home/sec7/2.webp" alt="" class="home1--slider--img">
                </div>

                <!-- card3 -->
                <div class="home3--sec2--div3">
                    <img src="../_resources/images/home/sec7/3.webp" alt="" class="home1--slider--img">
                </div>

                <!-- card4 -->
                <div class="home3--sec2--div3">
                    <img src="../_resources/images/home/sec7/4.webp" alt="" class="home1--slider--img">
                </div>
                <!-- card1 -->
                <div class="home3--sec2--div3"><!-- slider-card -->
                   <img src="../_resources/images/home/sec7/1.webp" alt="" class="home1--slider--img">
                </div>

                <!-- card2 -->
                <div class="home3--sec2--div3">
                   <img src="../_resources/images/home/sec7/2.webp" alt="" class="home1--slider--img">
                </div>

                <!-- card3 -->
                <div class="home3--sec2--div3">
                   <img src="../_resources/images/home/sec7/3.webp" alt="" class="home1--slider--img">
                </div>

                <!-- card4 -->
                <div class="home3--sec2--div3">
                    <img src="../_resources/images/home/sec7/4.webp" alt="" class="home1--slider--img">
                </div>

            </div>
        </div>
    </section>
    <!------------------------------------------ End Section 7 ------------------------------------------>

    <!-- connect footer -->

    <?php
    include "../footer/footer.php"
    ?>

    <!--end connect footer -->









    <!-- Swiper JS -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <!------------------------------------- Connect JS ------------------------------------->

    <script src="../home1/home1.js"></script>

    <!-------------------------------------End Connect JS ------------------------------------->
</body>

</html>