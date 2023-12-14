<?php

require_once 'components/db_connect.php';
require_once 'components/picUpload.php';


//Select the cols from db table to create a new entry from the form in HTML
if(isset($_POST["create"])){
$title = $_POST["title"];
$picture = picUpload($_FILES["picture"]);
$type = $_POST["type"];
$authorln = $_POST["author_last_name"];
$publisher = $_POST["publisher_name"];
$description = $_POST["short_description"];


$sql = "INSERT INTO `media_biglibrary`(`title`, `picture`,`type`, `author_last_name`,`publisher_name`,`short_description`)
VALUES ('$title','$picture[0]','$type','$authorln','$publisher','$description')";
if(mysqli_query($connect,$sql)){
    echo "
    <div class='alert alert-success' role='alert'>
        Product created!
    </div>
    ";

    }
    else {
    echo "   
    <div class='alert alert-danger' role='alert'>
         Error!
    </div>
   " ;
}
}

mysqli_close($connect);







?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Big Media Library-BE20-CR4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<?php require_once 'components/navbar.php';?>

        <div class="container">

               <form action="" method="POST" enctype= "multipart/form-data" class="mx-auto mt-4" style="width:60%">
            <div class="mb-3">
               <input type="text" class="form-control" name="title" placeholder="Enter title">
            </div>
            <div class="mb-3">
               <input type="text" class="form-control" name="author_last_name" placeholder="Enter author last name">
            </div>
            <div class="mb-3">
               <input type="text" class="form-control" name="publisher_name" placeholder="Enter publisher name">
            </div>
            <div class="mb-3">
               <input type="text" class="form-control" name="short_description" placeholder="Enter short description">
            </div>
            <div class="mb-3">
               <input type="file" class="form-control" name="picture" placeholder="Enter image URL">
            </div>
            <div class="mb-3">
               <select class="form-select" name="type">
                    <option value="Book">Book</option>
                    <option value="CD">CD</option>
                    <option value="DVD">DVD</option>  
               </select>
            </div>
            <button name="create" value="Create" type="submit" class="btn btn-primary">Create</button>
            <a href="index.php" class="btn btn-warning">Back to home</a>
               </form>
                           
        </div>
            
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
</body>
</html>