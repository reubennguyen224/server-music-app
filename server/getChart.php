<?php
    require_once('dbconfig.php');
    
    require_once('model.php');
    $type = $_GET['Id'];
    
    $info = array();
    $response = array();
    
    $query = "SELECT * FROM `SongChart` WHERE `MusicChartId` = '1' ORDER BY `Id` DESC LIMIT 10";
    $res = mysqli_query($dbconn, $query);

    if($res){
        
        while($row = mysqli_fetch_assoc($res)){
            $songQuery = "SELECT * FROM `Song` WHERE `Id`='{$row['SongId']}'";
            $songRes = mysqli_query($dbconn, $songQuery);
            $songRow = mysqli_fetch_assoc($songRes);

            $artistIDQuery = "SELECT * FROM `SongArtist` WHERE `SongId`='{$songRow['Id']}'";
            $artistIDRes = mysqli_query($dbconn, $artistIDQuery);
            $artistIDRow = mysqli_fetch_assoc($artistIDRes);
            
            $artistQuery = "SELECT * FROM `Artist` WHERE `Id`='{$artistIDRow['ArtistId']}'";
            $artistRes = mysqli_query($dbconn, $artistQuery);
            $artistRow = mysqli_fetch_assoc($artistRes);

            array_push($info, new Chart($row['Rank'], $songRow['Title'], $artistRow['Name'], $songRow['CoverURI']));
        }
        
        array_push($response, new Success(200, "Thành công", $info));
    } else{
        array_push($response, new Fail(404, "Lỗi Hệ thống!"));
    }

    echo json_encode($info);

?>