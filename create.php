<?php
    if(isset($_POST["submit"])){
        require_once "connect.php";

        $title = $_POST["title"];
        $image = $_POST["image"];
        $des = $_POST["short_des"];
        $type = $_POST["type"];
        $autfn = $_POST["author_fn"];
        $autln = $_POST["author_ln"];
        $pb = $_POST["publisher"];
        
        $pubda = $_POST["pub_date"];
        $status = $_POST["status"];
        $price = $_POST["price"];

        $yyyy = $_POST["yyyy"]; 
        $mm = $_POST["mm"]; 
        $dd = $_POST["dd"];
        

        $sql = "INSERT INTO `stock`(`title`, `image`, `short_des`, `type`, `author_fn`, `author_ln`, `publisher`, `pub_adress`, `pub_date`, `status`, `price`) VALUES ('$title', '$image','$des','$type','$autfn','$autln','$pb','$pubad','$yyyy-$mm-$dd','$status','$price')";

        if(mysqli_query($connect, $sql)){
            header("Location: index.php");
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> <!-- bootsrap -->
    <style> 
        body{ /*adding an internal css to my page*/
            background-color: #FAE5D3;
        }

        .container{
            padding-top: 50px;
            margin-top: 50px;
            margin-bottom: 50px;
        }

       
    </style>
</head>
<body>
    <h1 class="fs-1 text-center" style="font-family: fantasy; padding-top: 50px;">Creat new Data</h1>
    <form method="POST">
        <div class="container text-center bg-secondary text-light rounded">
            <h1>Title</h1>
            <input type="text" placeholder="Title of product" name="title">
            <br><br>
            <h1>Image Name</h1>
            <input type="text" placeholder="Name of image file" name="image">
            <br><br>
            <h1>Description</h1>
            <input class="form-control" type="text" placeholder="Description of product" name="short_des">
            <br><br>
            <h1>Type of Product (Book/CD/DVD)</h1>
            <input type="text" placeholder="type of product" name="type">
            <br><br>
            <h1>Authors Name</h1>
            <input type="text" placeholder="Author's First Name" name="author_fn">
            <input type="text" placeholder="Author's Last Name" name="author_ln">
            <br><br>
            <h1>Publishers info</h1>
            <input type="text" placeholder="Publisher's Name" name="publisher">
            <input type="text" placeholder="Adress from Publisher" name="pub_adress">
            <br><br>
            <h1>Publishing Date</h1>
            <input type="text" placeholder="YYYY" name="yyyy">
            <input type="text" placeholder="MM" name="mm">
            <input type="text" placeholder="DD" name="dd">
            <br><br>
            <h1>In Stock or not</h1>
            <input type="text" placeholder="“available” or “reserved”" name="status">
            <br><br>
            <h1>Price</h1>
            <div class="input-group mb-3 d-flex justify-content-center">
            <span class="input-group-text">Є</span>
            <input type="text" placeholder="Price of Product" name="price">
            </div>
            <br><br>

            <input type="submit" class='btn btn-primary' name="submit" value="Save Data">
            <br><br>
            <p>© 2023 Copyright: Viktor Beckes</p>
            
        <div>
        

    </form>
</body>
</html>