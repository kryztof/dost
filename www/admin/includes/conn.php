<?php 
   $host="localhost"; // Host name
   $username="beers"; // Mysql username
   $password="beers"; // Mysql password
   $db_name="raspberrypints"; // Database name
   $tbl_name="users";
   //Connect to server and select databse.
   mysql_connect("$host", "$username", "$password")or die("cannot connect to server");
   mysql_select_db("$db_name")or die("cannot select DB");
?>