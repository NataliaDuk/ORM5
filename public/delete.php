<?php
include "../vendor/autoload.php";

$config = [
    "servername" => "localhost",
    "username" => "root",
    "password" => "root",
    "dbname" => "guestbook"
];
$crud = new W1020\CRUD($config);
$crud->setTableName("gb");
$crud->del($_GET['id']);
header("Location: index.php");