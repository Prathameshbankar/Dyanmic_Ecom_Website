<!DOCTYPE html>
<?php include_once("controller.php"); ?>
<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    $loggedin = true;
    $_SESSION['loggedin'] = true; 
}
 else{
    $loggedin = false;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<style>
    .login-form.active {
        border: 2px;
    }
</style>
<body>

<!-- header section starts  -->

<header class="header">
<img src="./furn_logo-removebg-preview_1.png" alt="" srcset="" style="max-width: 95px;max-height: 95px;">
    <a href="" class="logo"> SABNE FURNITURE MALL</a>


   

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
       
        </div>
    </div>

</header>


<div id="closer" class="fas fa-times"></div>

<!-- navbar  -->

<?php
    include("nav.php");
?>



<div class="shopping-cart">

    

</div>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / <span>about</span> </p>
</section>

<section class="about">

    <div class="image">
        <video controls muted src="./WhatsApp Video 2023-03-04 at 5.02.29 PM.mp4" alt="video" style="width: 624px; height: 550px; cursor: pointer;">
    </div>

    <div class="content">
        <span>Welcome to our Furniture shop </span>
        <h3>we make your home more astonishing</h3>
        
        <p><b>Welcome to our furniture shop, where we offer the biggest furniture mall in Gangapur! We're proud to provide our customers with high-quality furniture that exceeds their expectations. Whether you're in need of furniture for a wedding, home, or office, we have everything you need under one roof.</b></p>

        <p><b> understand that furniture is more than just a functional item; it's an expression of your personality and style. That's why we offer a wide range of furniture options to cater to every taste and budget. Our skilled craftsmen can even customize furniture to your specific requirements, ensuring that you get exactly what you want.</b></p>
            
        <p><b> our shop, we're committed to quality and customer satisfaction. We believe that you deserve the very best, and that's what we aim to provide. Our furniture is not only beautiful but also functional and durable, ensuring that you get the most out of your investment.</b></p>
       
    </div>

   

</section>

<section class="services">

    <h1 class="title"> <span>our services</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/serv-1.svg" alt="">
            <h3>product selling</h3>
            <p>Shop with ease on our website and browse our wide range of products, with fast and reliable delivery straight to your doorstep.</p>
   
        </div>

        <div class="box">
            <img src="image/serv-2.svg" alt="">
            <h3>product designing</h3>
            <p>Design your dream product with our user-friendly online design tools and bring your vision to life with our expert team of designers.</p>
          
        </div>

        <div class="box">
            <img src="image/serv-3.svg" alt="">
            <h3>24 / 7 support</h3>
            <p>Our dedicated support team is available around the clock to assist you with any questions or concerns, ensuring a seamless shopping experience from start to finish.</p>
           
        </div>

    </div>

</section>



<section class="footer">

    <div class="box-container">

    <div class="box">
            <h3>quick links</h3>
            <?php
                if($loggedin){
                echo '<a href="main.php"> <i class="fas fa-arrow-right"></i> home</a>';
                }
                else{
                    echo '<a href="home.php"> <i class="fas fa-arrow-right"></i> home</a>';
                }
            ?>
            <a href="shop.php"> <i class="fas fa-arrow-right"></i> shop</a>
            <a href="contact.php"> <i class="fas fa-arrow-right"></i> contact</a>
        </div>
       

        <div class="box">
            <h3>Join Us On</h3>
            <a href="https://www.facebook.com/sabnefurnituremall/"> <i class="fab fa-facebook-f"></i> facebook</a>
            <a href="https://instagram.com/sabnefurnituremall?igshid=YmMyMTA2M2Y="> <i class="fab fa-instagram"></i> instagram</a>
           
          
        </div>
     </div>

</section>

<section class="credit">
@2023 all rights reserved by Sanjivani College of Engineering,Kopargaon. Department of Information Technology
</section>


<script src="js/script.js"></script>
    
</body>
</html>