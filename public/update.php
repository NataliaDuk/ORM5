<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm">
 
    </div>
    <div class="col-6">
    <h2>Форма для редактирования</h2>
    <?php

include "../vendor/autoload.php";

$config = [
    "servername" => "localhost",
    "username" => "root",
    "password" => "root",
    "dbname" => "guestbook"
];

$crud = new \W1020\CRUD($config);

$crud->setTableName('gb');
$sql = "SELECT * FROM `gb` WHERE `id` = $_GET[id]";

foreach ($crud->runSQL($sql) as $res) {
    $result = $res;
}
//print_r($result);
?>
<form action="edit.php" method="post">
    <input type="hidden" name="id" value="<?= $result['id'] ?>">
    <input type="text" class="form-control" name="message" value="<?= $result['message'] ?>"><br>
    <input type="text" class="form-control" name="name" value="<?= $result['name'] ?>"><br>
    <input type="submit" class="btn btn-primary mb-3" value="Редактировать">
</form>
</body>
</html>
    </div>
    <div class="col-sm">
     
    </div>
  </div>
</div>
