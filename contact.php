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
<?php
$insert = false;

if(isset($_POST['name'])){

$server = "localhost";
$username = "root";
$password = "";


$con = mysqli_connect($server, $username, $password);

if(!$con)
{
    die("connection to this database failed due to". mysqli_connect_error());

}

// echo "success connecting to the db";
$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$desc = $_POST['desc'];

$sql = "INSERT INTO `info`.`info` ( `name`, `number`, `email`, `message`, `date`) VALUES ('$name', '$number', '$email', '$desc', current_timestamp())";
// echo $sql;

if($con->query($sql)==true){
    // echo "succesfully inserted";
    $insert = true;


}
else{
    echo "ERROR: $sql <br> $con->error";
}

$con->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

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

<!-- shopping cart  -->

<div class="shopping-cart">

   

</div>


<section class="heading">
    <h3>contact us</h3>
    <p> <a href="home.php">home</a> / <span>contact</span> </p>
</section>


<div class="contact">


    <form action="contact.php" method="Post">
        <h3>get in touch</h3>
        <span>your name</span>
        <input type="text" name = "name" class="box">
        <span>your number</span>
        <input type="number"  name = "number" class="box">
        <span>your email</span>
        <input type="email" name="email" class="box">
        <span>your message</span>
        <textarea class="box" name="desc" id="desc" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" class="btn">
        <?php  
     if($insert ==true){

     
     
     echo "<br><h2 style= color:red; >Thanks for showing interest...</h2>";
     }
?>
    </form>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.697945905025!2d74.96207622242883!3d19.524627725998585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdc83e612f3a087%3A0x15662df06fbe9fb8!2sSabne%20Furniture%20Mall!5e0!3m2!1sen!2sin!4v1677824069780!5m2!1sen!2sin" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

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
</html> -->