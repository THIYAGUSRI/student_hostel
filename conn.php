<?php 
// Connect to the database for new user form     
include_once 'connectrform.php';

if(isset($_POST['submit']))
{ 
    $Roll_no = $_POST['Roll_no'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $roomno = $_POST['roomno'];
    $class_coordinator = $_POST['class_coordinator'];
    $warden = $_POST['warden'];
    $Phone_No = $_POST['Phone_No'];
    $HOD = $_POST['HOD'];

    // Insert data into the database
    $sql = "INSERT INTO login (Roll_no, password, name, roomno, class_coordinator, warden, Phone_No, HOD) 
            VALUES ('$Roll_no', '$password', '$name', '$roomno', '$class_coordinator', '$warden', '$Phone_No', '$HOD')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Registration Successful!'); window.location.href = 'main.php';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
    mysqli_close($conn);
}
?>