<?php
require_once "../domain/fruit.php";
require_once "../database/config.php";
require_once "../database/utilities.php";

$searchString=$_GET['search'];

echo json_encode(fetchFruits($searchString));


function fetchFruits($pattern) {
  global $tableName;

  if ($pattern == "") return $fruits = [];

  $selectQuery = "SELECT *
                  FROM $tableName
                  WHERE MATCH(item) AGAINST('$pattern*' IN BOOLEAN MODE);";

	$queryResult=queryResultToArray(executeQuery($selectQuery));

  $fruits = [];
  if ($queryResult)
      foreach ($queryResult as $row) {
	    @$fruits[] = new Fruit($row["item"],$row["colour"]);
	}

  return $fruits;
}


?>
