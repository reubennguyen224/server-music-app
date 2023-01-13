<?php
require_once('dbconfig.php');
require_once('model.php');
$idSong = $_GET['idSong'];

$query2 = "DELETE FROM `SongGenre` WHERE `GenreId` =$idSong";
$query4 = "DELETE FROM `Genre` WHERE `Id` =$idSong";
mysqli_query($dbconn, $query2);
mysqli_query($dbconn, $query4);
header("Location: xoatheloai.php");
?>