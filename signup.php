<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="./stylesignup.css">
    <link rel="stylesheet" href="./popup.css">
</head>
<body>

<form method="post" action="./script.php">


    <div class="main">
    
</br></br>
    <a href="index.php" class="back">back</a>
        <!-- <div class="navbar">
            <div class="icon">
                <h2 class="logo">Hand Made Gift</h2>
            </div>

        </div>  -->
        <div class="content">
            
               

                <div class="form">
                    <input type="text" name="name" placeholder="Enter Your Name" >
                    <input type="text" name="address" placeholder="Enter Your Address">
                    <input type="text" name="gender" placeholder="Enter Your Gender">
                    <input type="text" name="email" placeholder="Enter Your Email Id">
                    <input type="text" name="phone" placeholder="Enter Your Phone No">
                    <input type="password" name="password" placeholder="Create password">
                    <input type="submit" name="signup" value="signup" class="btnn"> 
                    <!-- <button class="btnn"  ><a href="#">Sign up</a></button> -->

                    <!--<p class="link">Don't have an account<br> 
                    <a href="#">Log in </a> here</a></p>-->
                    <p class="liw">Log in with</p>

                    <div class="icons">
                        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
                    </div>

                </div>
                    </div>
                </div>
        </div>
    </div>
</form>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>




</html>