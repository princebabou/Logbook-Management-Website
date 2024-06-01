<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .box {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

        .field {
            margin-bottom: 20px;
        }

        .field a{
            text-decoration:none;
        }

        .field label {
            display: block;
            font-size: 16px;
            margin-bottom: 5px;
            color: #333;
        }

        .field input,
        .field textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 14px;
        }

        .field textarea {
            resize: vertical;
        }

        .field input:focus,
        .field textarea:focus {
            border-color: #4CAF50;
            outline: none;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background: #4CAF50;
            border: none;
            border-radius: 3px;
            font-size: 16px;
            color: #fff;
            cursor: pointer;
        }

        .btn:hover {
            background: #45a049;
        }

    </style>
    <title>Entry Form</title>
</head>
<body>
<?php
require '../conn.php';

$entry_date = $entry_time = $days = $week = $activity_description = $working_hour = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $entry_date = $_POST['entry_date'];
    $entry_time = $_POST['entry_time'];
    $days = $_POST['days'];
    $week = $_POST['week'];
    $activity_description = $_POST['activity_description'];
    $working_hour = $_POST['working_hour'];

    $sql = "INSERT INTO logbook_entries (entry_date, entry_time, days, week, activity_description, working_hour) VALUES (?, ?, ?, ?, ?, ?)";

    if ($stmt = $con->prepare($sql)) {

        $stmt->bind_param("ssssss", $entry_date, $entry_time, $days, $week, $activity_description, $working_hour);

        if ($stmt->execute()) {
            echo "Records inserted successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $stmt->close();
    }
}


?>

    <div class="container">
        <div class="box">
            <h2>Entry Form</h2>
            <form action="" method="POST">
                <div class="field">
                    <label for="entry_date">Entry Date:</label>
                    <input type="date" id="entry_date" name="entry_date" required>
                </div>

                <div class="field">
                    <label for="entry_time">Entry Time:</label>
                    <input type="text" id="entry_time" name="entry_time" required>
                </div>

                <div class="field">
                    <label for="days">Days:</label>
                    <input type="text" id="days" name="days" required>
                </div>

                <div class="field">
                    <label for="week">Week:</label>
                    <input type="text" id="week" name="week" required>
                </div>

                <div class="field">
                    <label for="activity_description">Activity Description:</label>
                    <textarea id="activity_description" name="activity_description" rows="4" cols="50" required></textarea>
                </div>

                <div class="field">
                    <label for="working_hour">Working Hour:</label>
                    <input type="date" id="working_hour" name="working_hour" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" value="Submit">
                </div>
                <div class="field">
                    <p><a href="./index.php">View </a>all logs</p>
                    <p><a href="../home.php">Back to home</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
