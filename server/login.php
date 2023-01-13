<?php 
    require_once('dbconfig.php');
    require_once('model.php');
    
    $username  = $_POST['username'];
    $password  = $_POST['password'];
    $password  = addslashes($password);
    $response = array();

    if(strlen($username) > 0 && strlen($password)){
        $loginQuery = "SELECT * FROM `Account` WHERE FIND_IN_SET('$username',`Username`) AND FIND_IN_SET('$password',`Password`)";
        $query = mysqli_query($dbconn, $loginQuery);
        
        if ($query) {
        
            $userObj = mysqli_fetch_assoc($query);
            $userQuerry = "SELECT * FROM `User` WHERE `AccountId` = '{$userObj['Id']}'";
            $que = mysqli_query($dbconn,$userQuerry);
            $userInfo = mysqli_fetch_assoc($que);
            $nameQuerry = "SELECT * FROM `FullName` WHERE `Id` = '{$userInfo['FullNameId']}'";
            $fullnameQuery = mysqli_query($dbconn,$nameQuerry);
            $fullnameInfo = mysqli_fetch_assoc($fullnameQuery);
            $info = array();
            array_push($info, new Users($userInfo['Id'], $userObj['Username']
                                            ,$userObj['Password']
                                            ,$userInfo['Dob']
                                            ,$userInfo['Address']
                                            ,$userInfo['AvatarURI']
                                            ,$fullnameInfo['FirstName']
                                            ,$fullnameInfo['LastName']
                                            ,$userInfo['FavouriteId']));
            array_push($response, new Success(200, "login success", $info) );
        } else{
            array_push($response, new Fail(404, "user not found"));
        }
    }
    header('Content-Type: application/json; charset=UTF-8');
    echo json_encode($info);
?>