<?php
    require_once "connect.php";

    $id = $_GET["id"];
    $sql = "SELECT * FROM stock WHERE ISBN = $id";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_assoc($result);

    if(isset($_POST["submit"])){
        $title = $_POST["title"];
        $img = $_POST["image"];
        $des = $_POST["short_des"];
        $type = $_POST["type"];
        $autfn = $_POST["author_fn"];
        $autln = $_POST["author_ln"];
        $pubn = $_POST["publisher"];
        $pubad = $_POST["pub_adress"];
        $pubda = $_POST["pub_date"];
        $status = $_POST["status"];
        $price = $_POST["price"];

        $sql1 = "UPDATE `stock` SET `title`='$title',`image`='$img',`short_des`='$des',`type`='$type',`author_fn`='$autfn',`author_ln`='$autln',`publisher`='$pubn',`pub_adress`='$pubad',`pub_date`='$pubda',`status`='$status',`price`='$price' WHERE ISBN = $id"; 
        if(mysqli_query($connect,$sql1)){
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
    <title>Edit</title>
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
    <h1 class="fs-1 text-center" style="font-family: fantasy; padding-top: 50px;">Edit Data</h1>
    <form method="POST">
        <div class="container text-center bg-secondary text-light rounded">
            <h1>Title</h1>
            <input type="text" value="<?= $row["title"]; ?>" name="title">
            <br><br>
            <h1>Image Name</h1>
            <input type="text" value="<?= $row["image"]; ?>" name="image">
            <br><br>
            <h1>Description</h1>
            <input type="text" class="form-control" value="<?= $row["short_des"]; ?>" name="short_des">
            <br><br>
            <h1>Type of Product (Book/CD/DVD)</h1>
            <input type="text" value="<?= $row["type"]; ?>" name="type">
            <br><br>
            <h1>Authors Name</h1>
            <input type="text" value="<?= $row["author_fn"]; ?>" name="author_fn">
            <input type="text" value="<?= $row["author_ln"]; ?>" name="author_ln">
            <br><br>
            <h1>Publishers info</h1>
            <input type="text" value="<?= $row["publisher"]; ?>" name="publisher">
            <input type="text" value="<?= $row["pub_adress"]; ?>" name="pub_adress">
            <br><br>
            <h1>Publishing Date</h1>
            <input type="text" value="<?= $row["pub_date"]; ?>" name="pub_date">
            <br><br>
            <h1>In Stock or not</h1>
            <input type="text" value="<?= $row["status"]; ?>" name="status">
            <br><br>
            <h1>Price</h1>
            <div class="input-group mb-3 d-flex justify-content-center">
            <span class="input-group-text">Є</span>
            <input type="text" value="<?= $row["price"]; ?>" name="price">
            </div>
            <br><br>

            <input type="submit" class='btn btn-primary' name="submit" value="Save Edited Data">
            <br><br>
            <p>© 2023 Copyright: Viktor Beckes</p>
            
        <div>
        

    </form>
    
</body>
</html>