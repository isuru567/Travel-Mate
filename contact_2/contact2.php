<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="../_resources/images/title.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact-2</title>
    <link rel="stylesheet" href="../contact_2/contact2.css">
</head>

<body>

    <!-------------------------------------------------------- Header -------------------------------------------------------->

    <?php
    include "../header/header.php"
    ?>

    <!-------------------------------------------------------- End Header -------------------------------------------------------->


    <!--------------------------------------------------------  Section 1 -------------------------------------------------------->

    <section class="package2--sec1">
        <div class="packages2--sec1--div1">
            <div class="packages2--sec1--div2">
                <div class="packages2--sec1--div3">
                    <span class="packages2--sec1--span1">
                        Discover Your Perfect Journey
                    </span>
                    <span class="packages2--sec1--span2">
                        Choose from our curated travel packages designed for every traveler.
                    </span>

                </div>
            </div>
        </div>
    </section>

    <!-------------------------------------------------------- End Section 1 -------------------------------------------------------->


    <!--------------------------------------------------------  Section 2 -------------------------------------------------------->

    <section class="contact2--sec2">
        <div class="contact2--sec2--div1">
            <div class="contact2--sec2--div2">
                <div class="contact2--sec2--div3">
                    <div class="contact2--sec2--div4">
                        <!-- get in touch -->
                        <div class="contact2--sec2--div5">
                            <div class="contact2--sec2--div6">
                                <span class="contact2--sec2--span1">Get In Touch With Us</span>
                            </div>
                            <div class="contact2--sec2--div7">
                                <span class="contact2--sec2--span2">
                                    We’d love to hear from you. Whether
                                    you have a question, an idea, or
                                    just want to introduce yourself,
                                    send us a message and we’ll get
                                    back to you soon.
                                </span>
                            </div>
                            <div class="contact2--sec2--div8">
                                <div class="contact2--sec2--div9">
                                    <img src="../_resources/images/contact_2/location.png" alt="" class="contact2--sec2--img1">
                                    <span class="contact2--sec2--span3"> 56/1 Algama Warakapola</span>
                                </div>
                                <div class="contact2--sec2--div9">
                                    <img src="../_resources/images/contact_2/email.png" alt="" class="contact2--sec2--img1">
                                    <span class="contact2--sec2--span3">info@travelmate.com</span>
                                </div>
                                <div class="contact2--sec2--div9">
                                    <img src="../_resources/images/contact_2/call.png" alt="" class="contact2--sec2--img1">
                                    <span class="contact2--sec2--span3"> +94 77 555 2233</span>
                                </div>
                            </div>
                        </div>
                        <!-- open hour -->
                        <div class="contact2--sec2--div10">
                            <div class="contact2--sec2--div11">
                                <span class="contact2--sec2--span4">Open Hours</span>
                            </div>
                            <div class="contact2--sec2--div12">
                                <span class="contact2--sec2--span5">Monday-Friday 8:00 - 22:00</span>
                            </div>
                            <div class="contact2--sec2--div12">
                                <span class="contact2--sec2--span5">Saturday-Sunday 10:00 - 23:00</span>
                            </div>
                        </div>
                        <!-- connect -->
                        <div class="contact2--sec2--div13">
                            <div class="contact2--sec2--div14">
                                <span class="contact2--sec2--span6">Stay Connect</span>
                            </div>
                            <div class="contact2--sec2--div15">
                                <a href="#" class="contact2--sec2--a1">
                                    <img src="../_resources/images/contact_2/instagram.png" alt="" class="contact2--sec2--img2">
                                </a>
                                <a href="#" class="contact2--sec2--a1">
                                    <img src="../_resources/images/contact_2/facebook.png" alt="" class="contact2--sec2--img2">
                                </a>
                                <a href="#" class="contact2--sec2--a1">
                                    <img src="../_resources/images/contact_2/twitter.png" alt="" class="contact2--sec2--img2">
                                </a>
                                <a href="#" class="contact2--sec2--a1">
                                    <img src="../_resources/images/contact_2/whatsapp.png" alt="" class="contact2--sec2--img2">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="contact2--sec2--div16">
                        <!-- form -->
                        <div class="contact2--sec2--div17">
                            <form action="#" method="post" class="contact2--sec2--form1">
                                <!-- Name -->
                                <div class="contact2--sec2--div18">
                                    <!-- <label for="name" class="contact2--sec2--label1">Full Name:</label> -->
                                    <input class="contact2--sec2--input1" type="text" id="name" name="name" placeholder="Full Name" required>
                                </div>

                                <!-- Email -->
                                <div class="contact2--sec2--div18">
                                    <!-- <label for="email" class="contact2--sec2--label1">Email:</label> -->
                                    <input class="contact2--sec2--input1" type="email" id="email" name="email" placeholder="Email Address" required>
                                </div>

                                <!-- Subject -->
                                <div class="contact2--sec2--div18">
                                    <!-- <label for="subject" class="contact2--sec2--label1">Subject:</label> -->
                                    <input class="contact2--sec2--input1" type="text" id="subject" name="subject" placeholder=" Your Subject" required>
                                </div>

                                <!-- Message -->
                                <div class="contact2--sec2--div18">
                                    <!-- <label for="message" class="contact2--sec2--label1">Message:</label> -->
                                    <textarea class="contact2--sec2--textarea1" id="message" name="message" rows="10" placeholder="Your Message " required></textarea>
                                </div>

                                <!-- Submit button -->
                                <div class="contact2--sec2--div19">
                                    <button class="contact2--sec2--btn1" type="" id="send_btn" onclick="send()">Send</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-------------------------------------------------------- End Section 2 -------------------------------------------------------->


    <!-------------------------------------------------------- Section 3 -------------------------------------------------------->

    <section class="contact2--sec3">
        <div class="contact2--sec3--div1">
            <div class="contact2--sec3--div2">

                <div class="contact2--sec3--div3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d35258.287556801006!2d80.08160668394912!3d7.146193475403753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2fd58ce1afe45%3A0x593380ee3025df5e!2sNittambuwa!5e1!3m2!1sen!2slk!4v1758209658263!5m2!1sen!2slk" width="3000" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </div>
    </section>

    <!-------------------------------------------------------- End Section 3 -------------------------------------------------------->


    <!--------------------------------------------------------  Section 4 -------------------------------------------------------->

    <section class="home2--sec8">
        <div class="home2--sec8--div1">
            <div class="home2--sec8--div2">
                <div class="home2--sec8--div3">
                    <div class="home2--sec8--div4">
                        <div class="home2--sec8--div5">
                            <span class="home2--sec8--span1">Frequently Asked Questions</span>
                            <span class="home2--sec8--span2">Find quick answers to the most common inquiries</span>
                        </div>
                        <div class="home2--sec8--div6--extra">
                            <div class="home2--sec8--div6">
                                <div class="home2--sec8--div7">
                                    <span class="home2--sec8--span3">What types of vehicles are available for rent?</span>
                                    <img src="../_resources/images/home2/faq/plus.png" alt="" class="home2--sec8--img1">
                                </div>
                                <div class="home2--sec8--div8">
                                    <span class="home2--sec8--span4">
                                        We offer a wide range of vehicles including compact cars, sedans, SUVs, and luxury vehicles to suit different needs and preferences.
                                    </span>
                                </div>
                            </div>

                            <div class="home2--sec8--div6">
                                <div class="home2--sec8--div7">
                                    <span class="home2--sec8--span3">Is insurance included in the rental price?</span>
                                    <img src="../_resources/images/home2/faq/plus.png" alt="" class="home2--sec8--img1">
                                </div>
                                <div class="home2--sec8--div8">
                                    <span class="home2--sec8--span4">
                                        Yes. All our vehicles come with basic insurance coverage included in the rental price. Additional coverage options can be added during booking if you want extra protection.
                                    </span>
                                </div>
                            </div>

                            <div class="home2--sec8--div6">
                                <div class="home2--sec8--div7">
                                    <span class="home2--sec8--span3">Can I modify or cancel my booking after confirmation?</span>
                                    <img src="../_resources/images/home2/faq/plus.png" alt="" class="home2--sec8--img1">
                                </div>
                                <div class="home2--sec8--div8">
                                    <span class="home2--sec8--span4">
                                        Yes. You can modify or cancel your booking up to 24 hours before the pickup time without any penalty. Changes made closer to the pickup time may incur a small fee.
                                    </span>
                                </div>
                            </div>

                            <div class="home2--sec8--div6">
                                <div class="home2--sec8--div7">
                                    <span class="home2--sec8--span3">Do you offer airport pickup or drop-off services?</span>
                                    <img src="../_resources/images/home2/faq/plus.png" alt="" class="home2--sec8--img1">
                                </div>
                                <div class="home2--sec8--div8">
                                    <span class="home2--sec8--span4">
                                        Yes. We provide convenient airport pickup and drop-off services. You can select this option during booking or contact our team to arrange it.
                                    </span>
                                </div>
                            </div>
                            <div class="home2--sec8--div6">
                                <div class="home2--sec8--div7">
                                    <span class="home2--sec8--span3">Are there any mileage limits or additional charges I should know about?</span>
                                    <img src="../_resources/images/home2/faq/plus.png" alt="" class="home2--sec8--img1">
                                </div>
                                <div class="home2--sec8--div8">
                                    <span class="home2--sec8--span4">
                                        Most of our rentals include a generous daily mileage allowance. If you exceed the limit, a small per-kilometer fee applies. Any extra charges will be clearly shown before you confirm your booking.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home2--sec8--div9">
                        <div class="home2--sec8--div10">
                            <img src="../_resources/images/home2/faq/hero.webp" alt="" class="home2--sec8--img2">

                            <div class="home2--sec8--div11">
                                <span class="home2--sec8--span5">Do You Need Any Help</span>
                                <a href="../contact_2/contact2.php" class="home2--sec8--btn1" aria-label="Contact us">
                                    Contact Us
                                </a>
                            </div>
                        </div>
                        <div class="home2--sec8--div12">
                            <img src="../_resources/images/home2/faq/qqq1.webp" alt="" class="home2--sec8--img3">

                            <div class="home2--sec8--div13">
                                <span class="home2--sec8--span6">Do You Need Any Help</span>
                                <a href="../contact_2/contact2.php" class="home2--sec8--btn2" aria-label="Contact us">
                                    Contact Us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-------------------------------------------------------- End Section 4 -------------------------------------------------------->
    <!--------------------------------------------------------  Footer -------------------------------------------------------->
    <?php
    include "../footer/footer.php"
    ?>
    <!-------------------------------------------------------- End Footer -------------------------------------------------------->



    <!------------------------ connect js ------------------------>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../contact_2/contact2.js"></script>
    <!------------------------ End connect js ------------------------>


</body>

</html>