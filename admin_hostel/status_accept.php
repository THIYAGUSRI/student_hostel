
<?php
include_once("database.php");

$rollno = $_GET['rollno'];

$result = mysqli_query($conn, "UPDATE requestform SET status='accepted' WHERE rollno='$rollno'");

?>

