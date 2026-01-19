<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="../_resources/images/title.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="../booking/booking.css">
</head>

<body>

    <!------------------------------------------------------------------------- Connect Header ------------------------------------------------------------------------->
    <?php
    include "../header/header.php"
    ?>
    <!------------------------------------------------------------------------- End Connect Header ------------------------------------------------------------------------->


    <!-------------------------------------------------------------------------  Section 1 ------------------------------------------------------------------------->

    <section class="package2--sec1">
        <div class="packages2--sec1--div1">
            <div class="packages2--sec1--div2">
                <div class="packages2--sec1--div3">
                    <span class="packages2--sec1--span1">
                        Drive with Ease.
                        Travel with Confidence
                    </span>
                </div>
            </div>
        </div>
    </section>

    <!------------------------------------------------------------------------- End Section 1 ------------------------------------------------------------------------->


    <!-------------------------------------------------------------------------  Section 2 ------------------------------------------------------------------------->

    <section class="booking--sec2">
        <div class="booking--sec2--div1">
            <div class="booking--sec2--div2">
                <div class="booking--se2--divc3">
                    <div class="booking--sec2--div4">
                        <span class="booking--sec2--span1">Secure Your Ride</span>
                    </div>

                    <div class="booking--sec2--div5">
                        <form action="#" method="post" class="booking--sec2--form1">

                            <div class="booking--sec2--div6">
                                <label for="fullname" class="booking--sec2--label1">Full Name</label><br>
                                <input class="booking--sec2--input1" type="text" id="fullname" name="fullname" placeholder="Devid John" required>
                            </div>

                            <div class="booking--sec2--div7">
                                <label for="email" class="booking--sec2--label1">E-mail</label>
                                <input class="booking--sec2--input2" type="email" id="email" name="email" placeholder="example@gmail.com" required>

                                <label for="phone" class="booking--sec2--label1">Phone</label>
                                <input class="booking--sec2--input2" type="tel" id="phone" name="phone" placeholder="+94 77 XXX XXXX" required>
                            </div>


                            <div class="booking--sec2--div8">

                                <label for="selector" class="booking--sec2--label1">Choose Your Package</label>
                                <select class="booking--sec2--select1" id="selector" name="selector" required>
                                    <option value="">-- Please choose --</option>
                                    <option value="option1">Economy Package</option>
                                    <option value="option2">Standard Package</option>
                                    <option value="option3">Luxury Package</option>
                                    <option value="option4">Family Package</option>
                                    <option value="option5">Adventure Package</option>
                                    <option value="option6">Eco Package</option>
                                </select>

                                <label for="guests" class="booking--sec2--label1">Number Of Guests</label>
                                <input type="number" id="guests" name="guests" min="1" class="booking--sec2--input3" placeholder="1-50" required>
                            </div>

                            <div class="booking--sec2--div9">

                                <label class="booking--sec2--label1" for="toDate">To Date</label>
                                <input class="booking--sec2--input4" type="date" id="toDate" name="toDate" required>

                                <label class="booking--sec2--label1" for="fromDate">From Date</label>
                                <input class="booking--sec2--input4" type="date" id="fromDate" name="fromDate" required>
                                
                            </div>

                            <div class="booking--sec2--div10">
                                <label class="booking--sec2--label1" for="details">Any Extra Details</label><br>
                                <textarea class="booking--sec2--textarea1" id="details" name="details" rows="4"></textarea>
                            </div>

                            <div class="booking--sec2--div11">
                                <label>
                                    <input type="checkbox" id="terms" name="terms" required class="booking--sec2--input5">
                                    Terms & Conditions
                                </label>
                            </div>


                            <button class="booking--sec2--btn1" type="submit" onclick="send()" id="send_btn" >Complete Reservation</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!------------------------------------------------------------------------- End Section 2 ------------------------------------------------------------------------->
    
    
    <!-------------------------------------------------------------------------  Connect Footer ------------------------------------------------------------------------->
    <?php 
    include "../footer/footer.php"
    ?>
    <!------------------------------------------------------------------------- End Connect Footer ------------------------------------------------------------------------->


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="../booking/booking.js"></script>

</body>

</html>