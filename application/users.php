<?php
session_start();
include_once "../config/database.php";
$going = $_SESSION['user_id'];
$list = $db->prepare("select * from users where not user_id = :user_id");
$list->bindParam(":user_id",$going);
$list->execute();
$output = "";
if($list->rowCount() > 0){
    include_once "./dataHtml.php";
}
echo $output;