<?php 
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
    $username = stripcslashes($username);  
    $password = stripcslashes($password);  
    $username = mysqli_real_escape_string($con, $username);  
    $password = mysqli_real_escape_string($con, $password);  
      
    $sql = "SELECT * FROM login WHERE Roll_no = '$username' AND password = '$password'";  
    $result = mysqli_query($con, $sql);  
    $count = mysqli_num_rows($result);  

    if ($count == 1) {  
        header("Location: outpassform.php");
        exit(); 
    } else {  
        echo "<script>
            alert('Username or password is incorrect. Please try again.');
            window.location.href = 'student.php';
        </script>";
        exit(); 
    }   
?>
