<?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
       $loggedin = true;
    }
    else{
        $loggedin = false;
    }
    $hide = false;
    echo'<nav class="navbar">';
    if($loggedin){
        echo'<h1>Welcome, ';
        echo $_SESSION['name'];
        echo'</h1>';
    }
        if(!$loggedin){ 
            echo'<a href="login.php">Login</a>
            <a href="registration.php">Register</a>';
            
        }
        if($loggedin){
        echo'<a href="main.php">Home</a>';
        }
        else{
            echo'<a href="home.php">Home</a>';
        }
        echo'
        <a href="shop.php">Shop</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="newproducts.php">Latest Products</a>';
        if($loggedin){
            echo'<a href="logout.php">Logout</a>';
        }
        
    echo'</nav>';
?>
