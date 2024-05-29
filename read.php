<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'database.php';

$sql = "SELECT * FROM register";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // echo "Name: " . $row["name"]. " - Gender: " . $row["gender"]. "<br>";
        echo "Title: " . $row["Title"]. " - Author: " . $row["Author"]. " - Genre: " . $row["Genre"] . " - Publication Date: " . $row["Publication_Date"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<!-- 
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'database.php';

// Check if ID, name, or no criteria is provided
if (isset($_GET['id'])) {
    // Read record by ID
    $id = $_GET['id'];
    $sql = "SELECT * FROM templates WHERE id=$id";
} elseif (isset($_GET['name'])) {
    // Read record by name (assuming 'name' column exists in the table)
    $name = $_GET['name'];
    $sql = "SELECT * FROM templates WHERE name='$name'";
} else {
    // Read all records
    $sql = "SELECT * FROM templates";
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Display records
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Title: " . $row["title"]. " - Content: " . $row["content"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> -->
