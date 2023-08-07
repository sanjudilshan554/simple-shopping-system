<?php 
    include("./dbconnect.php");
    include("script.php");
    include("./footer.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./mycss.css">
    <title>Document</title>
</head>
<body style="background-image:url('service_bak.jpg'); background-size:cover;" >
<div class="container"></div>

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
                <div class="card m-2" style="width: 18rem;">
                     <?php 
                        echo '<img src="data:image;base64,' . base64_encode($row['image']). '"/>';
                       ?>
                         
                     

                    <div class="card-body">
                        <h5 class="card-title"><?php  echo $name?></h5>
                        <p class="card-text"><?php echo $description?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $model?></li>
                        <li class="list-group-item"><?php echo $price?></li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="btn">Buy item</a>
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
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>