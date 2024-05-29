<?php
include 'database.php';

$Title = $_POST['Title'];

$sql = "DELETE FROM register WHERE id=$Title";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>
