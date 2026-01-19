<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="../_resources/images/title.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact-1</title>
    <link rel="stylesheet" href="../contact/contact.css">
</head>

<body>
    <!-------------------------------------------------------- Connect Header -------------------------------------------------------->

    <?php
    include "../header/header.php"
    ?>

    <!-------------------------------------------------------- End Connect Header -------------------------------------------------------->



    <!-------------------------------------------------------- Hero Section -------------------------------------------------------->

    <section class="service--sec1">
        <div class="service--sec1--div1">
            <div class="service--sec1--div2">
                <div class="service--sec1--div3">
                    <div class="service--sec1--div4">
                        <span class="service--sec1--span1">Discover Your Perfect Journey </span>
                        <span class="service--sec1--span2">Choose from our curated travel packages designed for every traveler. </span>
                    </div>
                    <div class="service--sec1--div5">
                        <span class="service--sec1--span3">
                            <a href="../home1/home1.php" class="service--sec1--a1">Home</a> -Contact Us
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-------------------------------------------------------- End Hero Section -------------------------------------------------------->


    <!--------------------------------------------------------  Section 2 -------------------------------------------------------->

    <section class="contact--sec2">
        <div class="contact--sec2--div1">
            <div class="contact--sec2--div2">
                <div class="contact--sec2--div3">

                    <!-- Address  -->
                    <div class="contact--sec2--div4 address">
                        <div class="contact--sec2--div5">
                            <img src="../_resources/images/contactUs/location.png" alt="" class="contact--sec2--img1">
                        </div>
                        <div class="contact--sec2--div6">
                            <spnan class="contact--sec2--span1">Address:</spnan>
                            <spnan class="contact--sec2--span2">56/1 Algama,warakapola</spnan>
                        </div>
                    </div>
                    <!-- Mail  -->
                    <div class="contact--sec2--div4 mail">
                        <div class="contact--sec2--div5">
                            <img src="../_resources/images/contactUs/mail.png" alt="" class="contact--sec2--img1">
                        </div>
                        <div class="contact--sec2--div6">
                            <spnan class="contact--sec2--span1">Mail Us:</spnan>
                            <spnan class="contact--sec2--span2">info@travelmate.com</spnan>
                        </div>
                    </div>
                    <!-- Phone -->
                    <div class="contact--sec2--div4 phone">
                        <div class="contact--sec2--div5">
                            <img src="../_resources/images/contactUs/phone.png" alt="" class="contact--sec2--img1">
                        </div>
                        <div class="contact--sec2--div6">
                            <spnan class="contact--sec2--span1">Phone Us:</spnan>
                            <spnan class="contact--sec2--span2">+94 77 552 5588</spnan>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-------------------------------------------------------- End Section 2 -------------------------------------------------------->


    <!--------------------------------------------------------  Section 3 -------------------------------------------------------->

    <section class="contact--sec3">
        <div class="contact--sec3--div1">
            <div class="contact--sec3--div2">
                <div class="contact--sec3--div3">

                    <!-- Map -->
                    <div class="contact--sec3--div4">

                        <!-- Mobile Map -->
                        <div class="contact--sec3--div5">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15835.301804030296!2d80.09190655872617!3d7.146172526839218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2fd58ce1afe45%3A0x593380ee3025df5e!2sNittambuwa!5e0!3m2!1sen!2slk!4v1757398362906!5m2!1sen!2slk" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                        <!-- Tablet Map -->
                        <div class="contact--sec3--div6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15835.301804030296!2d80.09190655872617!3d7.146172526839218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2fd58ce1afe45%3A0x593380ee3025df5e!2sNittambuwa!5e0!3m2!1sen!2slk!4v1757398362906!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                        <!-- Desktop Map -->
                        <div class="contact--sec3--div7">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15835.301804030296!2d80.09190655872617!3d7.146172526839218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2fd58ce1afe45%3A0x593380ee3025df5e!2sNittambuwa!5e0!3m2!1sen!2slk!4v1757398362906!5m2!1sen!2slk" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    <!-- form -->
                    <div class="contact--sec3--div8">
                        <div class="contact--sec3--div9">
                            <span class="contact--sec3--span1">Get In Touch With Us</span>
                        </div>
                        <form action="#" method="post" class="contact--sec3--form1" onsubmit="send(event)">
                            <!-- Name -->
                            <div class="contact--sec3--div10">
                                <label for="name" class="contact--sec3--label1">Full Name:</label>
                                <input class="contact--sec3--input1" type="text" id="name" name="name" placeholder="John Devid" required>
                            </div>

                            <!-- Email -->
                            <div class="contact--sec3--div10">
                                <label for="email" class="contact--sec3--label1">Email:</label>
                                <input class="contact--sec3--input1" type="email" id="email" name="email" placeholder="you@example.com" required>
                            </div>

                            <!-- Subject -->
                            <div class="contact--sec3--div10">
                                <label for="subject" class="contact--sec3--label1">Subject:</label>
                                <input class="contact--sec3--input1" type="text" id="subject" name="subject" placeholder=" Your Subject" required>
                            </div>

                            <!-- Message -->
                            <div class="contact--sec3--div10">
                                <label for="message" class="contact--sec3--label1">Message:</label>
                                <textarea class="contact--sec3--textarea1" id="message" name="message" rows="10" placeholder="Your message " required></textarea>
                            </div>

                            <!-- Submit button -->
                            <div class="contact--sec3--div11">
                                <button class="contact--sec3--btn1" type="button" onclick="send()" id="send_btn">Send</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-------------------------------------------------------- End Section 3 -------------------------------------------------------->


    <!--------------------------------------------------------  Section 4 -------------------------------------------------------->
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


    <!-------------------------------------------------------- End Section 4 -------------------------------------------------------->


    <!-------------------------------------------------------- Connect footer -------------------------------------------------------->
    <?php
    include "../footer/footer.php"
    ?>
    <!-------------------------------------------------------- End Section 4 -------------------------------------------------------->




    <!------------------------------------------------- Connect JS ------------------------------------------------->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../contact/contact.js"></script>
</body>

</html>