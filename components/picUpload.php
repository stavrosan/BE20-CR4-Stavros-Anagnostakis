<?php

//Function for uploading pictures from prework with assets the destination file and then display them all in index.php. 
   function picUpload($picture){

    //If statement, if no picture has been chosen but we have set value Null in sql so not so important I guess. Not sure about that
    if($picture["error"] == 4){ 
        $pictureName = "robbins.jpg"; //when no picture is chosen set default picture so we don´t have a broken image 
        $message = "No picture has been chosen, but you can upload an image later :)";
    } else{
        $checkIfImage = getimagesize($picture["tmp_name"]); 
        $message = $checkIfImage ? "Ok" : "Not an image";
    }

        if($message == "Ok"){
           $ext = strtolower(pathinfo($picture[ "name"],PATHINFO_EXTENSION)); 
           $pictureName = uniqid( ""). "." . $ext; 
           $destination = "assets/{$pictureName}"; //the file will be saved in assets folder
           move_uploaded_file($picture["tmp_name"], $destination); 
       }

        return [$pictureName, $message]; 
   }

?>