<?php 
include "dbconnect.php"; /** calling of dbconnect.php that has the connection code **/ 

$q_id = $_GET['q_id']; /** get the city ID ***/

mysql_query("DELETE FROM qytetet where q_id = '$q_id'"); /** execute the sql delete code **/

header("Location: readqytetet.php"); /** redirect to readqytetet.php **/

?>
