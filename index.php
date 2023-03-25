<?php
    require_once "connect.php"; //imports my connect to database file

    $sql = "SELECT * FROM stock"; //command for selceting my table in my database
    $result = mysqli_query($connect, $sql); //combo of connect and select commands
    $layout = "";

    

    if(mysqli_num_rows($result) > 0){ //checks for data
        while($row = mysqli_fetch_assoc($result)){ //if there is data
            if($row["status"] == "avalable"){  //checks avalable status and assighns it to a $success depeding on input
                $success = "<th scope='col' class='bg-success' >{$row["status"]}</th>"; 
            }else{
                $success = "<th scope='col' class='bg-danger' >{$row["status"]}</th>"; 
            }
            $layout .= "             
            <tr>                                              
                <th scope='col'>{$row["ISBN"]}</th>
                <th scope='col'>{$row["title"]}</th>
                <th scope='col'>{$row["type"]}</th>
                <th scope='col'>{$row["author_fn"]} {$row["author_ln"]}</th>
                <th scope='col'>{$row["publisher"]}</th>
                <th scope='col'>{$row["pub_date"]}</th>
                {$success}
                <th scope='col'><a href='edit.php?id={$row["ISBN"]}' class='btn btn-warning'>Edit</a></th>
                <th scope='col'><a href='details.php?id={$row["ISBN"]}' class='btn btn-primary'>Details</a></th>
                <th scope='col'><a href='delete.php?id={$row["ISBN"]}' class='btn btn-danger'>Delete</a></th>
            </tr>"; //this is how the data will be printed in the html

        }

    }else{
        $layout .= "No Result"; //if no data
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BE18_CR4_viktorbeckes_BigLibrary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> <!-- bootsrap -->
    <style> 
        body{ /*adding an internal css to my page*/
            background-color: #FAE5D3;
        }

        .container{
            padding-top: 100px;
        }
    </style>

</head>
<body>
    <div class="container text-center">
    <a href='create.php' class='btn btn-primary'>Add Data</a>
    <br><br>
    <table class="table table-dark">
  <thead>
    <tr class="table-primary"> <!-- primery table row -->
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Type</th>
      <th scope="col">Author</th>
      <th scope="col">Publisher</th>
      <th scope="col">Release Date</th>
      <th scope="col">Status</th>
      <th scope="col">Edit</th>
      <th scope="col">Details</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

        <?= $layout; ?> <!-- this is where the data gets printeed -->

  </tbody>
</table>
<p>© 2023 Copyright: Viktor Beckes</p>
    </div>
   
</table>
</body>
</html>