<?php 
    include("./navbar.php");
    include("./footer.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Hand Made Gift</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="service.html">SERVICE</a></li>
                    
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
            </div> -->

            <!--<div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <a href="#"> <button class="btn">Search</button></a>
            </div> -->

        </div> 
        
        <div class="content">
            <h1>Welcome<span>Back</span> <?php echo $_SESSION['user']?></h1>
            
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>