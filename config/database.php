<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=soufchat", "root", "");
    $db->exec("set names utf8");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $ex) {
    echo $ex->getMessage();
}
