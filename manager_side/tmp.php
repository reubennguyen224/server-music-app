<?php
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

$artistRank1 = 0;
$artistRank2 = 0;
$artistRank3 = 0;
$artistRank4 = 0;
$artistRank5 = 0;
$artistRank6 = 0;
$artistRank7 = 0;
$artistRank8 = 0;
$artistRank9 = 0;
$artistRank10 = 0;

public function artistRank($rank, $artistId)
{
    $query = "SELECT COUNT(B.Id) FROM (SELECT * FROM (SELECT Song.Id, `NumberOfStream`, SongArtist.ArtistId, `DateCreated`, SongChart.Rank FROM Song JOIN SongArtist JOIN SongChart ON Song.Id = SongArtist.SongId AND Song.Id = SongChart.SongId ORDER BY Song.Id) AS `D` WHERE D.ArtistId = 1) AS `B` WHERE B.Rank = 1";
}