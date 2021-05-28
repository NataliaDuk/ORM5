<?php
include 'vendor/autoload.php';

use W1020\Db;
use W1020\CRUD;


$config = [
    "servername" => "localhost",
    "username" => "root",
    "password" => "root",
    "dbname" => "guestbook"
];
$db = new Db($config);
$crud = new CRUD($config);
$crud->setTableName("gb");
$crud->setIdName("id");
$table = $crud->get();
print_r($table);

$crud->del(4);
$crud->ins(["message" => "Vova", "name" => "600"]);
$crud->ins(["message" => "Ania", "name" => "350"]);

$crud->upd(3, ["message" => "Olia", "name" => "150"]);



