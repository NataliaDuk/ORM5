<?php
include "../vendor/autoload.php";
$config = [
    "servername" => "localhost",
    "username" => "root",
    "password" => "root",
    "dbname" => "guestbook"
];

use W1020\CRUD;

$crud = new CRUD($config);

$crud->setTableName('gb');
if (!empty($_POST)) {
    $crud->ins($_POST);
    header("Location: ?");
}
$table = $crud->get();
//print_r($table);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container">
  <div class="row gy-5">
    <div class="col-sm">
     
    </div>
    <div class="col-6">
 
    <div class="p-3 border bg-light">
    <h1 class="text-center text-primary fw-bold">ГОСТЕВАЯ КНИГА</h1>
    <table class="table table-striped table-bordered border-primary">

<?php

    echo "<th style=text-align:center>message</th><th style=text-align:center>name</th><th style=text-align:center>delete</th><th style=text-align:center>edit</th>";
foreach ($table as $value) {
    echo "<tr><td>$value[message]</td><td>$value[name]</td><td style=text-align:center><a href='delete.php?id=$value[id]'>❌</a></td><td><a href='update.php?id=$value[id]'>✏️</a></td></tr>";
}
?>
</table>

<form action="?" method="post">
<textarea class="form-control" placeholder="message" name="message">
</textarea><br>
<input class="form-control" type="text" placeholder="name"  name="name"><br>
<input class="btn btn-primary mb-3" type="submit" value="Ввести сообщение">
</form>
</div>
    </div>
    <div class="col-sm">
     
    </div>
  </div>
</div>

</body>
</html>