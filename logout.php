<?php
session_start();
if(isset($_SESSION['user_id'])){
    include_once "./config/database.php";
   
    $logout_id = $_GET['logout_id'];
    if(isset($logout_id)){
        $status = "Offline now";
        $stmt = $db->prepare("update users set status = :s where user_id = :user_id");
        $stmt->bindParam(":s",$status);
        $stmt->bindParam(":user_id",$logout_id);
        $stmt->execute();
        session_unset();
        session_destroy();
        header("location: login.php");

    }
}else{
    header("location: login");
}