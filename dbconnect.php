<?php
// Make a MySQL Connection
@mysql_connect('localhost', 'root', '') or die(mysql_error());
mysql_select_db('bus_travel') or die(mysql_error());
?>
