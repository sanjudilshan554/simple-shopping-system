<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form action="./script.php" method="POST">
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Hand Made Gift</h2>
            </div>

        
        </div> 
        
        <div class="content">
            <h1> Online<br><span>Hand Made Gift seller</span></h1>
            <p class="par">Begin by explaining the concept and significance of handmade gifts.<br> Highlight the personal touch and sentimental value that handmade
                items hold for both the creator <br> and the recipient </p>

                <!--<button class="cn"><a href="#">JOIN US</a></button> -->

                <div class="form">
                    <h2>Login Here</h2>
                    <input type="email" name="email" placeholder="Enter Email Here">
                    <input type="password" name="password" placeholder="Enter Password Here">

                    <input type="submit" name="login" value="Login" class="btnn">
                    <!-- <button class="btnn" ><a href="#">Login</a></button> -->

                    <p class="link">Don't have an account<br>
                    <a href="signup.php">Sign up </a> here</a></p>
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
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</form>

<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

<?php if(isset($_SESSION['login_error'])):?>
    <input type="hidden" id="loginError" value="<?php echo $_SESSION['login_error'];?>">
<?php unset($_SESSION['login_error']); endif; ?>

<script>
    //javascript to display popup
    const loginError= document.getElementById('loginError').value;
    if(loginError){
        alert(loginError);
    }
</script>
</body>
</html>