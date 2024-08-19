<!DOCTYPE html>
<!-- conecct with conn.php -->
<html>
    <head>
       <title>
        Regiter form
       </title>
       <link rel = "stylesheet" type = "text/css" href = "register.css">
    </head>
    
<body>
   
    <div class="container" style="height: 1000px;">
        <div class="text">
           New Register Form
        </div>
        <form method="POST" action="conn.php" >
         <!-- <div style="display:flex; flex-direction:column"> -->
           <div class="form-row" style="display:flex; flex-direction:column;">
              <div class="input-data">
                 <input type="text" id="Roll_no" name="Roll_no"required>
                 <div class="underline"></div>
                 <label for="Roll_no">Roll NO</label>
              </div>
              <br/>
              <div class="input-data">
                 <input type="text" id="name"name="name"required>
                 <div class="underline"></div>
                 <label for="name">Name</label>
              </div>
           </div>
           <div class="form-row" style="display:flex; flex-direction:column;">
              <div class="input-data">
                 <input type="password" id="password" name="password" required>
                 <div class="underline"></div>
                 <label for="password">Password</label>
              </div>
              <br/>
              <div class="input-data">
                 <input type="text" id="roomno" name="roomno" required>
                 <div class="underline"></div>
                 <label for="roomno">Room No</label>
              </div>
           </div>
           <div class="form-row" style="display:flex; flex-direction:column;">
            <div class="input-data">
               <input type="text" id="class_coordinator" name="class_coordinator" required>
               <div class="underline"></div>
               <label for="class_coordinator">Class Coordinator Name</label>
            </div>
            <br/>
            <div class="input-data">
               <input type="text" id="HOD" name="HOD" required>
               <div class="underline"></div>
               <label for="HOD">HOD Name</label>
            </div>
         </div> 
         <div class="form-row" style="display:flex; flex-direction:column;">
            <div class="input-data">
               <input type="text" id="warden" name="warden" required>
               <div class="underline"></div>
               <label for="warden">Warden Name</label>
            </div>
            <br/>
            <div class="input-data">
               <input type="text" id="Phone_No" name="Phone_No" required>
               <div class="underline"></div>
               <label for="Phone_No">Phone No</label>
            </div>
         </div> 
         <div class="input-data">
               <div class="inner"></div>
               <input type="submit" id="submit" name="submit" value="submit" style="align-items: center; width: 20%; margin-left: 35%;height: 40px; background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea); border-radius: 15px; font-size: 25px;">
            </div>
        </div>
        <!-- </div> -->
        </form>     
</body>
</html>