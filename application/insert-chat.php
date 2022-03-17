<?php
session_start();
if(isset($_SESSION['user_id'])){
    include_once "../config/database.php";
    $going = $_SESSION['user_id'];
    $coming = $_POST['incoming_id'];
    $message = $_POST['message'];
    if(!empty($message)){
        $stmt = $db->prepare("insert into messages (going,coming,msg) values(:going,:coming,:msg)");
        $stmt->bindParam(":msg",$message);
        $stmt->bindParam(":coming",$coming);
        $stmt->bindParam(":going",$going);
        $stmt->execute() or die();
    }
}else{
    header("../login");
}