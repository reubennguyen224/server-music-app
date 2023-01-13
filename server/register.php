<?php 
require_once('dbconfig.php');
require_once('model.php');

$username  = $_POST['username'];
$password  = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname  = $_POST['lastname'];
$address   = $_POST['address'];
$avatarURI = $_POST['avatarURI'];
$dob       = $_POST['dob'];
$response = array();

if (empty($username)) {
    $error = "please filling username";
} else if (empty($password)) {
    $error = "please filling password";
} else{
    
    $alreadyExistAcc = mysqli_query($dbconn, "SELECT * FROM `Account` WHERE `Username`= '$username'");
    if(mysqli_num_rows($alreadyExistAcc) == 0){
        
        $insertFavor = "INSERT INTO `Favourite` (`Id`) VALUES (NULL)";
        $queryFavor = mysqli_query($dbconn, $insertFavor) or die(json_encode(array("status"=>false, "message"=>mysqli_error($dbconn))));
    
        $insertAccount = "INSERT INTO `Account` (`Username`, `Password`, `Role`) VALUES ('$username','$password', 'listener')";
        $queryAccount = mysqli_query($dbconn, $insertAccount) or die(json_encode(array("status"=>false, "message"=>mysqli_error($dbconn))));
        
        $insertFullname = "INSERT INTO `FullName`(`FirstName`, `LastName`) VALUES ('$firstname','$lastname')";
        $queryFullname = mysqli_query($dbconn, $insertFullname) or die(json_encode(array("status"=>false, "message"=>mysqli_error($dbconn))));
        
        $getIDAcc = mysqli_query($dbconn, "SELECT * FROM `Account` ORDER BY `Id` DESC LIMIT 1");
        $resAcc= mysqli_fetch_assoc($getIDAcc);
        
        $getIDFavor = mysqli_query($dbconn, "SELECT * FROM `Favourite` ORDER BY `Id` DESC LIMIT 1");
        $resFavor = mysqli_fetch_assoc($getIDFavor);
        
        $getIDFull = mysqli_query($dbconn,"SELECT * FROM `FullName` ORDER BY `Id` DESC LIMIT 1" ) ;
        $resFull = mysqli_fetch_assoc($getIDFull);

        $insertUser="INSERT INTO `User`( `AccountId`, `Dob`, `Address`, `AvatarURI`, `FullNameId`, `FavouriteId`) 
                VALUES ('{$resAcc['Id']}','$dob','$address','$avatarURI','{$resFull['Id']}', '{$resFavor['Id']}')";

        $queryUser = mysqli_query($dbconn, $insertUser)or die(json_encode(array("status"=>false, "message"=>mysqli_error($dbconn))));
        if ($queryUser) {
            array_push($response, new Fail(200, "register successfull"));
           # $response['status'] = 200;
            #$response['message'] = "register successfull";
        } else{
            array_push($response, new Fail(404, "register failed!"));
          
            #$response['status'] = 404;
            #$response['message'] = "register failed!";
        }
        
    } else{
        array_push($response, new Fail(404, "username existed!"));
          
        #$response['status'] = 404;
        #$response['message'] = "username existed!";
    }

    
}
echo json_encode($response);

?>