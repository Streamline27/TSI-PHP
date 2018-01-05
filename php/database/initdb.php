<?php
require_once "config.php";
require_once "utilities.php";

global $tableName, $createTableQuery;

if (tableExists($tableName)) {
  echo "table $tableName exists...";
}
else {
  echo "table $tableName does not exist...";
  echo "creating table";

  executeQuery($createTableQuery);
  executeQuery(generateInsertDataQuery());
}

function tableExists($Table) {
  $rows=queryResultToArray(executeQuery("SHOW TABLES LIKE '".$Table."'"));
	if ($rows) {
	    $TableExists = strtolower($rows[0][0])==strtolower($Table);
	}
  return $rows && $TableExists;
}

?>
