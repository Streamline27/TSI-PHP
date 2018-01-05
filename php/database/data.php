<?php
require_once "../domain/fruit.php";
require_once "config.php";

function generateInsertDataQuery() {
  global $tableName;

  $fruits = array(
                  new Fruit("Apple", "Green"),
                  new Fruit("Grapes", "#4C00E6"),
                  new Fruit("Lemon", "Yellow"),
                  new Fruit("Orange", "Orange"),
                  new Fruit("Kiwi", "OliveDrab"),
                  new Fruit("Peach", "#FFDE8A"),
                  new Fruit("Pear", "#99EB00"),
                  new Fruit("Pineapple", "#B2F000"),
                  new Fruit("Tangerine", "DarkOrange"));

  $insertQuery = "INSERT INTO $tableName(item, colour) VALUES";

  foreach ($fruits as $fruit) {
    $insertQuery = $insertQuery . "('$fruit->name' , '$fruit->color'),";
  };
  $insertQuery[strlen($insertQuery)-1] = ';';

  // echo $insertQuery;

  return $insertQuery;
}


 ?>
