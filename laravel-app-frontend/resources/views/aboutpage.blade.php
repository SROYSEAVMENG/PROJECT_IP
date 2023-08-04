<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project1</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

</head>
<body>

    <section id="header">
        <a href="#">        
            <h3 style="left: 20px;">STYLENADNDA</h3>
        <div>
            <ul id="navbar">
                <li><a href="http://127.0.0.1:5173/homepage">Home</a></li>
                <li><a href="http://127.0.0.1:5173/shoppage">shop</a></li>
                <li><a class="active" href="http://127.0.0.1:5173/aboutpage">About</a></li>
                <li><a href="http://127.0.0.1:5173/contactpage">Contact</a></li>
                <li id="lg-bag"><a href="http://127.0.0.1:5173/cartpage"><i class="far fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>

               
            </ul>
        </div>
        <div id="mobile">
            <a href="http://127.0.0.1:5173/cartpage"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>          
        </div>
    </section>

    <section id="page-header" class="about-header">
        <h2>#Knowus</h2>      
        <p>Lorem ipsum dolor sit amet </p>
    </section>

    <section id="about-head" class="section-p1">
        <img src="img/about/a6.jpg" alt="">
        <div>
        <h2>Who We are?</h2>
       
        <p>3CE is the popular Korean cosmetics brands of Style Nanda and the brand (3 Concept Eyes) is one of the 
            youngest and most fun brands on the block, dealing in nail polish, eye makeup products and more. One 
            look at their incredible line of products and you will be floored! Go from morning to evening in an 
            instant and simply touch up to look flawless all day. With their range of Cosmetic products in modern colours, 
            you can achieve the look you want. From priming to dolling up and perfecting your skin, the range of 3CE in Singapore 
            can help you accomplish it
        </p>

            <br><br>

            <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%">Provide app-only coupons and discounts
                Provide auto login features
                See my order history, Shipping info
                See shopping cart, shipping info
                Push notifications for shopping mall news
                Share product info with SNS
                Customer Center
                </marquee>
            </div>
    </section>

    <section id="about-app" class="section-p1">
        <h1>Download Our <a href="#">App</a></h1>
        <div class="fe-box">
            <img src="img/about/1.jpg" alt="">
        </div>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
             <img src="img/features/f1.png" alt="">
             <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f4.png" alt="">
            <h6>Promotion</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f6.png" alt="">
            <h6>F24/7 Support</h6>
        </div>
    </section>
    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For newsletter</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
        </div>
        <div class="form">
        <div class="pro" onclick="window.location.href='http://127.0.0.1:5173/login';">
            <button style="height: 40px; width: 300px;">Sign Up</button>            
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <h4>Contact</h4>
            <p><strong>Address: </strong> Takmav, Cambodia</p>
            <p><strong>Phone: </strong> (855)168 670 33</p>
            <p><strong>Hours: </strong> 8:00 - 18:00, Mon- Sat</p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>

        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>
        <div class="col">
            <h4> My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View cart</a>
            <a href="#">My Whislist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="img/pay/app.jpg" alt="">
                <img src="img/pay/play.jpg" alt="">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="img/pay/pay.png" alt="">
        </div>

        <div class="copyright">
            <p>@ 2023, STYLENANDA</p> 
        </div>

        
    </footer>
    



    <script src="script.js"></script>
</body>
</html>