<!DOCTYPE html>
<html lang="en">
<?php include_once("controller.php"); ?>
<?php
$visited = false;
$email = $_SESSION['email'];
$password = $_SESSION['password'];
$fname = $_SESSION['name'];

if($email != false && $password != false){
    $query = "SELECT * FROM userInfo WHERE email = '$email' AND password = '$password'";
    $run_query = mysqli_query($conn , $query);
    if($run_query){
        $fetch_data = mysqli_fetch_assoc($run_query);
        $status = $fetch_data['status'];
        if($status != "Verified"){
            header("location: otp.php");
        }
        if($status == "Verified"){
            $_SESSION['loggedin'] = true;
            $visited = true;
        }
    }
}
else{
    header('location: login.php');
}
?>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style1.css">
   <link rel="stylesheet" href="css/style.css">

   <!-- custom js file link  -->
   <script src="js/script1.js" defer></script>

</head>
<body>
   
<div class="container">
<section class="heading">
    <h3>our shop</h3>
    <p> <a href="shop.php">back</a> / <span>shop</span> </p>
</section>


   <h3 class="title"> Sofa Set And Chairs </h3>

   <div class="products-container">

      <div class="product" data-name="p-1">
         <img src="images/sofa1.jpg" alt="">
         <h3>Sofa</h3>
         <div class="price">Rs.25000</div>
      </div>

      <div class="product" data-name="p-2">
         <img src="images/sofa2.jpg" alt="">
         <h3>Velvet 3 Seater Sofa Set</h3>
         <div class="price">Rs.20000</div>
      </div>

      <div class="product" data-name="p-3">
         <img src="images/sofa4.jpg" alt="">
         <h3>Red Sofa Set</h3>
         <div class="price">Rs.30000</div>
      </div>

      <div class="product" data-name="p-4">
         <img src="images/chair1.jpg" alt="">
         <h3>Chair</h3>
         <div class="price">Rs.5000</div>
      </div>

      <div class="product" data-name="p-5">
         <img src="images/chair2.jpg" alt="">
         <h3>Chair</h3>
         <div class="price">Rs.7000</div>
      </div>

      <div class="product" data-name="p-6">
         <img src="images/chair3.jpg" alt="">
         <h3>Chair</h3>
         <div class="price">Rs.4000</div>
      </div>

      <div class="product" data-name="p-7">
         <img src="images/sofa5.jpg" alt="">
         <h3>Sofa</h3>
         <div class="price">Rs.35000</div>
      </div>

      <div class="product" data-name="p-8">
         <img src="images/sofa6.jpg" alt="">
         <h3>Orange Sofa</h3>
         <div class="price">Rs.25000</div>
      </div>

      <div class="product" data-name="p-9">
         <img src="images/sofa7.jpg" alt="">
         <h3>Velvet 2 Seater Sofa</h3>
         <div class="price">Rs.30000</div>
      </div>
      <div class="product" data-name="p-10">
         <img src="images/chair4.jpg" alt="">
         <h3>Velvet Chair</h3>
         <div class="price">Rs.4000</div>
      </div>
      <div class="product" data-name="p-11">
         <img src="images/chair5.jpg" alt="">
         <h3>Chair</h3>
         <div class="price">Rs.2000</div>
      </div>
      <div class="product" data-name="p-12">
         <img src="images/chair6.jpg" alt="">
         <h3>Chair</h3>
         <div class="price">Rs.5000</div>
      </div>
      <div class="product" data-name="p-13">
         <img src="images/sofa11.jpg" alt="">
         <h3>Sofa</h3>
         <div class="price">Rs.30000</div>
      </div>
      <div class="product" data-name="p-14">
         <img src="images/sofa12.jpg" alt="">
         <h3>Sofa</h3>
         <div class="price">Rs.15000</div>
      </div>
      <div class="product" data-name="p-15">
         <img src="images/sofa13.jpg" alt="">
         <h3>Sofa</h3>
         <div class="price">Rs.20000</div>
      </div>
      <div class="product" data-name="p-16">
         <img src="images/chair7.jpg" alt="">
         <h3>Chair</h3>
         <div class="price">Rs.2000</div>
      </div>
      <div class="product" data-name="p-17">
         <img src="images/chair8.jpg" alt="">
         <h3>Chair</h3>
         <div class="price">Rs.3000</div>
      </div>
      <div class="product" data-name="p-18">
         <img src="images/chair9.jpg" alt="">
         <h3>Chair</h3>
         <div class="price">Rs.2500</div>
      </div>

   </div>

</div>

<div class="products-preview">

   <div class="preview" data-target="p-1">
      <i class="fas fa-times"></i>
      <img src="images/sofa1.jpg" alt="">
      <h3>Sofa</h3>
     
      <p>Different Types of Sofa and Chairs Available</p>
     
      <div class="buttons">
         <a href="1.php" class="buy">send enquiery</a>
        
      </div>
   </div>

   <div class="preview" data-target="p-2">
      <i class="fas fa-times"></i>
      <img src="images/sofa2.jpg" alt="">
      <h3>Velvet 3 Seater Sofa Set</h3>
     
    
      <p>Different Types of Sofa and Chairs Available</p>
   
      <div class="buttons">
      <a href="1.php" class="buy">send enquiery</a>
      
      </div>
   </div>

   <div class="preview" data-target="p-3">
      <i class="fas fa-times"></i>
      <img src="images/sofa4.jpg" alt="">
      <h3>Red Sofa Set</h3>
     
      <div class="buttons">
      <a href="1.php" class="buy">send enquiery</a>
        
      </div>
   </div>

   <div class="preview" data-target="p-4">
      <i class="fas fa-times"></i>
      <img src="images/chair1.jpg" alt="">
      <h3>Chair</h3>
      
      <div class="buttons">
      <a href="1.php" class="buy">send enquiery</a>
        
      </div>
   </div>

   <div class="preview" data-target="p-5">
      <i class="fas fa-times"></i>
      <img src="images/chair2.jpg" alt="">
      <h3>Chair</h3>
     
      <div class="buttons">
      <a href="1.php" class="buy">send enquiery</a>
      
      </div>
   </div>

   <div class="preview" data-target="p-6">
      <i class="fas fa-times"></i>
      <img src="images/chair3.jpg" alt="">
      <h3>Chair</h3>
     
      <div class="buttons">
      <a href="1.php" class="buy">send enquiery</a>
        
      </div>
   </div>
   <div class="preview" data-target="p-7">
      <i class="fas fa-times"></i>
      <img src="images/sofa5.jpg" alt="">
      <h3>Sofa</h3>
    
      <div class="buttons">
      <a href="1.php" class="buy">send enquiery</a>
       
      </div>
   </div>

   <div class="preview" data-target="p-8">
      <i class="fas fa-times"></i>
      <img src="images/sofa6.jpg" alt="">
      <h3>Orange Sofa</h3>
    
      <div class="buttons">
      <a href="1.php" class="buy">send enquiery</a>
       
      </div>
   </div>

   <div class="preview" data-target="p-9">
      <i class="fas fa-times"></i>
      <img src="images/sofa7.jpg" alt="">
      <h3>Velvet 2 Seater Sofa</h3>
     
      <div class="buttons">
      <a href="1.php" class="buy">send enquiery</a>
      </div>
      
      </div>
      <div class="preview" data-target="p-10">
      <i class="fas fa-times"></i>
      <img src="images/chair4.jpg" alt="">
      <h3>Velvet chair</h3>
     
      <div class="buttons">
      <a href="1.php" class="buy">send enquiery</a>
      
      </div>
</div>
<div class="preview" data-target="p-11">
      <i class="fas fa-times"></i>
      <img src="images/chair5.jpg" alt="">
      <h3>Chair</h3>
     
      <div class="buttons">
      <a href="1.php" class="buy">send enquiery</a>
      
      </div>
</div>
<div class="preview" data-target="p-12">
      <i class="fas fa-times"></i>
      <img src="images/chair6.jpg" alt="">
      <h3>Chair</h3>
     
      <div class="buttons">
      <a href="1.php" class="buy">send enquiery</a>
      
      </div>
</div>
<div class="preview" data-target="p-13">
      <i class="fas fa-times"></i>
      <img src="images/sofa11.jpg" alt="">
      <h3>Sofa Set</h3>
     
      <div class="buttons">
      <a href="1.php" class="buy">send enquiery</a>
      
      </div>
</div>
<div class="preview" data-target="p-14">
      <i class="fas fa-times"></i>
      <img src="images/sofa12.jpg" alt="">
      <h3>Sofa</h3>
     
      <div class="buttons">
      <a href="1.php" class="buy">send enquiery</a>
      
      </div>
</div>
<div class="preview" data-target="p-15">
      <i class="fas fa-times"></i>
      <img src="images/sofa13.jpg" alt="">
      <h3>Sofa</h3>
     
      <div class="buttons">
      <a href="1.php" class="buy">send enquiery</a>
      
      </div>
</div>
<div class="preview" data-target="p-16">
      <i class="fas fa-times"></i>
      <img src="images/chair7.jpg" alt="">
      <h3>Chair</h3>
     
      <div class="buttons">
      <a href="1.php" class="buy">send enquiery</a>
      
      </div>
</div>
<div class="preview" data-target="p-17">
      <i class="fas fa-times"></i>
      <img src="images/chair8.jpg" alt="">
      <h3>Chair</h3>
     
      <div class="buttons">
      <a href="1.php" class="buy">send enquiery</a>
      
      </div>
</div>
<div class="preview" data-target="p-18">
      <i class="fas fa-times"></i>
      <img src="images/chair9.jpg" alt="">
      <h3>Chair</h3>
     
      <div class="buttons">
      <a href="1.php" class="buy">send enquiery</a>
      
      </div>
</div>
   

</div>

</body>
</html>