<?php

require_once "config.php";

/**
* Consider possibility of not recreating connection every time
*/
function executeQuery($Query) {
  global $domain, $user, $password, $databaseName;
  $result = "";

	$mysqli = new mysqli($domain, $user, $password, $databaseName);

	if ($mysqli->connect_error)
          die("Connection to DB failed: ".$mysqli->connect_error);

  $result = $mysqli->query($Query);
	if (!$result) die('Error in query: '.$mysqli->error);

  $mysqli->close();

  unset($domain, $user, $password, $databaseName);
  return $result;
}

function queryResultToArray($query_result) {
   global $oldway;
   $fetch=[];
   if ($query_result) while($row=$query_result->fetch_array()) $fetch[] = $row;
   else die("FATAL ERROR: reading data from DB is not possible");

   unset($oldway);
   return $fetch;
}

?>
