<?php 
 // use for user login to fetch and check the correct the userid and password     
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
    // To prevent SQL injection  
    $username = stripcslashes($username);  
    $password = stripcslashes($password);  
    $username = mysqli_real_escape_string($con, $username);  
    $password = mysqli_real_escape_string($con, $password);  
      
    $sql = "SELECT * FROM login WHERE Roll_no = '$username' AND password = '$password'";  
    $result = mysqli_query($con, $sql);  
    $count = mysqli_num_rows($result);  

    if ($count == 1) {  
        header("Location: outpassform.php");
        exit(); // Make sure to exit after redirection
    } else {  
        // If username or password is incorrect
        echo "<script>
            alert('Username or password is incorrect. Please try again.');
            window.location.href = 'student.php';
        </script>";
        exit(); // Exit to prevent further execution
    }   
?>
