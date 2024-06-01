<?php
require '../conn.php';

$sql = "SELECT * FROM logbook_entries";
$result = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Logbook Entries</title>
        <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        a {
            text-decoration: none;
            color: #3498db;
        }

        a:hover {
            text-decoration: underline;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50; 
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .actions a {
            margin-right: 10px;
            padding: 5px 10px;
            border: 1px solid #ddd;
            border-radius: 3px;
            color: #fff;
        }

        .actions a.edit {
            background-color: #3498db;
            border-color: #3498db;
        }

        .actions a.delete {
            background-color: #e74c3c;
            border-color: #e74c3c;
        }

        .actions a.edit:hover {
            background-color: #2980b9;
        }

        .actions a.delete:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>
    <h2>All Logbook Entries</h2>
    <div style="display:block;">
    <p><a href="create.php">Create a new Logbook Entry</a></p>
    <p><a href="../home.php/"> Back to Home</a></p>
    </div>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Entry Date</th>
            <th>Entry Time</th>
            <th>Days</th>
            <th>Week</th>
            <th>Activity Description</th>
            <th>Working Hour</th>
            <th>Action</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['entry_date'] . "</td>";
                echo "<td>" . $row['entry_time'] . "</td>";
                echo "<td>" . $row['days'] . "</td>";
                echo "<td>" . $row['week'] . "</td>";
                echo "<td>" . $row['activity_description'] . "</td>";
                echo "<td>" . $row['working_hour'] . "</td>";
                echo "<td>";
                echo "<a href='update.php?id=" . $row['id'] . "'>Edit</a>";
                echo "<br>";
                echo "<a href='delete.php?id=" . $row['id'] . "'>Delete</a>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='8'>No Logbook Entries Found</td><tr>";
        }
        $con->close();
        ?>
    </table>
</body>
</html>
