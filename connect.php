<?php
$link = mysql_connect('localhost','root','') or die('Error: '.mysql_error());
mysql_select_db('Comments') or die('Error: '.mysql_error());
mysql_set_charset($link, "utf8");
mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'", $conn);
session_start();
?>
