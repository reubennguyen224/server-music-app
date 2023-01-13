<?php 
    require_once('dbconfig.php');
    require('model.php');

    $query = "SELECT * FROM `Album` ORDER BY `DateCreated` DESC LIMIT 10";
    $res = mysqli_query($dbconn, $query);
    
    $info = array();
    $response = array();

    if($res){
        while($row = mysqli_fetch_assoc($res)){
            $artistQuery = "SELECT * FROM `Artist` WHERE `Id`='{$row['ArtistId']}'";
            $artistRes = mysqli_query($dbconn, $artistQuery);
            $artistRow = mysqli_fetch_assoc($artistRes);

            array_push($info, new Album($row['Id'], $row['Title'], $row['CoverURI'], $row['Type'], $artistRow['Name']));
        }
        array_push($response, new Success(200, "Success", $info));
    } else{
        array_push($response, new Fail(404, "Lỗi Hệ thống!"));
    }

    echo json_encode($info);
?>