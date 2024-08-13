<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Security Check</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            color: white;
            text-align: center;
            width: 300px;
        }
        .container h1 {
            margin-bottom: 30px;
            font-size: 24px;
        }
        .container input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .container input[type="submit"] {
            background-color: #ff9800;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .container input[type="submit"]:hover {
            background-color: #e68900;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Security Check</h1>
        <form action="authentication2.php" method="POST">
            <input type="text" name="rollno" placeholder="Enter your Roll Number" required>
            <input type="submit" name="check" value="Check">
        </form>
    </div>
</body>
</html>
