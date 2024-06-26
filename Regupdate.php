<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cmsreg";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>

<html>
<head>
	<Title>Upadate Registration details</Title>
	
	
    <link rel="stylesheet" type="text/css" href="Sstyle.css">
	<link rel="stylesheet" type="text/css" href="kdstyle.css">
	<style>
		
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
                    
                    <button class="my-button"><a href="Reg.php">Sign up</a></button> <br><br><br>
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

<?php
		if (isset($_GET['id'])) {
        $id = $_GET['id'];
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $newPhone = $_POST['newPhone'];
            $newEmail = $_POST['newEmail'];

            $sql = "UPDATE user SET Phone='$newPhone', Email='$newEmail' WHERE ID=$id";
            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('Record updated successfully.')</script>";
				echo "<script>window.location.href = 'display.php';</script>";
            } else {
                echo "<script>alert('Error updating record.')</script>";
            }
        }

        $sql = "SELECT * FROM user WHERE ID=$id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
?>

<center>

	<h2 class="titleReg" >Update User Information</h2>
	
	<br>
	
	<div class="text-box">
        <form method="POST" action="">
            <label for="newPhone">New Phone:</label>
            <input type="text" name="newPhone" value="<?php echo $row['Phone']; ?>">
            <br>
            <label for="newEmail">New Email:</label>
            <input type="text" name="newEmail" value="<?php echo $row['Email']; ?>">
            <br><br>
            <input type="submit" value="Update" class="my-button">
        </form>
	</div>
</center>
		
<?php
    } else {
        echo "Invalid request.";
    }
?>


<br>
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