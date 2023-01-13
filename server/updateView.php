<?php 

    require_once('dbconfig.php');
    require_once('model.php');

    $Id = $_POST['Id'];
    $response = array();

    $songQuery = "SELECT * FROM `Song` WHERE `Id`='{$Id}'";
    $songRes = mysqli_query($dbconn, $songQuery);
    $song = mysqli_fetch_assoc($songRes);

    $stream = $song['Views'];
    $stream++;
    $saveQuery = "UPDATE `Song` SET `Views`= '{$stream}' WHERE `Id`='{$Id}'";
    $saveRes = mysqli_query($dbconn, $saveQuery);
    
    if($saveQuery){
        array_push($response, new Fail(200, "Cap nhat xog"));
    }else{
        array_push($response, new Fail(404, "Failed"));
    }

    echo json_encode($response);
?>