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
                <li><a href="http://127.0.0.1:5173/contactpage">Contact</a></li>
                <li id="lg-bag"><a class="active" href="http://127.0.0.1:5173/cartpage"><i class="far fa-shopping-bag"></i></a></li>
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
     
    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Products</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="img/products/f1.jpg" atl=""></td>
                    <td>Face Blush</td>
                    <td>$25</td>
                    <td><input type="number" value="1"></td>
                    <td>$25</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="img/products/f2.jpg" atl=""></td>
                    <td>Face Blush</td>
                    <td>$25</td>
                    <td><input type="number" value="1" name="" id=""></td>
                    <td>$25</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="img/products/f3.jpg" atl=""></td>
                    <td>Face Blush</td>
                    <td>$25</td>
                    <td><input type="number" value="1" name="" id=""></td>
                    <td>$25</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="img/products/f4.jpg" atl=""></td>
                    <td>Eye Color palette</td>
                    <td>$58</td>
                    <td><input type="number" value="2" name="" id=""></td>
                    <td>$116</td>
                </tr>
            </tbody>
        </table>


    </section>

    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" placeholder="Enter your Coupon">
                <button class="normal">Apply</button>
            </div>
        </div>
        
        <div id="subtotal">
            <h3>Cart Totals</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>$ 191</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Totals</strong></td>
                    <td><strong>$ 191</strong></td>
                </tr>
            </table>
            <button class="normal">Proceed to checkout</button>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <h4>Contact</h4>
            <p><strong>Address: </strong> Takmav, Cambodia</p>
            <p><strong>Phone: </strong> STYLENANDA</p>
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