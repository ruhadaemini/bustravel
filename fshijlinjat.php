<?php 
include "dbconnect.php"; /** calling of dbconnect.php that has the connection code **/ 

$l_id = $_GET['l_id']; /** get the line ID ***/

mysql_query("DELETE FROM linjat where l_id = '$l_id'"); /** execute the sql delete code **/

header("Location: readlinja.php"); /** redirect to readlinja.php **/

?>
