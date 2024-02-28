<?php

require_once 'components/db_connect.php';

$listPub = "";


if(isset($_GET['publisher_name'])){
$publisher = $_GET['publisher_name'];
$sql = "SELECT * FROM `media_biglibrary` WHERE `publisher_name` = '$publisher'";
$result = mysqli_query($connect,$sql);



if($rows = mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)) {
        $listPub .= "
      <div class='col md-4 p-2'>
        <div class='card h-100'>
          <img src= assets/$row[picture] class='card-img-top object-fit-cover' style='height:15rem' alt=''>
          <div class='card-body d-flex flex-column align-items-center'>
            <p class='card-text'>$row[type]</p>
            <h4 class='card-text'>Publisher: $row[publisher_name]</h4>
            <h5 class='card-text'>Address: $row[publisher_address]</h5>
            <hr>
            <h5 class='card-title'>Title: $row[title]</h5>
            <h5 class='card-title fst-italic'>Author: $row[author_first_name] $row[author_last_name]</h5>
            <div class='mt-auto align-self-center'>
            <a href='details.php?id=$row[id]' class='btn btn-outline-dark mt-auto'>Show details</a>
            <a href='update.php?id=$row[id]' class='btn btn-warning'>Edit</a>
            <a href='delete.php?id=$row[id]' class='btn btn-danger'>Delete</a>
            </div>
          </div>
        </div>
      </div>
      ";   
    }
}
else {
    $listPub = "No data";
}

};

mysqli_close($connect);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Big Media Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<?php require_once 'components/navbar.php';?>

<div class="container">
 <div class="row row-cols-lg-2 row-cols-md-2"> 

   <?= $listPub ?>

 </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
</body>
</html>