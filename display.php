<html>
<head>
	<Title>Display</Title>
	
	
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
	
	<style>
    #my-table {
        border-collapse: collapse;
        width: 100%;
    }

    #my-table th, 
	#my-table td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    #my-table th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    #my-table  tr:hover {
        background-color: #f5f5f5;
    }
	</style>
	
</head>



<body>

	<header>
		<table>
			<tr>
				<td class="left-align" width="10%"><img src="img/loogo.png" alt="logo" height="150" width="150"></td>
				<td class="left-align" width="15%">
					<h2 style="color: white;">CONSTRUCTIONXPERT</h2>
					<h6 style="color: white;"><i>Buidling Excellence by CONSTRUCTIONXPERT</i></h6>
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
	
	<center>
	<h2 class="titleReg" >Registered Users</h2>
	</center>
	
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "cms";

    $conn = mysqli_connect($servername, $username, $password, $db);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM user";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
?>
        <table border="1" id="my-table">
            <tr>
                <th>Username</th>
                <th>Gender</th>
                <th>Type</th>
                <th>Phone</th>
                <th>Email</th>
				<th colspan="2">Actions</th>
            </tr>
<?php
        while ($row = mysqli_fetch_assoc($result)) {
?>
            <tr>
				<td><?php echo $row["Uname"]; ?></td>
				<td><?php echo $row["Gender"]; ?></td>
				<td><?php echo $row["EorC"]; ?></td>
				<td><?php echo $row["Phone"]; ?></td>
				<td><?php echo $row["Email"]; ?></td>
				<td><button class=\"my-button\"><a href='Regupdate.php?id=<?php echo $row["ID"]; ?>'>Update</a></button></td>
				<td><button class=\"my-button\"><a href='Regdelete.php?id=<?php echo $row["ID"]; ?>'>Delete</a></button></td>
			</tr>

<?php
        }
?>
        </table>
<?php
    } else {
        echo "No records found.";
    }

    mysqli_close($conn);
?>


<br border='1px'>
	<footer>
        <div>
            <table class="first-table">
                <tr>
                    <td class="left-align" width="15%"><img src="img/loogo.png" alt="logo" height="130" width="130"><br><br<br></td>
                    <td class="left-align">
                        <h3 style="color: white;"><i>Buidling Excellence by CONSTRUCTIONXPERT</i></h3>
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
                <td style="color: white;"class="middle-align">
                    <a href="#">Privacy Policy</a>
                </td>
                <td style="color: white;" class="middle-align">
                    |
                </td>
                <td style="color: white;" class="middle-align">
                     <a href="#">Terms of Service</a>
                </td>
                <td style="color: white;" class="middle-align">
                    |
                </td>
                <td style="color: white;" class="middle-align">
                    <a href="#">Copyright Policy</a>
                </td>
                <td style="color: white;"class="middle-align">
                    |
                </td>
                <td style="color: white;"class="middle-align">
                    <a href="#">Contact Us</a>
                </td>
                <td style="color: white;"class="middle-align">
                    <a href="#"><img src="img/qr.png" alt="QR" height="50" width="50"></a>
                </td>
            </tr>
        </table>
        <p>&copy; ConstructionXpert Pvt Ltd. All rights reserved.</p>
        </div>
        
    </footer>
	<script src="Homejs.js"></script>

</body>
</html>