<?php
require __DIR__.'/db_connect.php';


if(isset($_GET['sid'])){
    $sid = intval($_GET['sid']);
    $pdo -> query("DELETE FROM `address_book` WHERE sid=$sid");
}

$backTo = "ad_connect.php";
if(isset($_SERVER["HTTP_REFERER"])){
    $backTo = $_SERVER["HTTP_REFERER"];
}

header('Location: '. $backTo);

