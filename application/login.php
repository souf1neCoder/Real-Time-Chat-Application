<?php
session_start();
include_once "../config/database.php";

$email = $_POST['email'];
$password = $_POST['password'];
if (!empty($email) && !empty($password)) {
    $login = $db->prepare("select * from users where email = :email and password = :password");
    $login->bindParam(":email",$email);
    $login->bindParam(":password",$password);
    $login->execute();
    if($login->rowCount() > 0){
        $user = $login->fetch();
        $status = "Active now";
        $setStatus= $db->prepare("update users set status = :status where user_id = :id");
        $setStatus->bindParam(":status",$status);
        $setStatus->bindParam(":id",$user['user_id']);
        if($setStatus->execute()){
            $_SESSION['user_id'] = $user['user_id'];
            echo "success";
        }
    }else {
        echo "Email or Password is incorrect";
    }
    
} else {
    echo "Please Fill all Fields";
}
