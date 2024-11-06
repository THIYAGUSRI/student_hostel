
<?php

include_once("database.php");


$rollno = $_GET['rollno'];


$result = mysqli_query($conn, "INSERT INTO security SELECT rollno FROM requestform WHERE rollno='$rollno'");
$resul = mysqli_query($conn, "UPDATE requestform SET status='accepted' WHERE rollno='$rollno'");
$res = mysqli_query($conn, "INSERT INTO backup SELECT * FROM requestform WHERE rollno='$rollno'");
$resu = mysqli_query($conn, "DELETE FROM requestform WHERE rollno=$rollno");


header("Location:retrive.php");
?>