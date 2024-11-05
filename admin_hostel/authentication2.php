<?php      
include('connection.php');  

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $rollno = $_POST['rollno'];  

    $rollno = stripcslashes($rollno);  
    $rollno = mysqli_real_escape_string($con, $rollno);  

    $sql = "SELECT * FROM security WHERE rollno = '$rollno'";
    $result = mysqli_query($con, $sql);  

    $count = mysqli_num_rows($result);  

    if ($count == 1) {  
        $sql = "DELETE FROM security WHERE rollno = '$rollno'";  
        mysqli_query($con, $sql);  
        echo "<script type='text/javascript'>alert('Permitted. Record deleted successfully.'); window.location.href='security_page.php';</script>";  
    } else {  
        echo "<script type='text/javascript'>alert('Not permitted. Roll number not found.'); window.location.href='security.php';</script>";  
    }
}
?>