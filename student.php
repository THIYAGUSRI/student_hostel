<!DOCTYPE html>
<html>  
<head>  
    <title> login</title>  
    
    <link rel = "stylesheet" type = "text/css" href = "style.css">   
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head> 
<?php include('login_head.php')  ?> 
<body> 
  
    
    <div id = "frm"> 
        <center>
        <h1 style="align-items: center; font-weight: bold;">User Login</h1>  
        <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
            <div class="icons">  
                <input type = "text" id ="user" name  = "user" placeholder="User-ID" style="font-size: 17px; height: 25px; padding: 5px; font-weight: bold;" />  
                <i class='bx bxs-user'></i>
                <br>
             <br> 
                <input type = "password" id ="pass" name  = "pass" placeholder="Password" style="font-size: 17px; height: 25px; padding: 5px; font-weight: bold;"/>  
                <i class='bx bx-lock-alt bx-flashing' ></i> 
                <br> 
             <br>
                <button type =  "submit" id = "btn" value = "Login" style="margin: 0; width: 25%; font-size: 15px;">Login</button> 
            </div> 
        </form>  
    </center>
    </div>
      
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
        
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html