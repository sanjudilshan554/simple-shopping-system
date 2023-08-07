<?php
    include('./dbconnect.php');

    session_start();

    if(isset($_POST['signup'])){

        echo 'hello' ;
       $name=mysqli_real_escape_string($con,$_POST['name']);
       $address=mysqli_real_escape_string($con,$_POST['address']);
       $gender=mysqli_real_escape_string($con,$_POST['gender']);
       $email=mysqli_real_escape_string($con,$_POST['email']);
       $phone=mysqli_real_escape_string($con,$_POST['phone']);
       $password=mysqli_real_escape_string($con,$_POST['password']);
       
       $sql="INSERT INTO registration (name,address,gender,email,phone,password) VALUES ('$name','$address','$gender','$email','$phone','$password')";
       $res=mysqli_query($con,$sql);

       if($res){
            header('location:signup.php');
            $message="Account create successfully: Now you can loging with your user name and password";
            $_SESSION['signup_success']=$message;
            exit();
       }
       else{
            header('location:signup.php');
            $message="Account create unccessfully: Check the filled details again";
            $_SESSION['signup_success']=$message;
            exit();
       }
    }

    if(isset($_POST['login'])){

        
        $email=mysqli_real_escape_string($con,$_POST['email']);
        $pass=mysqli_real_escape_string($con,$_POST['password']);

        $sql="SELECT * FROM registration WHERE email='$email' AND password='$pass'";
        $res=mysqli_query($con,$sql);

        $row=mysqli_fetch_assoc($res);
        $name=$row['name'];

        if(mysqli_num_rows($res)>0){
            $_SESSION['user']=$name;
            header('location:home.php');
        }else{
            header('location: index.php'); // Redirect back to index.php
            $errorMessage = 'Incorrect username or password';
            $_SESSION['login_error'] = $errorMessage;
            exit();
            
        }
    }

    if(isset($_POST['additems'])){

        $image=$_FILES['image']['tmp_name'];
        $imageData=addslashes(file_get_contents($image));

        $name=mysqli_real_escape_string($con,$_POST['name']);
        $model=mysqli_real_escape_string($con,$_POST['model']);
        $description=mysqli_real_escape_string($con,$_POST['description']);
        $price=mysqli_real_escape_string($con,$_POST['price']);

        $sql="INSERT INTO store (name,model,description,price,image) VALUES ('$name','$model','$description','$price','$imageData')";
        $res=mysqli_query($con,$sql);

        if($res){
            echo "Insertion successfully";
        }else{
            echo "Insertion failed";
        }
    }

?>
