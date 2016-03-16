#!/usr/bin/php5
<?php 
//Include Config.php
include('config.php');

$sql = 'SELECT* FROM user';
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "\n *ID :{$row['id']}".
         "  *Name: {$row['name']}".
         "  *Roll: {$row['roll']} ".
         "\n\n";
} 

//Close Connection
mysql_close($conn);

?>
