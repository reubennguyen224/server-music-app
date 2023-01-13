<?php
    require_once('dbconfig.php');
    
class SongData{
    var $id,$artistID, $artistRank1, $artistRank2, $artistRank3,$artistRank4,$artistRank5,$artistRank6,$artistRank7,$artistRank8,$artistRank9,$artistRank10,$genreID, $numberOfStream;
    function __construct($id,$artistID, $artistRank1, $artistRank2, $artistRank3,$artistRank4,$artistRank5,$artistRank6,$artistRank7,$artistRank8,$artistRank9,$artistRank10,$genreID, $numberOfStream)
    {
        $this->id = $id;
        $this->genreID=$genreID;
        $this->numberOfStream = $numberOfStream;
        $this->artistRank1=$artistRank1;
        $this->artistID=$artistID;
        $this->artistRank2=$artistRank2;
        $this->artistRank3=$artistRank3;
        $this->artistRank4=$artistRank4;
        $this->artistRank5=$artistRank5;
        $this->artistRank6=$artistRank6;
        $this->artistRank7=$artistRank7;
        $this->artistRank8=$artistRank8;
        $this->artistRank9=$artistRank9;
        $this->artistRank10=$artistRank10;
    }
}


    $query = "SELECT * FROM `Album` ORDER BY `DateCreated` DESC LIMIT 10";
    $res = mysqli_query($dbconn, $query);
    
    $info = array();