<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./popup.css">
    <title>Document</title>
</head>
<body style="background-image:url('additem.jpg'); background-size:cover">
    <form action="script.php" method="POST" enctype="multipart/form-data">

    <br>
    <a href="home.php" class="back">back</a>

    <h1 class="display-1 text-center" style="color:white;">Add Something to store</h1>
        <div class="form-group p-5 m-5">
            <div class="">
                <div style="color:white;">Item name</div>
                <input class="form-control"type="text" placeholder="Item name" name="name">
            </div>

            <div class="">
                <div style="color:white;">Model</div>
                <input class="form-control" type="text" placeholder="Model" name="model">
            </div>

            <div class="">
                <div style="color:white;">Description</div>
                <input class="form-control" type="text" placeholder="Description" name="description">
            </div>

            <div class="">
                <div style="color:white;">Price</div>
                <input class="form-control" type="text" placeholder="Price" name="price">
            </div>

            <div class="">
                <div style="color:white;">Image</div>
                <input class="form-control" type="file" placeholder="Image" name="image" id="image">
            </div>

            <div class="">
                <input type="submit" name="additems" value="Add item" class="btn btn-primary mt-4 " >
                
            </div>


        </div>
    </form>
</body>
</html>