<?php
include 'database.php';

$title= $_POST['Title'];
$author = $_POST['Author'];
$genre = $_POST['Genre'];
$date = $_POST['Publication_Date'];

// $sql = "UPDATE register SET name='$name', gender='$gender' WHERE id=$id";
$sql = "UPDATE register SET title='$title', author='$author', genre='$genre', date='$date' ";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
?>
