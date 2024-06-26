<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include_once 'connection.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>User Account</title>
    <link rel="stylesheet" type="text/css" href="kdstyle.css">
</head>
<body>
<header>
		<table>
			<tr>
				<td class="left-align" width="10%"><img src="img/loogo.png" alt="logo" height="150" width="150"></td>
				<td class="left-align" width="15%">
					<h2>CONSTRUCTIONXPERT</h2>
					<h6><i>Buidling Excellence by CONSTRUCTIONXPERT</i></h6>
				</td>
				<td class="right-align" width="50%">
                    <button class="my-button">Log in</button> 
                    
                    <button class="my-button">Sign up</button> <br><br><br>
                    <input type="text" placeholder="Search" class="search-bar" style="width: 400px;">

                    <button class="my-button" >Search</button>
                </td>
			</tr>
		</table>
		<hr>
		<nav>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Project</a></li>
				<li><a href="#">News</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Help</a></li>
			</ul>
		</nav>
		<hr>
	</header>
    <style>
        body {
            background-image: url('images/Backgroud6.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .profile{
            margin: 24px 0 12px 0;
        }

        img.avatar{
            width: 12%;
            border-radius: 50%;
            padding-left: 10px;
        }

        .profile_info {
            font-size: 20px;
        }

        .update_heading {
            color: blue;
            padding-top: 20px;
        }

        .input_field {
            width: 200px;
            height: 20px;
        }

        .update_button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 40%;
        }
        
        .update_button:hover {
            background-color: crimson;
        }

        .delete_heading {
            color: blue;
        }

        .delete_button {
            background-color: crimson;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 40%;
        }

        .delete_button:hover {
            opacity: 0.6;
        }
        
        .logout_button{
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 10%;
        }

        .logout_button:hover {
            background-color: crimson;
        }

        .box1 {
            border: 3px solid white;
            padding: 10px;
            margin: 20px;
            width: 20%;
            background-color: #f6f6f6;
        }

        .box2 {
            border: 3px solid white;
            padding: 10px;
            margin: 20px;
            width: 20%;
            height: 450px;
            background-color: #f6f6f6;
        }

        .box3 {
            border: 3px solid white;
            padding: 10px;
            margin: 20px;
            width: 20%;
            height: 130px;
            background-color: #f6f6f6;
        }

        .contact-details {
			text-align: left;
		}

		fieldset {
			display: inline-block;
			width: auto;
			margin-right: 20px;
		}

		.register-cell {
			vertical-align: top;
		}

		.fdcell {
			width: 28%;
		}

		.contactcell {
			width: 10%;
		}

		.contactdetails tr {
			padding-bottom: 10px;
			margin: 10px;
		}

		.contactdetails td {
			border: 1px;
			padding: 10px;
		}
    </style>
    <center>

        <div class="profile">
            <img src="images/Profile.png" alt="Dp" class="avatar">
        </div>

        <?php

            $username = $_SESSION['username'];

            $query = "SELECT username, password, number, email FROM user_login WHERE username = ?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param('s', $username);
            $stmt->execute();
            $stmt->bind_result($fetchedUsername, $fetchedPassword, $fetchedNumber, $fetchedEmail);
        
            if ($stmt->fetch()) {
                
                echo "<div class='box1'>";
                echo "<h2 style='color: blue;'>User Details</h2>";
                echo "<p class='profile_info'>Username: " . $fetchedUsername . "</p>";
                echo "<p class='profile_info'>Password: " . $fetchedPassword . "</p>";
                echo "<p class='profile_info'>Phone: " . $fetchedNumber . "</p>";
                echo "<p class='profile_info'>Email: " . $fetchedEmail . "</p>";
                echo "</div>";
                
                echo "<div class='box2'>";
                echo "<h2 class='update_heading'>Update Profile</h2>";
                echo "<form action='update_profile.php' method='POST'>";
                echo "<label for='newUsername'>New Username:</label><br>";
                echo "<input type='text' name='new_username' class='input_field' placeholder='New Username'><br><br>";
                echo "<label for='newPassword'>New Password:</label><br>";
                echo "<input type='password' name='new_password' class='input_field' placeholder='New Password'><br><br>";
                echo "<label for='newNumber'>New Number:</label><br>";
                echo "<input type='text' name='new_number' class='input_field' placeholder='New Number'><br><br>";
                echo "<label for='newEmail'>New Email:</label><br>";
                echo "<input type='email' name='new_email' class='input_field' placeholder='New Email'><br><br>";
                echo "<input type='submit' value='Update' class='update_button'>";
                echo "</form>";
                echo "</div>";
                
                echo "<div class='box3'>";
                echo "<h2 class='delete_heading'>Delete Account</h2>";
                echo "<form action='delete_account.php' method='POST'>";
                echo "<input type='submit' name='delete_account' value='Delete Account' class='delete_button'>";
                echo "</form>";
                echo "</div>";

            } 
            else {
                echo "Error: User not found.";
            }
        
            $stmt->close();
            $conn->close();
        ?>

        <div class="logout_button">
            <form action="logout.php" method="POST">
                <input type="submit" name="logout" value="Log Out">
            </form>
        </div>

        <h3><a style="text-decoration: none; color: white;" href="#">Add a New Account</a></h3>

    </center>

    <footer>
        <div>
            <table class="first-table">
                <tr>
                    <td class="left-align" width="15%"><img src="img/loogo.png" alt="logo" height="130" width="130"><br><br<br></td>
                    <td class="left-align">
                        <h3><i>Buidling Excellence by CONSTRUCTIONXPERT</i></h3>
                    </td>
                    <td class="middle-align">
                        <table>
                            <tr>
                                <td class="middle-align"><a href="#"><img src="img/fbwhite.png" alt="FB" height="50" width="50"></a></td>
                                <td class="middle-align"><a href="#"><img src="img/linkedinwhite.png" alt="LinkedIn" height="30" width="30"></a></td>
                                <td class="middle-align"><a href="#"><img src="img/whatsappwhite.png" alt="Whatsapp" height="30" width="30"></a></td>
                                <td class="middle-align"><a href="#"><img src="img/telewhite.png" alt="Tele" height="30" width="30"></a></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
     
        </div>
        
        <table>
            <tr>
                <td class="middle-align">
                    <a href="#">Privacy Policy</a>
                </td>
                <td class="middle-align">
                    |
                </td>
                <td class="middle-align">
                     <a href="#">Terms of Service</a>
                </td>
                <td class="middle-align">
                    |
                </td>
                <td class="middle-align">
                    <a href="#">Copyright Policy</a>
                </td>
                <td class="middle-align">
                    |
                </td>
                <td class="middle-align">
                    <a href="#">Contact Us</a>
                </td>
                <td class="middle-align">
                    <a href="#"><img src="img/qr.png" alt="QR" height="50" width="50"></a>
                </td>
            </tr>
        </table>
        <p>&copy; ConstructionXpert Pvt Ltd. All rights reserved.</p>
        </div>
        
    </footer>
</body>
</html>