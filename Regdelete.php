<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "cms";

    $conn = mysqli_connect($servername, $username, $password, $db);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "DELETE FROM user WHERE ID=$id";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Record deleted successfully.')</script>";
			echo "<script>window.location.href = 'display.php';</script>";
        } else {
            echo "<script>alert('Error deleting record.')</script>";
        }
    } else {
        echo "Invalid request.";
    }
?>
