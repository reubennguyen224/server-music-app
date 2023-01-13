<?php
require_once('dbconfig.php');
require_once('model.php');
$idSong = $_GET['idSong'];

$query2 = "DELETE FROM `SongArtist` WHERE `ArtistId` =$idSong";
$query3 = "UPDATE `Album` SET`ArtistId`=16 WHERE `ArtistId`= $idSong";
$query4 = "DELETE FROM `Artist` WHERE `Id` =$idSong";
mysqli_query($dbconn, $query2);
mysqli_query($dbconn, $query3);
mysqli_query($dbconn, $query4);
header("Location: xoanghesiphp");
?>