<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'database.php';
$title = $_POST['Title'];
$author = $_POST['Auhtor'];
$genre = $_POST['Genre'];
$date = $_POST['Publication_Date'];

$sql = "INSERT INTO register (Title, Author, Genre, Publication_Date) VALUES ('$title', '$author', '$genre', '$date')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
