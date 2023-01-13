<?php 
    require_once('dbconfig.php');
    require_once('model.php');

    $Id = $_GET['id'];
    $info = array();
    $response = array();
    
    $artistIDQuery = "SELECT * FROM `SongArtist` WHERE `ArtistId`='{$Id}'";
    $artistIDRes = mysqli_query($dbconn, $artistIDQuery);
    
    if($artistIDRes){
        while($artistIDRow = mysqli_fetch_assoc($artistIDRes)){
            $query = "SELECT * FROM `Song` WHERE `Id`='{$artistIDRow['SongId']}'";
            $res = mysqli_query($dbconn, $query);
            $row = mysqli_fetch_assoc($res);
            
            $genreIDQuery="SELECT * FROM `SongGenre` WHERE `SongId`='{$row['Id']}'";
            $genreIDRes = mysqli_query($dbconn, $genreIDQuery);
            $genreIDRow = mysqli_fetch_assoc($genreIDRes);
            
            $genreQuery="SELECT * FROM `Genre` WHERE `Id`='{$genreIDRow['GenreId']}'";
            $genreRes = mysqli_query($dbconn, $genreQuery);
            $genreRow = mysqli_fetch_assoc($genreRes);

            $artistQuery = "SELECT * FROM `Artist` WHERE `Id`='{$artistIDRow['ArtistId']}'";
            $artistRes = mysqli_query($dbconn, $artistQuery);
            $artistRow = mysqli_fetch_assoc($artistRes);

            array_push($info, new Song($row['Id'], $row['Title'], $row['SongURI'], $row['CoverURI'], $artistRow['Name'], $genreRow['Name'], $row['NumberOfStream']));

        }
        array_push($response, new Success(200, "Thành công", $info));
    } else{
        array_push($response, new Fail(404, "Lỗi Hệ thống!"));
    }

    echo json_encode($info);
?>