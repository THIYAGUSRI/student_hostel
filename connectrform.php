<?php
 // connect the database to out pass request form connection
$servername='localhost';
$username='root';
$password='';
$dbname = "srec_hostel";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>