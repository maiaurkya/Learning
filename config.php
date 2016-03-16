<?php
$database = "myDB";
$server = "localhost";
$username = "root";
$password = "";

$conn = mysql_connect($server, $username, $password);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
//echo 'Connected successfully';
mysql_select_db( $database);


?>
