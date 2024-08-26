<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="gallery.css" />
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<!-- Home Page Navbar -->

<nav>
    <ul class="nav-container">
        <li class="logo-container">
            <h1 class="logo">Blessing <span>Hands</span></h1>
        </li>
        <div class="navbar">
            <li><a href="home.php">Home</a></li>
            <li>
                <a href="">Academy <i class="fas fa-caret-down"></i></a>
                <ul class="dropdown">
                    <li><a href="loginform.php">Courses</a></li>
                    <li><a href="loginform.php">Lecture Panel</a></li>
                    <li><a href="index.php">Find A Career</a></li>
                </ul>
            </li>
            <li>
                <a href="">Services <i class="fas fa-caret-down"></i></a>
                <ul class="dropdown">
                    <li><a href="ambulance.php">Ambulance</a></li>
                    <li><a href="live_in_care.php">Live-in Care</a></li>
                    <li><a href="short_term.php">Short-term Care</a></li>
                    <li><a href="pricing.php">Pricing</a></li>
                </ul>
            </li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="home.php#about_us_container">About Us</a></li>
            <li><a href="contact_us.php">Contact Us</a></li>
        </div>
    </ul>
</nav>

<!-- Image Section Path -->
<section class="image_container">
    <div class="image_grid">
        <div class="image_card">
            <img src="images/Gallary/9.jpeg" alt="image">
        </div>
        <div class="image_card">
            <img src="images/Gallary/10.jpg" alt="image">
        </div>
        <div class="image_card">
            <img src="images/Gallary/11.jpg" alt="image">
        </div>
        <div class="image_card">
            <img src="images/Gallary/12.jpeg" alt="image">
        </div>

        <div class="image_card">
            <img src="images/Gallary/1.jpg" alt="image">     
        </div>
        <div class="image_card">
            <img src="images/Gallary/2.jpg" alt="image">
        </div>
        <div class="image_card">
            <img src="images/Gallary/6.webp" alt="image">
        </div>
        <div class="image_card">
            <img src="images/Gallary/13.png" alt="image">
        </div>
        <div class="image_card">
            <img src="images/Gallary/14.jpeg" alt="image">
        </div>
        <div class="image_card">
            <img src="images/Gallary/15.webp" alt="image">
        </div>
        <div class="image_card">
            <img src="images/Gallary/16.webp" alt="image">     
        </div>
        <div class="image_card">
            <img src="images/Gallary/19.jpg" alt="image">
        </div>
    </div>
</section>

<script src="https://unpkg.com/scrollreveal"></script><!-- scrollreveal option js code -->
<script src="gallery.js"></script>

<br><br><br><br>

<!-- Home Page Footer -->
<footer>
    <div class="footer-container">
        <div class="footer-content">
            <h3>Contact Us</h3><br>
            <p>Email: blessinghands@gmail.com</p><br>
            <p>Phone: +94 71 7912 270</p><br>
            <p>Address: 110/B/1, New Kandy Rd, Kothalawala, Kaduwela.</p>
        </div><br>

        <div class="footer-content">
            <h3>Quick Links</h3><br>
            <ul class="list">
                <li><a href="home.php">Home</a></li>
                <li><a href="academy.php">Academy</a></li>
                <li><a href="ambulance.php">Services</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="home.php#about_us_container">About Us</a></li>
                <li><a href="contact_us.php">Contact Us</a></li>
            </ul>
        </div><br>

        <div class="footer-content">
            <h3>Follow Us</h3><br>
            <ul class="social-icons">
                <li><a href="https://web.facebook.com/profile.php?id=61559586426316\"><i class="fab fa-facebook"></i></a></li>
                <li><a href="https://web.facebook.com/profile.php?id=61559586426316\"><i class="fab fa-whatsapp"></i></a></li>
                <li><a href="https://web.facebook.com/profile.php?id=61559586426316\"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://web.facebook.com/profile.php?id=61559586426316\"><i class="fab fa-linkedin"></i></a></li>
            </ul>
        </div>
    </div>

    <div class="bottom-bar"><br>
        <p>Copyright &copy;2024; All rights reserved by <span class="designer">64 Group05</span></p>
    </div>
</footer>

</body>
</html>
