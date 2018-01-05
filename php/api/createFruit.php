<?php

require_once '../database/config.php';
require_once '../database/utilities.php';

global $tableName;

$fruit = json_decode(file_get_contents('php://input'));

$name = $fruit->name;
$color = $fruit->color;

$insertQuery = "INSERT INTO $tableName (item, colour) VALUES ('$name', '$color');";

executeQuery($insertQuery);
 ?>
