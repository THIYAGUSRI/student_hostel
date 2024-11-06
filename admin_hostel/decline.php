<?php

include_once("database.php");


$rollno = $_GET['rollno'];


$resul = mysqli_query($conn, "UPDATE requestform SET status='declined' WHERE rollno='$rollno'");
$res = mysqli_query($conn, "INSERT INTO backup SELECT * FROM requestform WHERE rollno='$rollno'");
$result = mysqli_query($conn, "DELETE FROM requestform WHERE rollno=$rollno");


header("Location:retrive.php");
?>