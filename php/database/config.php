<?php

require_once "data.php";

$domain = "db";
$databaseName = "fruits";
$user = "admin";
$password = "root";
$tableName = "fruits";

$createTableQuery =
        "CREATE TABLE `".$tableName."` (
            id       INT AUTO_INCREMENT,
            item     VARCHAR(20) NOT NULL,
            colour   VARCHAR(15),
            PRIMARY KEY (id), FULLTEXT idx (item)
         );";

?>
