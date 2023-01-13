<?php
    require_once('dbconfig.php');
    
    require_once('model.php');
    $query = "SELECT * FROM `Song` ORDER BY `numberOfStream` DESC LIMIT 10";
    $res = mysqli_query($dbconn, $query);

    if($res){
        $rank = 0;
        while($row = mysqli_fetch_assoc($res)){
            $rank++;
            $chartQuery = "INSERT INTO `SongChart`( `MusicChartId`, `SongId`, `Rank`) VALUES ('1','{$row['Id']}','$rank')";
            $chartRes = mysqli_query($dbconn, $chartQuery);
        }
    }
?>