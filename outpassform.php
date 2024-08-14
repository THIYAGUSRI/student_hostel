

<!DOCTYPE html>
<!-- conect with insert2 -->
<html>
<head>
	<title>Gatepass form</title>
    <link rel = "stylesheet" type = "text/css" href = "out.css">  
</head>
<?php include('history_header.php')  ?>
<body>
	<div id = "frm" style="width:70%;">
	<form action="insert2.php" method="post">
		<center><h2><B>OUT PASS FORM</B><h2></center>
		<hr>
		<hr>
		<table style="border-spacing:20px">
		<tr>
			<td>
				Name:
			</td>
			<td >
				<input type="text" name="name" required style="height: 25px; font-size: 25px; padding:5px" placeholder="Username"  required>
			</td>
		</tr>
		<tr>
			<td>
				Roll No:
			</td>
			<td>
				<input type="integer" name="rollno" style="height: 25px; font-size: 25px; padding:5px" placeholder="Roll no" required>
			</td>
		</tr>
		<tr>
			<td>
				Room no:
			</td>
			<td>
				<input type="integer" name="roomno" style="height: 25px; font-size: 25px; padding:5px" placeholder="Room no" required>
			</td>
		</tr>
		<tr>
			<td>
				Outpass type :
			</td>
			<td>
				<input type="radio" name="outpasstype" value="hometown" style="height: 15px; " required>Home town
				<input type="radio" name="outpasstype" value="od" style="height: 15px;" required>ON Duty
				<input type="radio" name="outpasstype" valeu="localouting" style="height: 15px;" required>Local Outing
			</td>
		</tr>
		<tr>
		<td>Out date:</td>
			<td><input type="date" name="odate" style="height: 25px; font-size: 25px; padding:5px"required></td>
		<td>In date:</td>
			<td><input type="date" name="idate" style="height: 25px; font-size: 25px; padding:5px"required></td>		
		</tr>
		<tr>
			<td>Out time:</td>
			<td><input type="time" name="otime" style="height: 25px;font-size: 25px; padding:5px" required></td>
			<td>In time:</td>
			<td><input type="time" name="itime" style="height: 25px;font-size: 25px; padding:5px" required></td>
		</tr>
		<tr>
			<td>place:</td>
			<td><input type="text" name="place" style="height: 25px;font-size: 25px; padding:5px" required>
		</tr>
		</table>
		<br> 
		<div id="but">
			<center>
			<input type="submit" name="Request" value="Request" style="text-align:center; padding: 10px;  margin: 0; height: 50px;font-size: 25px; width: 150px;" >
           </center>
		</div>
		<br>
		<hr>
		<hr>
	</form>
</div>
</body>
</html>
