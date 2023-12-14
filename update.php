<?php

require_once 'components/db_connect.php';
require_once 'components/picUpload.php'; //we can update picture and send it to assets folder

//Select id to update specific item
$sql = "SELECT * FROM `media_biglibrary` WHERE `id` = $_GET[id]";
$result = mysqli_query($connect,$sql);
$row = mysqli_fetch_assoc($result);

//Select which cols to update in the form in HTML
if(isset($_POST["update"])){
$title = $_POST["title"];
$picture = picUpload($_FILES["picture"]);
$type = $_POST["type"];
$authorln = $_POST["author_last_name"];
$description = $_POST["short_description"];


$sql = "UPDATE `media_biglibrary` SET `title`='$title',`picture`='$picture[0]',`type`='$type',`author_last_name`='$authorln',`short_description`='$description' WHERE `id` = $_GET[id] ";
if(mysqli_query($connect,$sql)){
    echo "
    <div class='alert alert-success' role='alert'>
        Product updated!
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

               <form action="" method="POST" class="mx-auto mt-4" style="width:60%" enctype="multipart/form-data">
               <div class="mb-3">
               <input type="text" class="form-control" name="title" placeholder="Change title"  value="<?= $row["title"] ?>">
               </div>
               <div class="mb-3">
               <input type="text" class="form-control" name="author_last_name" placeholder="Change author name" value="<?= $row["author_last_name"] ?>">
               </div>
               <div class="mb-3">
               <input type="text" class="form-control" name="short_description" placeholder="Change short description" value="<?= $row["short_description"] ?>">
               </div>
               <div class="mb-3">
               <input type ="file" class="form-control" name="picture" value="<?= $row["picture"]?>">
               </div>
               <div class="mb-3">
               <select name=type>
                    <option value="Book" <?php $row["type"] == "Book" ? "selected" : "" ?>>Book</option>
                    <option value="CD" <?php $row["type"] == "CD" ? "selected" : "" ?>>CD</option>
                    <option value="DVD" <?php $row["type"] == "DVD" ? "selected" : "" ?>>DVD</option>
               </select>
               </div>
               <div class="mb-3">
               <button name="update" value="Update" type="submit" class="btn btn-warning">Update</button>
               </div>
               </form>
                           
        </div>
            
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
</body>
</html>