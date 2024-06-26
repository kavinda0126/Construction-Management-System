<?php 
     
session_start();

include_once 'connection.php';

    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(!empty($username) && !empty($password))
        {
            $query = "SELECT * FROM user_login WHERE username = '$username'";
            $result = mysqli_query($conn, $query);

            if(mysqli_num_rows($result) > 0)
        {
            $user = mysqli_fetch_assoc($result);
            if($user['password'] === $password)
            {
                $_SESSION['username'] = $username;
                header("Location: home.html");
                die;
            }
        }
    }
    echo "<script> alert('Username or Password Incorrect')   </script>";
}
else
{
    
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <div id = "box">

    <form method="POST" action="login.php">
        <h2><b>Login</b></h2><br>

        <label for="username"><b>Username</b></label><br>
        <input type="text" placeholder="Enter Username" name="username" required><br>
        <label for="password"><b>Password</b></label><br>
        <input type="password" placeholder="Enter Password" name="password" required><br><br>

        <input id="button" type="submit" value="Login" name="submit"><br><br><br>

        <a class="cna" href="reg.php">Create New Account</a><br><br>
    </form>  
    </div>

</body>
</html>