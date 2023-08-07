<?php 
    session_start();

    if(isset($_SESSION['user'])){
?>

        <link rel="stylesheet" href="./popup.css">
        
        <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Hand Made Gift</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="popup.php">SERVICE</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="additems.php">Add items</a></li>
                    <li><a href="logout.php" class="logout">Logout</a></li>
                </ul>
            </div>

            
<?php
    }else{
        ?>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Hand Made Gift</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="popup.php">SERVICE</a></li>
                    
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>

        <?php
    }
?>
