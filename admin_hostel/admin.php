<!DOCTYPE html>
<html>  
<head>  
    <title>login page</title>  
    
    <link rel = "stylesheet" type = "text/css" href = "style.css"> 
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> 
</head> 

<body>  
    <div id = "frm">  
        <center>
        <h1 style="align-items: center;">Admin login</h1>  
        </center>
        <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
             <div class="icons"><center>
                <input type = "text" id ="user" name  = "user" placeholder="UserName" class="inputbox" style="font-size: 17px; padding: 5px;"/>  
                <i class='bx bxs-user'></i>
        
            <br>
            <br>
              
                <input type = "password" id ="pass" name  = "pass" placeholder="Password" class="inputbox" style="font-size: 17px; padding: 5px;"/> 
                <i class='bx bx-lock-alt bx-flashing' ></i> 
            <br>
            <br>
           
                <button type =  "submit" id = "btn" value = "Login" style="width: 25%;">Login</button>
            
            </center>
         </div>
        </form>  
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