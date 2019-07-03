<?php
/* Database config */
$db_host		= 'localhost';
$db_user		= 'aggs';
$db_pass		= 'aggs123';
$db_database	= 'sales'; 

/* End config */

$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>