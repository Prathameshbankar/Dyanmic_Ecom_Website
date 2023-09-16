<!DOCTYPE html>
<?php 
    
    include("nav.php")
?>
<?php include_once("controller.php"); ?>
<?php
$visited = false;
        if(isset($_SESSION['loggedin'])){
            $_SESSION['loggedin'] = true;
            $visited = true;
        }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet"  href="style.css">
    <link rel="stylesheet"  href="normalize.css">
    <link rel="stylesheet"  href="responsive.css">
    <link rel="stylesheet"  href="bootstrap.min.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- login form -->
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet"  href="style75.css">
    <style>
ul {
  list-style-type: none;
  margin: auto;

  overflow: hidden;
 
  
}

li {
  float: left;
}

li a {
  display: block;
  color: white;


  text-decoration: none;
  font-size : 25px;
  margin-left:50px;
 
}

li a:hover {
  background-color: #111;
}

.b{
margin-left:500px;

}

.navbar-brand text-success logo h1 align-self-center{
    
}

.mar{
    color:black;
}
</style>  
   

</head>
<body>

<header class="header">
    <img src="./furn_logo-removebg-preview_1.png" alt="" srcset="" style="max-width: 95px;max-height: 95px;">
    <!-- <a href="" class="logo"> SABNE FURNITURE MALL</a> -->
    <marquee class="mar"><a class="navbar-brand text-success logo h1 align-self-center" href="home.php">
                 SABNE FURNITURE MALL        
            </a></marquee>

    

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
      
        
        
    </div>


</header>
<section class="heading">
<div class= "new">
<ul>
  <li><a class="b" href="home.php">Home</a></li>
  <li><a href="shop.php">Shop</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="about.php">About</a></li>
</ul>

</div>
</section>



<div id="closer" class="fas fa-times"></div>


<div class="slider">
    <img
      id="img-1"
      src="./WhatsApp Image 2023-03-04 at 2.14.15 PM.jpeg"
      alt="Image 1"
    />
    <img
      id="img-1"
      src="ban.jpg"
      alt="Image 2"
    />
    <img
      id="img-1"
      src="sofa 4.jpeg"
      alt="Image 3"
    />
    <img
          id="img-1"
          src="b.jpg"
          alt="Image 3"
        />
        <img
        id="img-1"
        src="s1.jpeg"
        alt="Image 3"
      />
      <img
      id="img-1"
      src="s2.jpeg"
      alt="Image 2"
    />

      </div>
      <div class="navigation-button">
        <span class="dot active" onclick="changeSlide(0)"></span>
        <span class="dot" onclick="changeSlide(1)"></span>
        <span class="dot" onclick="changeSlide(2)"></span>
        <span class="dot" onclick="changeSlide(3)"></span>
        <span class="dot" onclick="changeSlide(4)"></span>
        <span class="dot" onclick="changeSlide(5)"></span>
</div>
  <script src="sty.js">

  </script>

    


    

</section>
<div class="trending">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="title">
                    <h2>Trending <strong class="black">Categories</strong></h2>

                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margitop">
                <div class="trending-box">
                    <figure><img src="images1/L2.jpg" /></figure>
                    <h3>Living Room</h3>
                       <div class="content">
            
                        <a href="ind1.php" class="btn">See products</a>
                    </div>


                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="trending-box">
                    <figure><img src="images1/L5.jpg" /></figure>
                    <h3>Latest Products</h3>
                    <div class="content">
            
                        <a href="newproducts.php" class="btn">See Products</a>
                    </div>

                </div>
            
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margitop">
                <div class="trending-box">
                    <figure><img src="images1/L6.jpg" /></figure>
                    <h3>Bedroom Lighting</h3>
                    <div class="content">
            
                        <a href="index4.php" class="btn">See Products</a>
                    </div>

                </div>


            </div>

        </div>
    </div>
</div>
<!-- end trending -->

<!-- our brand -->
<div class="brand">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2>Featured <strong class="black">Brands</strong></h2>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="brand-bg">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                <div class="brand-box">
                    <i><img src="./Screenshot_20230323_100641.png"/></i>
                    <h3>HALL SHOWCASE</h3>
                   
                    <div class="content">
            
                        <a href="1.php" class="btn">shop now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                <div class="brand-box">
                    <i><img src="./Screenshot_20230323_113802.png"/></i>
                    <h3>DOUBLE BED PAPILLON</h3>
                    <div class="content">
            
                        <a href="1.php" class="btn">shop now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="brand-box">
                    <i><img src="icon`/p3.png"/></i>
                    <h3>WOODEN Chair</h3>
                   
                    <div class="content">
            
                        <a href="1.php" class="btn">shop now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="brand-box">
                    <i><img src="icon`/p4.png"/></i>
                    <h3>TRADITIONAL OLD TABLE</h3>
                   
                    <div class="content">
            
                        <a href="1.php" class="btn">shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="brand-bg">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                <div class="brand-box">
                    <i><img src="./freeze 2.jpg"/></i>
                    <h3>HAIER HRD-1923PRL-E</h3>
                    <span>color- red chilly</span>
                    <div class="content">
            
                        <a href="1.php" class="btn">shop now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                <div class="brand-box">
                    <i><img src="./freeze 1.jpg"/></i>
                    <h3>HAIER HRD-1923PKL-E</h3>
                    <span>color- Black lilly</span>  <div class="content">
            
                        <a href="1.php" class="btn">shop now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="brand-box">
                    <i><img src="./f3.jpg"/></i>
                    <h3>HAIER HRD-1953CPRF-E</h3>
                    <span>color- Red Fresia</span>
                    <div class="content">
            
                        <a href="1.php" class="btn">shop now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="brand-box">
                    <i><img src="f4.jpg"/></i>
                    <h3>HAIER HRD-1953CPMF-E</h3>
                    <span>color- Marine Fresia</span>
                    <div class="content">
            
                        <a href="1.php" class="btn">shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="brand-bg">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                <div class="brand-box">
                    <i><img src="sofa 4.jpeg"/></i>
                    <h3>luxury sofa</h3>
                    <span></span>
                    <div class="content">
            
                        <a href="ind1.php" class="btn">see prducts</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                <div class="brand-box">
                    <i><img src="sofa1.jpeg"/></i>
                    <h3>luxury sofa</h3>
                    <span></span>  <div class="content">
            
                        <a href="ind1.php" class="btn">see prducts</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="brand-box">
                    <i><img src="sofa2.jpeg"/></i>
                    <h3>luxury sofa</h3>
                    <span></span>
                    <div class="content">
            
                        <a href="ind1.php" class="btn">see prducts</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="brand-box">
                    <i><img src="sofa1.jpeg"/></i>
                    <h3>luxury sofa</h3>
                    <span></span>
                    <div class="content">
            
                        <a href="ind1.php" class="btn">see prducts</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



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
            <a href="about.php"> <i class="fas fa-arrow-right"></i> about</a>
           
            
            <a href="contact.php"> <i class="fas fa-arrow-right"></i> contact</a>
        </div>

       

        <div class="box">
            <h3>extra links</h3>
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
