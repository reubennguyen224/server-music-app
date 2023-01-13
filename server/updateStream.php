<?php 

    require_once('dbconfig.php');
    require_once('model.php');

    $Id = $_POST['Id'];
    $response = array();

    $songQuery = "SELECT * FROM `Song` WHERE `Id`='{$Id}'";
    $songRes = mysqli_query($dbconn, $songQuery);
    $song = mysqli_fetch_assoc($songRes);

    $stream = $song['NumberOfStream'];
    $stream++;
    
    $date = date("Y/m/d");
    $listenQuery = "INSERT INTO `Listens`(`SongId`, `ListenDate`) VALUES ('{$Id}','{$date}')";
    $listenRes = mysqli_query($dbconn, $listenQuery);
    
    $saveQuery = "UPDATE `Song` SET `NumberOfStream`= '{$stream}' WHERE `Id`='{$Id}'";
    $saveRes = mysqli_query($dbconn, $saveQuery);
    
    if($saveQuery){
        array_push($response, new Fail(200, "Cap nhat xog"));
    }else{
        array_push($response, new Fail(404, "Failed"));
    }

    echo json_encode($response);

?>