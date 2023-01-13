<?php 
    $file_path = "../img/userAvatar/";
    $filePath = "/img/userAvatar/";
    if(!is_dir($file_path)){
        mkdir($file_path, 0755, true);
    }

    $file_path = $file_path . basename($_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $file_path)){
        array_push($response, new Fail(200, "https://hoang2204.000webhostapp.com/".$filePath . basename($_FILES['uploaded_file']['name'])));
    }
    else array_push($response, new Fail(404, "update failed!"));
?>