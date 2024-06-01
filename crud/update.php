<?php
require '../conn.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    die('Error: Logbook Entry ID not specified.');
}

$id = intval($_GET['id']); 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $entry_date = $_POST['entry_date'];
    $entry_time = $_POST['entry_time'];
    $days = $_POST['days'];
    $week = $_POST['week'];
    $activity_description = $_POST['activity_description'];
    $working_hour = $_POST['working_hour'];


    $sql = "UPDATE logbook_entries SET entry_date=?, entry_time=?, days=?, week=?, activity_description=?, working_hour=? WHERE id=?";
    if ($stmt = $con->prepare($sql)) {
 
        $stmt->bind_param("ssssssi", $entry_date, $entry_time, $days, $week, $activity_description, $working_hour, $id);


        if ($stmt->execute()) {

            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }

        $stmt->close();
    }
}

$sql = "SELECT * FROM logbook_entries WHERE id=$id";
$result = $con->query($sql);


if ($result && $result->num_rows > 0) {
    $logbook_entry = $result->fetch_assoc();
} else {
    die('Error: Logbook Entry not found.');
}

$con->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Logbook Entry</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        form {
            background-color: #e0f2f1; 
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }

        input[type="date"],
        input[type="text"],
        textarea {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        textarea {
            height: 100px;
        }

        input[type="submit"] {
            background-color: #4CAF50; 
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        a {
            display: block;
            margin-top: 20px;
            color: #3498db;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <form method="POST" action="">
    <h2>Update Logbook Entry</h2>
    <label for="entry_date">Entry Date:</label>
    <input type="date" name="entry_date" id="entry_date" value="<?php echo htmlspecialchars($logbook_entry['entry_date']); ?>" required><br>

    <label for="entry_time">Entry Time:</label>
    <input type="text" name="entry_time" id="entry_time" value="<?php echo htmlspecialchars($logbook_entry['entry_time']); ?>" required><br>

    <label for="days">Days:</label>
    <input type="text" name="days" id="days" value="<?php echo htmlspecialchars($logbook_entry['days']); ?>" required><br>

    <label for="week">Week:</label>
    <input type="text" name="week" id="week" value="<?php echo htmlspecialchars($logbook_entry['week']); ?>" required><br>

    <label for="activity_description">Activity Description:</label>
    <textarea name="activity_description" id="activity_description" required><?php echo htmlspecialchars($logbook_entry['activity_description']); ?></textarea><br>

    <label for="working_hour">Working Hour:</label>
    <input type="date" name="working_hour" id="working_hour" value="<?php echo htmlspecialchars($logbook_entry['working_hour']); ?>" required><br>

    <input type="submit" value="Update">
</form>

    <a href="index.php">Back to Home</a>
</body>
</html>
