<?php 
include "dbconnect.php"; /** calling of dbconnect.php that has the connection code **/ 

$a_id = $_GET['a_id']; /** get the agency ID ***/

mysql_query("DELETE FROM agjensionet where a_id = '$a_id'"); /** execute the sql delete code **/

header("Location: readagjensionet.php"); /** redirect to readagjensionet.php **/

?>
