<?php

require_once 'components/db_connect.php';

if(isset($_GET["id"]) && !empty($_GET["id"])){

//Select item´s id to display it in details page
$sql = "SELECT * FROM `media_biglibrary` WHERE `id` = $_GET[id]";

$result = mysqli_query($connect,$sql);
$detCard = "";

if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $detCard .= "
        <div class='p-2'>
        <div class='card h-100'>
        <img src= assets/{$row[0]["picture"]} class='card-img-top object-fit-cover' style='height:30rem' alt='image cover'>
        <div class='card-body'>
          <p class='card-text'>{$row[0]["type"]}</p>
          <h4 class='card-title'>Title: {$row[0]["title"]}</h4>
          <h5 class='card-title'>Author: {$row[0]["author_first_name"]} {$row[0]["author_last_name"]}</h5>
          <p class='card-text'>ISBN: {$row[0]["isbn_code"]}</p>
          <p class='card-text'>Description: {$row[0]["short_description"]}</p>
          <p class='card-text'>Published: {$row[0]["publish_date"]}</p>
          <p class='card-text'>Status: {$row[0]["status"]}</p>
        </div>
      </div>
      </div>
        ";
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

    <?= $detCard ?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
</body>
</html>