<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Mate - Header</title>
    <link rel="stylesheet" href="../header/header.css">
</head>

<body>

    <header class="main-header">

        <div class="top-bar">
            <div class="header-container">
                <div class="contact-info">
                    <span class="phone">
                        <img src="../_resources/images/header/phone.png" alt="Phone" class="header-contact">
                        +94 77 552 5588
                    </span>
                    <span class="address1">
                        <img src="../_resources/images/header/location.png" alt="Location" class="header-contact">
                        56/3, Wattala
                    </span>
                    <span class="email mail1">
                        <img src="../_resources/images/header/mail.png" alt="Email" class="header-contact">
                        info@travelmate.com
                    </span>
                </div>
                <div class="social-links">
                    <a href="#" aria-label="Facebook"><img src="../_resources/images/header/facebook.png" alt="Facebook" class="nav-social"></a>
                    <a href="#" aria-label="Twitter"><img src="../_resources/images/header/twitter (2).png" alt="Twitter" class="nav-social"></a>
                    <a href="#" aria-label="Instagram"><img src="../_resources/images/header/instagram.png" alt="Instagram" class="nav-social"></a>
                    <a href="#" aria-label="WhatsApp"><img src="../_resources/images/header/whatsapp.png" alt="WhatsApp" class="nav-social"></a>
                </div>
            </div>
        </div>

        <nav class="main-nav">
            <div class="header-container">
                <!-- Logo -->
                <div class="logo">
                    <a href="../home1/home1.php">
                        <img src="../_resources/images/header/logo.png" alt="Travel Mate Logo">
                    </a>
                </div>

                <!-- Mobile Menu Toggle -->
                <div class="menu-toggle" id="menu-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <!-- Navigation Links -->
                <ul class="nav-links">
                    <li class="nav-item has-dropdown">
                        <a href="#">Home</a>
                        <ul class="dropdown">
                            <li><a href="../home1/home1.php">Home 1</a></li>
                            <li><a href="../home2/home2.php">Home 2</a></li>
                            <li><a href="../home3/home3.php">Home 3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item has-dropdown">
                        <a href="#">Packages</a>
                        <ul class="dropdown">
                            <li><a href="../packages1/packages1.php">Packages 1</a></li>
                            <li><a href="../packages2/packages2.php">Packages 2</a></li>
                            <li><a href="../packages3/package3..php">Packages 3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item has-dropdown">
                        <a href="#">Services</a>
                        <ul class="dropdown">
                            <li><a href="../services1/services1.php">Services 1</a></li>
                            <li><a href="../services_2/services2.php">Services 2</a></li>
                            <li><a href="../services3/services3.php">Services 3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item has-dropdown">
                        <a href="#">Fleet</a>
                        <ul class="dropdown">
                            <li><a href="../fleet_1/fleet1.php">Fleet 1</a></li>
                            <li><a href="../fleet_2/fleet2.php">Fleet 2</a></li>
                            <li><a href="../fleet_3/fleet3.php">Fleet 3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item has-dropdown">
                        <a href="#">About Us</a>
                        <ul class="dropdown">
                            <li><a href="../aboutUs_1/about1.php">About Us 1</a></li>
                            <li><a href="../aboutUs_2/about2.php">About Us 2</a></li>
                            <li><a href="../aboutUs_3/about3.php">About Us 3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item has-dropdown">
                        <a href="#">Contact Us</a>
                        <ul class="dropdown">
                            <li><a href="../contact/contact.php">Contact Us 1</a></li>
                            <li><a href="../contact_2/contact2.php">Contact Us 2</a></li>
                            <li><a href="../contact_3/contact3.php">Contact Us 3</a></li>
                        </ul>
                    </li>
                </ul>

                <!-- Book Now Button -->
                <div class="nav-buttons">
                    <a href="../booking/booking.php" class="book-now-btn">BOOK NOW</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- JavaScript for Mobile Menu -->
    <script src="../header/header.js"></script>

</body>

</html>