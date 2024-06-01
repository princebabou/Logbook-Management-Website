<?php
require '../conn.php';

if (isset($_GET['id'])) {
    $id = htmlspecialchars($_GET['id']);

    $sql = "DELETE FROM logbook_entries WHERE id=?";

    if ($stmt = $con->prepare($sql)) {
        $stmt->bind_param("i", $id_param);

        $id_param = $id;

        if ($stmt->execute()) {
            echo "Record deleted successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
        $stmt->close();
    } else {
        echo "Error: Unable to prepare statement.";
    }
} else {
    echo "Error: No ID provided.";
}

$con->close();

header("Location: index.php");
?>
