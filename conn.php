<?php
include "config/vars.php"
mysql_connect($host, $user, $pass)or
		die("Could not connect: " . mysql_error());
		mysql_select_db("db");
		
?>
