<?php 
    require_once('dbconfig.php');
    require_once('model.php');

    $Id = $_GET['id'];
    $info = array();
    $response = array();

    $query = "SELECT * FROM `SongAlbum` WHERE `AlbumId`='{$Id}'";
    $res = mysqli_query($dbconn, $query);

    if($res){
        while($row = mysqli_fetch_assoc($res)){
            $songQuery = "SELECT * FROM `Song` WHERE `Id`='{$row['SongId']}'";
            $songRes = mysqli_query($dbconn, $songQuery);
            $song = mysqli_fetch_assoc($songRes);
            
            $genreIDQuery="SELECT * FROM `SongGenre` WHERE `SongId`='{$song['Id']}'";
            $genreIDRes = mysqli_query($dbconn, $genreIDQuery);
            $genreIDRow = mysqli_fetch_assoc($genreIDRes);
            
            $genreQuery="SELECT * FROM `Genre` WHERE `Id`='{$genreIDRow['GenreId']}'";
            $genreRes = mysqli_query($dbconn, $genreQuery);
            $genreRow = mysqli_fetch_assoc($genreRes);

            $artistIDQuery = "SELECT * FROM `SongArtist` WHERE `SongId`='{$song['Id']}'";
            $artistIDRes = mysqli_query($dbconn, $artistIDQuery);
            $artistIDRow = mysqli_fetch_assoc($artistIDRes);
            
            $artistQuery = "SELECT * FROM `Artist` WHERE `Id`='{$artistIDRow['ArtistId']}'";
            $artistRes = mysqli_query($dbconn, $artistQuery);
            $artistRow = mysqli_fetch_assoc($artistRes);

            array_push($info, new Song($song['Id'], $song['Title'], $song['SongURI'], $song['CoverURI'], $artistRow['Name'], $genreRow['Name'], $song['NumberOfStream']));
        }
        array_push($response, new Success(200, "Thành công", $info));
    } else{
        array_push($response, new Fail(404, "Lỗi Hệ thống!"));
    }

    echo json_encode($info);
?>