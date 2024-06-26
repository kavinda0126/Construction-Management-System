<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include_once 'connection.php';

$username = $_SESSION['username'];

$query = "DELETE FROM user_login WHERE username = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('s', $username);

if ($stmt->execute()) {
    
    session_unset(); 
    session_destroy(); 

    echo "<div class='message'>";
    echo "User Account Deleted Successfully!<br>";
    echo "You will be redirected to the Login page.";
    echo "</div>";
    echo "<meta http-equiv='refresh' content='2;url=login.php'>";

} 
else {
    echo "Error: Account Deletion failed.";
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Account</title>
    <style>
        body {
            background-image: url('images/Background3.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .message {
            text-align: center;
            font-size: 24px;
            margin-top: 250px;
            color: white;
        }
    </style>
</head>
<body>