<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            outline: none;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-image: url('adm.jpg');
            background-size: cover;
            background-position: center;
            padding: 20px;
            flex-direction: column;
        }

        .container {
            max-width: 800px;
            width: 100%;
            background-color: #fff;
            padding: 40px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .container .text {
            font-size: 32px;
            font-weight: 600;
            text-align: center;
            color: #333;
            background: -webkit-linear-gradient(right, #56d8e4, #9f01ea);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 30px;
        }

        form {
            width: 100%;
        }

        .form-row {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }

        .input-data {
            width: 48%;
            position: relative;
            margin: 10px 0;
        }

        .input-data input {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border: 2px solid #ddd;
            border-radius: 4px;
            background-color: #fafafa;
            outline: none;
            transition: border-color 0.3s;
        }

        .input-data input:focus {
            border-color: #56d8e4;
        }

        .input-data label {
            position: absolute;
            left: 12px;
            top: 12px;
            font-size: 16px;
            color: #666;
            transition: all 0.3s ease;
            pointer-events: none;
        }

        .input-data input:focus + label,
        .input-data input:not(:placeholder-shown) + label {
            top: -12px;
            left: 8px;
            font-size: 12px;
            color: #56d8e4;
        }

        .form-submit {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .form-submit input {
            width: 50%;
            padding: 12px 0;
            background: linear-gradient(to right, #56d8e4, #9f01ea);
            border: none;
            border-radius: 30px;
            color: white;
            font-size: 18px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .form-submit input:hover {
            background: linear-gradient(to right, #9f01ea, #56d8e4);
        }

        .go-back-btn {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #56d8e4;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .go-back-btn:hover {
            background-color: #9f01ea;
        }

        @media (max-width: 700px) {
            .container {
                padding: 20px;
            }

            .container .text {
                font-size: 24px;
            }

            .input-data {
                width: 100%;
            }

            .form-submit input {
                width: 80%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="text">
            New Register Form
        </div>
        <form method="POST" action="conn.php">
            <div class="form-row">
                <div class="input-data">
                    <input type="text" id="Roll_no" name="Roll_no" required placeholder=" ">
                    <label for="Roll_no">Roll NO</label>
                </div>
                <div class="input-data">
                    <input type="text" id="name" name="name" required placeholder=" ">
                    <label for="name">Name</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="password" id="password" name="password" required placeholder=" ">
                    <label for="password">Password</label>
                </div>
                <div class="input-data">
                    <input type="text" id="roomno" name="roomno" required placeholder=" ">
                    <label for="roomno">Room No</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="text" id="class_coordinator" name="class_coordinator" required placeholder=" ">
                    <label for="class_coordinator">Class Coordinator Name</label>
                </div>
                <div class="input-data">
                    <input type="text" id="HOD" name="HOD" required placeholder=" ">
                    <label for="HOD">HOD Name</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="text" id="warden" name="warden" required placeholder=" ">
                    <label for="warden">Warden Name</label>
                </div>
                <div class="input-data">
                    <input type="text" id="Phone_No" name="Phone_No" required placeholder=" ">
                    <label for="Phone_No">Phone No</label>
                </div>
            </div>
            <div class="form-submit">
                <input type="submit" name="submit" value="Submit">
            </div>
        </form>
        <div class="go-back-btn">
            <a href="main.php" style="text-decoration: none; color: white;">Go Back</a>
        </div>
    </div>
</body>
</html>
