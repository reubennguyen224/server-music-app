<?php
    require_once('dbconfig.php');
    require_once('model.php');
    
    $favourID = $_POST['favouriteId'];
    $songID = $_POST['songId'];
    $response = array();
    
    $insertQuery = "INSERT INTO `SongFavourite`(`SongId`, `FavouriteId`) VALUES ('$songID','$favourID')";
    $insertRes =  mysqli_query($dbconn, $insertQuery);
    
    if($insertRes){
        array_push($response, new Fail(200, "Cap nhat xog"));
    }else{
        array_push($response, new Fail(404, "Failed"));
    }

    echo json_encode($response);
?>