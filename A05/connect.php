<?php
  $dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "corememories";

	$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

	if(!$conn)
	{
		die("Connection Failed. ". mysqli_connect_error());
		echo "Cannot connect to the database.";
	}

function executeQuery($query){
  $conn = $GLOBALS['conn'];
  return mysqli_query($conn, $query);
}
?>