<?php
//Connection with components to get access to database
require_once 'components/db_connect.php';

//We get the id to delete specific item
if(isset($_GET["id"]) && !empty($_GET["id"])){
   $id = $_GET["id"];

   $sql = "DELETE FROM `media_biglibrary` WHERE `id` = $id";

   mysqli_query($connect,$sql);

}

mysqli_close($connect);

header("Location: index.php");