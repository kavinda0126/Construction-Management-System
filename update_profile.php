<?php
session_start();

include_once 'connection.php';

$username = $_SESSION['username'];

$newUsername = $_POST['new_username'];
$newPassword = $_POST['new_password'];
$newNumber = $_POST['new_number'];
$newEmail = $_POST['new_email'];

$query = "UPDATE user_login SET username = ?, password = ?, number = ?, email = ? WHERE username = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('sssss', $newUsername, $newPassword, $newNumber, $newEmail, $username);

if ($stmt->execute()) {
    
    if($stmt->affected_rows > 0){

        $_SESSION['username'] = $newUsername;
        echo "Profile updated successfully!";
        header("Location: login.php");
        die;
    } 
    else {
        echo "Error: Profile update failed.";
    }
} 
else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();

?>