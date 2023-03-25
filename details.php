<?php
    require_once "connect.php";

    $id = $_GET["id"];
    $sql = "SELECT * FROM stock WHERE ISBN = $id";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);

    if($row["status"] == "avalable"){  //checks avalable status and assighns it to a $success depeding on input
        $instock = "<span class='text-dark bg-success'>Status:</span> "; 
    }else{
        $instock = "<span class='text-dark bg-danger'>Status:</span> "; 
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
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
    <div class="container bg-secondary text-light rounded">
        <div class="row">

            <div class="col-lg-8" style="height: 40%;"><img src="images/<?= $row["image"]; ?>" alt="error" class="container"></div>

            <div class="col-lg-4 text-start" style="height: 40%;">
            <br><br><br><br>
                <h2><span class="text-dark" >Name:</span> <?= $row["title"]; ?></h2>
                <h2><span class="text-dark">Author:</span> <?= $row["author_fn"] . " " . $row["author_ln"]; ?></h2>
                <h2><span class="text-dark">Publisher:</span> <?= $row["publisher"] . " ". "Located at:" . " " . $row["pub_adress"]; ?></h2>
                <h2><span class="text-dark">Published on:</span> <?= $row["pub_date"]; ?></h2>
                <h2><?= $instock . " " . $row["status"];?></h2>
                <h2 class="text-success bg-light"><span class="text-dark">Price:</span> <?= $row["price"]; ?><span class="text-dark">€</span></h2>
                <h2><span class="text-dark">Type:</span> <?= $row["type"]; ?></h2>
            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                <h2><span class="text-dark">Description:</span> <?= $row["short_des"]; ?></h2>
                <br><br>
                <p>© 2023 Copyright: Viktor Beckes</p>
                
            </div>
        
     </div>
</body>
</html>