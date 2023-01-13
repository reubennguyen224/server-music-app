<?php 
    require_once('dbconfig.php');
    require_once('model.php');

    $info = array();
    $response = array();

    $query = "SELECT * FROM `Artist` ORDER BY `DateCreated` DESC LIMIT 10";
    $res = mysqli_query($dbconn, $query);

    if($res){
        while($row = mysqli_fetch_assoc($res)){
            array_push($info, new Artist($row['Id'], $row['Name'], $row['AvatarURI']));
        }
        array_push($response, new Success(200, "Success", $info));
    } else{
        array_push($response, new Fail(404, "Lỗi Hệ thống!"));
    }

    echo json_encode($info);
?>