<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = new mysqli('127.0.0.1', 'root', '', 'form');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle deletion
if (isset($_POST['delete_id'])) {
    $delete_id = intval($_POST['delete_id']);
    $delete_sql = "DELETE FROM registrations WHERE id = ?";
    
    if ($delete_stmt = $conn->prepare($delete_sql)) {
        $delete_stmt->bind_param("i", $delete_id);
        if ($delete_stmt ->execute()) {
            echo "User  deleted successfully.";
        } else {
            echo "Error deleting user: " . $conn->error;
        }
        $delete_stmt->close();
    }
}

// Close connection
$conn->close();
?>