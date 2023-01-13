<?php
require_once('dbconfig.php');
require_once('model.php');
$idSong = $_GET['idSong'];

$query1 = "DELETE FROM `SongArtist` WHERE `SongId` =$idSong";
$query2 = "DELETE FROM `SongGenre` WHERE `SongId` =$idSong";
$query3 = "DELETE FROM `SongAlbum` WHERE `SongId` =$idSong";
$query4 = "DELETE FROM `Song` WHERE `Id` =$idSong";
mysqli_query($dbconn, $query1);
mysqli_query($dbconn, $query2);
mysqli_query($dbconn, $query3);
mysqli_query($dbconn, $query4);
header("Location: xoabaihat.php");
?>