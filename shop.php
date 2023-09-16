<!DOCTYPE html>
<html lang="en">
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
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section starts  -->

<header class="header">

<img src="./furn_logo-removebg-preview_1.png" alt="" srcset="" style="max-width: 95px;max-height: 95px;">
    <a href="" class="logo"> SABNE FURNITURE MALL</a>

  

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
   
    </div>

</header>

<!-- header section ends  -->

<!-- closer btn  -->

<div id="closer" class="fas fa-times"></div>

<!-- navbar  -->

<?php
    include("nav.php");

?>



<section class="heading">
    <h3>our shop</h3>
    <?php 
        if($loggedin){
        echo '<p> <a href="main.php">home</a> / <span>shop</span> </p>';
        }
        else{
        echo '<p> <a href="home.php">home</a> / <span>shop</span> </p>';
        }
    ?>
</section>

<section class="category">

    <h1 class="title"> <span>our categories</span>  </h1>

    <div class="box-container">

        <a href="ind1.php" class="box">
            <img src="image/icon-1.png" alt="">
            <h3>Sofa And Chairs</h3>
        </a>

        <a href="ind2.php" class="box">
            <img src="image/icon-2.png" alt="">
            <h3>Working table And Dinning table</h3>
        </a>

        <a href="index4.php" class="box">
            <img src="image/icon-3.png" alt="">
            <h3>Dressing table And Bed</h3>
        </a>

        <a href="ind.php" class="box">
            <img src="image/icon-4.png" alt="">
            <h3>Crockery</h3>
        </a>

        <a href="ind5.php" class="box">
            <img src="image/icon-5.png" alt="">
            <h3>Utensils</h3>
        </a>

    </div>

</section>

<section class="products">

    <h1 class="title"> <span>our products</span> </h1>

    <div class="box-container">

        <div class="box">
           
            <div class="image">
                <img src="image/product-1.jpg" alt="">
            </div>
            <div class="content">
               
                <h3>Table lamp</h3>
               
            </div>
        </div>

        <div class="box">
           
            <div class="image">
                <img src="image/product-2.jpg" alt="">
            </div>
            <div class="content">
               
                <h3>luxuries chair</h3>
               
            </div>
        </div>

        <div class="box">
           
            <div class="image">
                <img src="image/product-3.jpg" alt="">
            </div>
            <div class="content">
               
                <h3>TABLE</h3>
                
            </div>
        </div>

        <div class="box">
          
            <div class="image">
                <img src="image/product-4.jpg" alt="">
            </div>
            <div class="content">
              
                <h3>modern Chair</h3>
               
            </div>
        </div>

        <div class="box">
           
            <div class="image">
                <img src="image/product-5.jpg" alt="">
            </div>
            <div class="content">
              
                <h3>Chair</h3>
              
            </div>
        </div>

        <div class="box">
           
            <div class="image">
                <img src="image/product-6.jpg" alt="">
            </div>
            <div class="content">
              
                <h3>modern furniture</h3>
               
            </div>
        </div>

        <div class="box">
           
            <div class="image">
                <img src="image/product-7.jpg" alt="">
            </div>
            <div class="content">
                
                <h3>modern furniture</h3>
               
            </div>
        </div>

        <div class="box">
           
            <div class="image">
                <img src="image/product-8.jpg" alt="">
            </div>
            <div class="content">
             
                <h3>modern furniture</h3>
              
            </div>
        </div>

    </div>

</section>




















<!-- footer section  -->

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
            <a href="about.php"> <i class="fas fa-arrow-right"></i> about</a>
           
            
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

<!-- custom js file link  -->
<script src="js/script.js"></script>
    
</body>
</html>