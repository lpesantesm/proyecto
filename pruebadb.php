<?php
echo "OJOOO";

$dbserver = 'us-cdbr-iron-east-03.cleardb.net';
$dbuser = 'b3d2925c74c520';
$dbpassword = '4932b4ac';
$dbname = 'heroku_5c1f36090b6e6ae';

   $connect=mysql_connect($dbserver,$dbuser,$dbpassword) or die("Unable to Connect");
   mysql_select_db($dbname) or die("Could not open the db");


   $showtablequery="SHOW TABLES FROM $dbname";
   echo "AQUI";
   $query_result=mysql_query($showtablequery);

   while($showtablerow = mysql_fetch_array($query_result))
   {
   echo $showtablerow[0]." ";
   }

?>
