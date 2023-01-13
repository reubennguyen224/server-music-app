<?php
require_once('dbconfig.php');
require_once('model.php');
$idSong = $_GET['idSong'];

$query2 = "DELETE FROM `SongAlbum` WHERE `AlbumId` =$idSong";
$query4 = "DELETE FROM `Album` WHERE `Id` =$idSong";
mysqli_query($dbconn, $query2);
mysqli_query($dbconn, $query4);
header("Location: xoaalbumphp");
?>