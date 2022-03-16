<?php
session_start();
include_once "../config/database.php";
$going = $_SESSION["user_id"];
$searchTerm = $_POST['searchTerm'];
$list = $db->prepare("select * from users where not user_id = :user_id and (username like :searchTerm or firstname like :searchTerm or lastname like :searchTerm)");
$finValue = "%".$searchTerm."%";
$list->bindParam(":searchTerm",$finValue);
$list->bindParam(":user_id",$going);
$list->execute();
$output = "";
if($list->rowCount() > 0){
    include_once "./dataHtml.php";
}
echo $output;