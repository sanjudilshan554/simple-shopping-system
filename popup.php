<?php 
    include("./dbconnect.php");
    include("script.php");
?>

<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./popup.css">
    <script src="./popup.js"></script>
    <title>Document</title>

    

</head>
<body style="background-image:url('back.jpg'); background-size:cover;">
    <br>
    <a href="home.php" class="back">back</a>

    <div class="">
        <div class="display-1 text-center text" style="color:white;">Buy something special today</div>
    </div>

    

<div class="popup" id="popup-1">
    <div class="overlay"></div>
        <div class="content">
            <div class="close-btn" onclick="togglePopup()">&times;</div>
            <h2>Order placed successfully</h2>
            <p>Order was placed successfully.if you have any problem you can contat us </p>
            <img src="ok.png" alt="missing ok" width="80px" height="80px">
        </div>
</div>

<div class="p-5 ">
    
            <div class="row">
                
                <?php 
                $sql="SELECT * FROM store";
                $res=mysqli_query($con,$sql);

                while($row=mysqli_fetch_assoc($res)){
                    $id=$row['id'];
                    $name=$row['name'];
                    $model=$row['model'];
                    $description=$row['description'];
                    $price=$row['price'];

                    // $imageEncoded=base64_encode($image);
                    ?>
                <div class="card m-2 cd style="width: 18rem;" style="width: 18rem;">
                     <?php 
                        echo '<img src="data:image;base64,' . base64_encode($row['image']). '"/>';
                       ?>
                         
                     

                    <div class="card-body" style="width:12rem;">
                        <h5 class="card-title"><?php  echo $name?></h5>
                        <p class="card-text"><?php echo $description?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $model?></li>
                        <li class="list-group-item"><?php echo $price?></li>
                    </ul>
                    <div class="card-body">
                    <button onclick="togglePopup()" class="btn">Show popup</button>
                    </div>

                </div>
               <?php

                }
            ?>
           
                </div>
            </div>
        </div>
    </div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>