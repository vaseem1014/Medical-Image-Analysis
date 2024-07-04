<?php
session_start();
require_once "config.php";

if(isset($_POST["get_started"])) {
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        // User is logged in, allow them to proceed to the next page
        header("location: upload.html");
        exit;
    } else {
        // User is not logged in, redirect them to the login page
        header("location: login.php");
        exit;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEDIMAGE</title>
    <meta name="title" content="MEDIMAGE">
    <meta name="description" content="This is a medical website">
    <link rel="shortcut icon" href="preloader.svg" type="image/svg+xml">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="index.css">

    <link rel="preload"  as="image" href="hero-banner.png">
    <link rel="preload" as="image" href="preloader.svg">
    </head>
<body>
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <img src="favicon.svg" alt="preloader" class="img">
        </div>
    </div>

    <header class="header" data-header>
        <div class="container">
            <a href="#" class="logo">
                <img src="icon.png" alt="logo" width="150" height="88">
            </a>

            <nav class="navbar" data-navbar>
                <div class="navbar-top">
                    <a href="#" class="logo">
                        <img src="icon.png" alt="logo" width="150" height="70">
                    </a>
                    
                    <button class="nav-toggle-btn" aria-label="close menu" data-nav-toggler>
                        <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
                    </button>
                </div>
                <ul class="navbar-list">
                    <li class="navbar-item">
                        <a href="#" class="navbar-link active">Home</a>
                    </li>


                    <li class="navbar-item">
                        <a href="#service" class="navbar-link">Service</a>
                    </li>

                    <li class="navbar-item">
                        <a href="#pricing" class="navbar-link">Pricing</a>
                    </li>

                    <li class="navbar-item">
                        <a href="#footerSection" class="navbar-link">Contact</a>
                    </li>
                </ul>

                <div class="header-action">
                    <a href="login.php" class="login-btn">Login</a>
                    <a href="register.php" class="btn btn-primary">Sign Up</a>
                </div>
            </nav>

            <button class="nav-toggle-btn" aria-label="open menu" data-nav-toggler>
                <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
            </button>

            <div class="overlay" data-overlay data-nav-toggler></div>
        </div>
    </header>
    

    <main>
        <article>
            <section class="section hero has-bg-img" aria-label="hero" style="background-image: url(hero-bg.jpg);">
                <div class="container">
                    <div class="hero-content">
                        <p class="hero-subtitle">
                            Empowering Better Health <img src="title-icon.svg" alt="world" width="20" height="20" class="img">
                        </p>

                        <h1 class="h1 title hero-title">
                            Unlock the Power of Medical Imagin
                        </h1>

                        <p class="hero-text">
                            Revolutionize Healthcare: Harness the Full Potential of Medical Imaging Technology
                        </p>

                        <div class="wrapper">
                            <a href="upload.html" class="btn btn-secondary">
                                <button type="submit" class="span" name="get_started" style="color: white">Get Started</button>
                                <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>
                            </a>
                        </div>

                        
                    </div>
                    <figure class="hero-banner">
                        <img src="hero-banner.jpg" alt="hero" width="631" height="735" class="w-100">
                    </figure>
                </div>
            </section>

            <section class="section service" aria-label="service" id="service">
                <div class="container">
                    <div class="title-wrapper">
                        <p class="section-subtitle">
                            What We Serve
                        </p>
                        <h2 class="h2 title section-title">Top Values For You</h2>
                    </div>

                    <div class="service-card">
                        <div class="card-icon">
                            <img src="service-icon-1.svg" alt="icon" width="60" height="60" loading="lazy">
                        </div>

                        <h3 class="h3 title card-title">AI-Powered Image Analysis</h3>
                        <p class="card-text">
                            Precision Imaging Insights Unleashed.
                        </p>
                    </div>

                    <div class="service-card">
                        <div class="card-icon">
                            <img src="service-icon-2.svg" alt="icon" width="60" height="60" loading="lazy">
                        </div>

                        <h3 class="h3 title card-title">Diagnostic Report Generation</h3>
                        <p class="card-text">
                            Instant Diagnostic Reports Delivered.
                        </p>
                    </div>

                    <div class="service-card">
                        <div class="card-icon">
                            <img src="service-icon-3.svg" alt="icon" width="60" height="60" loading="lazy">
                        </div>

                        <h3 class="h3 title card-title">User-friendly Interface</h3>
                        <p class="card-text">
                            Intuitive Image Analysis Platform.
                        </p>
                    </div>
                </div>
            </section>

            <section class="section desti" aria-label="destination" id="pricing">
                <div class="container">
                    <p class="section-subtitle">Top Plans</p>
                    <h2 class="h2 title section-title">Explore Our Plans</h2>

                    <ul class="desti-list">
                        <li>
                            <div class="desti-card">
                                <div class="card-banner">
                                    <h3 class="h3">FREE</h3>
                                    <p class="card-des">Get started with basic image analysis tools for free and enjoy the results</p>
                                    <p style="color: white; font-size: 23px;"><span class="h2" style="color: white;font-size: 58px; font-weight: bold;display: inline">0</span>/month</p>
                                    <ul class="price-features">
                                        <li><ion-icon name="logo-ionic"></ion-icon><p>Basic Image analysis tools</p></li>
                                        <li><ion-icon name="logo-ionic"></ion-icon><p>Limited Storage Capacity</p></li>
                                        <li><ion-icon name="logo-ionic"></ion-icon><p>Access to community Support</p></li>
                                    </ul>
                                    <button class="price-btn">Continue with Free</button>
                                </div>
                                <div class="card-content">
                                    <h3 class="h3 title"><a href="#" class="card-title">Experience Free Plan</a></h3>

                                    <div class="card-rating">
                                        <span class="span"><ion-icon name="star" aria-hidden="true"></ion-icon>4.7</span>
                                        <p class="rating-text">(11.1k Review)</p>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="desti-card">
                                <div class="card-banner">
                                    <h3 class="h3">BASIC</h3>
                                    <p class="card-des">Upgrade for more advanced features and more accurate results</p>
                                    <p style="color: white; font-size: 23px;"><span class="h2" style="color: white;font-size: 58px; font-weight: bold;display: inline">29</span>/month</p>
                                    <ul class="price-features">
                                        <li><ion-icon name="logo-ionic"></ion-icon><p>ALL Features of Free Plan</p></li>
                                        <li><ion-icon name="logo-ionic"></ion-icon><p>Advance Image analysis tools</p></li>
                                        <li><ion-icon name="logo-ionic"></ion-icon><p>Increased Storage Capacity</p></li>
                                    </ul>
                                    <button class="price-btn">Continue with Free</button>
                                </div>
                                <div class="card-content">
                                    <h3 class="h3 title"><a href="#" class="card-title">Experience Free Plan</a></h3>

                                    <div class="card-rating">
                                        <span class="span"><ion-icon name="star" aria-hidden="true"></ion-icon>4.5</span>
                                        <p class="rating-text">(200 Review)</p>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="desti-card">
                                <div class="card-banner">
                                    <h3 class="h3">PRO</h3>
                                    <p class="card-des">Unlock the full potential with our premium image analysis </p>
                                    <p style="color: white; font-size: 23px;"><span class="h2" style="color: white;font-size: 58px; font-weight: bold;display: inline">59</span>/month</p>
                                    <ul class="price-features">
                                        <li><ion-icon name="logo-ionic"></ion-icon><p>All Features of basic plan</p></li>
                                        <li><ion-icon name="logo-ionic"></ion-icon><p>Full Suite of image analysis tools</p></li>
                                        <li><ion-icon name="logo-ionic"></ion-icon><p>Unlimited storage and fast processing speed</p></li>
                                    </ul>
                                    <button class="price-btn">Continue with Free</button>
                                </div>
                                <div class="card-content">
                                    <h3 class="h3 title"><a href="#" class="card-title">Experience Free Plan</a></h3>

                                    <div class="card-rating">
                                        <span class="span"><ion-icon name="star" aria-hidden="true"></ion-icon>4.5</span>
                                        <p class="rating-text">(200 Review)</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>

            <section class="section exp" aria-label="experience">
                <div class="container">
                    <div class="exp-content">
                        <p class="section-subtitle">Our Experience</p>
                        <h2 class="h2 title section-title">
                            With Our Experience We Will Serve You
                        </h2>

                        <p class="section-text">
                            Since we first opened we have always prioritized the convenience of our users by providing prominent analysis in easy way.
                        </p>

                        <ul class="exp-list">
                            <li class="exp-item">
                                <h3 class="h3 title item-title">2</h3>
                                <p class="item-text">Years<br>Experience</p>
                            </li>

                            <li class="exp-item">
                                <h3 class="h3 title item-title">100+</h3>
                                <p class="item-text">Daily<br>Users</p>
                            </li>

                            <li class="exp-item">
                                <h3 class="h3 title item-title">1k+</h3>
                                <p class="item-text">Happy<br>Customer</p>
                            </li>
                        </ul>
                    </div>

                    <figure class="exp-banner">
                        <img src="exp-banner.jpg" width="550" height="660" loading="lazy" alt="experience banner" class="w-100">

                        <img src="exp-shape.svg" width="75" height="109" loading="lazy" alt="24/7 Guide Support" class="exp-shape">
                    </figure>
                </div>
            </section>

            <section class="section cta" aria-label="call to action">
                <div class="container">
                    <div class="cta-card has-bg-img" style="background-image: url(cta-bg.jpg);">
                        <h2 class="h2 title section-title">
                            Prepare Yourself & Let’s Explore Power of AI
                            <img src="title-icon.svg" alt="icon" height="36" width="36" loading="lazy" class="img">
                        </h2>

                        <p class="section-text">
                            We have many special offers especially for you.
                        </p>

                        <a href="#" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
            </section>
        </article>
    </main>

    <footer class="footer" id="footerSection">
        <div class="container">
            <div class="footer-top">
                <div class="footer-brand">
                    <a href="#" class="logo">
                        <img src="icon.png" width="187" height="38" alt="logo">
                    </a>

                    <p class="footer-text">
                        We always make our customer
                        happy by providing as many
                        choices as possible
                    </p>

                    <ul class="social-list">
                        <li><a href="#" class="social-link"><ion-icon name="logo-instagram"></ion-icon></a></li>
                        <li><a href="#" class="social-link"><ion-icon name="logo-facebook"></ion-icon></a></li>
                        <li><a href="#" class="social-link"><ion-icon name="logo-twitter"></ion-icon></a></li>
                    </ul>
                </div>

                <ul class="footer-list">
                    <li><p class="footer-list-title">About</p></li>
                    <li><a href="#" class="footer-link">Home</a></li>
                    <li><a href="#" class="footer-link">Services</a></li>
                    <li><a href="#" class="footer-link">Pricing</a></li>
                    <li><a href="#" class="footer-link">Contact Us</a></li>
                </ul>

                <ul class="footer-list">
                    <li><p class="footer-list-title">Company</p></li>
                    <li><a href="#" class="footer-link">Why Company</a></li>
                    <li><a href="#" class="footer-link">Partner With Us</a></li>
                    <li><a href="#" class="footer-link">FAQ</a></li>
                    <li><a href="#" class="footer-link">Blog</a></li>
                </ul>

                <ul class="footer-list">
                    <li><p class="footer-list-title">Support</p></li>
                    <li><a href="#" class="footer-link">Account</a></li>
                    <li><a href="#" class="footer-link">Support Center</a></li>
                    <li><a href="#" class="footer-link">Feedback</a></li>
                    <li><a href="#" class="footer-link">Accessibility</a></li>
                </ul>
                <div class="footer-list">
                    <p class="footer-list-title">Get in Touch</p>
                    <p class="footer-text">Question or feedback? We’d love to hear from you.</p>

                    <form action="send_email.php" method="post" class="input-wrapper">
                        <textarea name="message" required placeholder="Your Message" class="input-field" rows="4"></textarea>
                        <button type="submit" aria-label="send a message" class="input-btn">
                            <ion-icon name="paper-plane-outline" aria-hidden="true"></ion-icon>
                        </button>
                    </form>

                </div>
            </div>

            <div class="footer-bottom">
                <p class="copyright">CopyRight 2024</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>