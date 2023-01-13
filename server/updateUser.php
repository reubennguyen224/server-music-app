<?php 
require_once('dbconfig.php');

require_once('model.php');
$password  = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname  = $_POST['lastname'];
$address   = $_POST['address'];
$avatarURI = $_POST['avatarURI'];
$dob       = $_POST['dob'];
$userID    = $_POST['userID'];

$response = array();
class User{
    var  $password, $dob, $address, $firstname, $lastname, $avataruri;

    function __construct( $passwords, $dob, $address, $avataruri, $firstname, $lastname){
        $this->password  = $passwords;
        $this->dob       = $dob;
        $this->address   = $address;
        $this->firstname = $firstname;
        $this->lastname  = $lastname;
        $this->avataruri = $avataruri;
    }
}

$userQuery = "SELECT * FROM `User` WHERE `Id` = '$userID'";
$user = mysqli_query($dbconn, $userQuery);
$userReq = mysqli_fetch_assoc($user);
if (mysqli_num_rows($user) == 1) {
    $updateNameQuery = "UPDATE `FullName` SET `FirstName`='$firstname',`LastName`='$lastname' 
    WHERE `Id` = '{$userReq['FullNameId']}'";
    $updateName = mysqli_query($dbconn, $updateNameQuery);

    $updatePasswordQuerry="UPDATE `Account` SET `Password`='$password' 
    WHERE `Id` ='{$userReq['AccountId']}'";
    $updatePassword=mysqli_query($dbconn, $updatePasswordQuerry);

    $updateQuery = "UPDATE `User` SET 
    `Dob`='$dob',`Address`='$address',`AvatarURI`='$avatarURI' WHERE `Id` = '$userID'";
    $update = mysqli_query($dbconn, $updateQuery);
    $info = array();
    if ($update && $updatePassword && $updateName) {
        
        $user1 = mysqli_query($dbconn, $userQuery);
        $userRes = mysqli_fetch_assoc($user1);

        $userQuery2 = "SELECT * FROM `FullName` WHERE `Id` = '{$userRes['FullNameId']}'";
        $user2 = mysqli_query($dbconn, $userQuery2);
        $userRes2 = mysqli_fetch_assoc($user2);

        $userQuery3 = "SELECT * FROM `Account` WHERE `Id` = '{$userRes['AccountId']}'";
        $user3 = mysqli_query($dbconn, $userQuery3);
        $userRes3 = mysqli_fetch_assoc($user3);
        
        array_push($info, new User($userRes3['Password'], $userRes['Dob'], $userRes['Address'], $userRes['AvatarURI'], $userRes2['FirstName'],$userRes2['LastName']));

        array_push($response, new Success(200, "update success", $info));
        #$response['status'] = 200;
        #$response['message'] = "update success";
        #$response['data'] = $info;
    } else {
        array_push($response, new Fail(404, "user not found"));
    }
    
} else{
    array_push($response, new Fail(404, "update failed!"));
}

header('Content-Type: application/json; charset=UTF-8');
echo json_encode($response);

?>