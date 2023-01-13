<?php

class Chart{
    var $rank, $nameSong, $nameArtist, $songCover;
    function __construct( $rank, $nameSong, $nameArtist, $songCover){
        $this->rank = $rank;
        $this->nameSong = $nameSong;
        $this->nameArtist=$nameArtist;
        $this->songCover = $songCover;
    }
}

class Success{
    var $status, $message, $data;
    function __construct($status, $message, $data)
    {
        $this->status = $status;
        $this->message = $message;
        $this->data = $data;
    }
}

class Users{
        var $Id, $username, $password, $dob, $address, $firstname, $lastname, $avataruri, $favouriteID;
    
        function __construct($Id, $usernames, $passwords, $dob, $address, $avataruri, $firstname, $lastname, $favouriteID){
            $this->Id        = $Id;
            $this->username  = $usernames;
            $this->password  = $passwords;
            $this->dob       = $dob;
            $this->address   = $address;
            $this->firstname = $firstname;
            $this->lastname  = $lastname;
            $this->avataruri = $avataruri;
            $this->favouriteID = $favouriteID;
        }
    }

class Fail{
    var $status, $message;
    function __construct($status, $message)
    {
        $this->status = $status;
        $this->message = $message;
    }
}
class Album{
    var $id, $name, $cover, $type, $artist;
    function __construct($id, $name, $cover, $type, $artist)
    {
        $this->id = $id;
        $this->cover = $cover;
        $this->name = $name;
        $this->type = $type;
        $this->artist = $artist;
    }
}
class Artist{
    var $Id, $name, $avatarURI;
    function __construct($Id, $name, $avatarURI)
    {
        $this->name = $name;
        $this->avatarURI = $avatarURI;
        $this->Id = $Id;
    }
}
class Song{
    var $id, $title, $songURI, $coverURI, $artist, $genre, $numberOfStream;
    function __construct($id, $title, $songURI, $coverURI, $Artist, $Genre, $numberOfStream)
    {
        $this->id = $id;
        $this->title = $title;
        $this->songURI=$songURI;   
        $this->coverURI=$coverURI;
        $this->artist=$Artist;
        $this->genre=$Genre;
        $this->numberOfStream = $numberOfStream;
    }
}
?>