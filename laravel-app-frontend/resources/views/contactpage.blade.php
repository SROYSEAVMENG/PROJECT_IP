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
                <li><a href="http://127.0.0.1:5173/aboutpage">About</a></li>
                <li><a class="active" href="http://127.0.0.1:5173/contactpage">Contact</a></li>
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

        <h2>#let's_talk</h2>      
        <p>LEAVE A MESSAGE, We love to hear from you!</p>

    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our agency location or contact us today</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fal fa-map"></i>
                    <p>Takmav, Cambodia</p>
                </li>
                <li>
                    <i class="fal fa-envelope"></i>
                    <p>sroyseavmeng1212@gmail.com</p>
                </li>
                <li>
                    <i class="fal fa-phone-alt"></i>
                    <p>(855)168 670 33 </p>
                </li>
                <li>
                    <i class="fal fa-clock"></i>
                    <p>Monday to Saturday: 8:00am to 18:00pm</p>
                </li>

            </div>
        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62565.34246026482!2d104.90447864577965!3d11.455807516598323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109599c76b5e59b%3A0xed2a7bc18a4af61f!2sTa%20Khmao%2C%20Krong%20Ta%20Khmau!5e0!3m2!1sen!2skh!4v1691065445673!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </section>

    <section id="form-details">
        <form action="">
            <span>LEAVE A MESSAGE</span>
            <h2>We love to hear from you</h2>
            <input type="text" placeholder="Your Name">
            <input type="text" placeholder="E-mail">
            <input type="text" placeholder="Subject">
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message">

            </textarea>
            <button class="normal">Submit</button>

        </form>

        <div class="people">
            <div>
            <img src="img/people/1.jpg" alt="">
            <p><span>SROY SEAVMENG</span>WEB DEVELOPER<br> Phone: + 885 168 670 33
            <br> Email: sroyseavmeng1212@gmail.com</p>
            </div>

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
            <p><strong>Address: </strong> Takmav, cambodia</p>
            <p><strong>Phone: </strong> +01 2222 365 /(+91) 01 2345 6789</p>
            <p><strong>Hours: </strong> 10:00 - 18:00, Mon- Sat</p>
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
            <p>@ 2021, STYLENANDA</p> 
        </div>

        
    </footer>
    
    <script src="script.js"></script>
</body>
</html>