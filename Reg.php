<!DOCTYPE html>
<html>
<head>
	<Title>Registration Page</Title>
	
	
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
	
	<table>
		<tr>
			<td class="left-align">
				<h1 class="titleReg" >Create Your Account</h1>
				<center>
	
					<div class="text-boxReg"> 
						<form action="submitReg.php" method="POST" onsubmit="return checkPassword()">
							
							<br>
							
							<label for="name">User Name:</label><br>
							<input type="text" name="name" required>
							
							<br><br>
							
							<label for="gender">Gender:</label>
							<br>
							<input type="radio" id="male" name="gender" value="male" required>
							<label for="male">Male</label>
			
							<input type="radio" name="gender" value="female" required>
							<label for="female">Female</label>
			
							<br><br>
			
							<input type="radio" name="EorC" value="employee" required>
							<label for="employee">Employee</label>
			
							<br>

							<input type="radio" name="EorC" value="customer" required>
							<label for="customer">Customer</label>
				
							<br><br>
							
							<label for="mobile">Phone Number:</label><br>
							<input type="Phone" name="mobile" pattern="[0-9]{10}" required>
							
							<br><br>
			
			
							<label for="email">Email:</label><br>
							<input type="email" name="email" required>
							<br><br>
			
							<label for="password">Password:</label><br>
							<input type="password" id="password" name="password" required>
			
							<br><br>
							
							<label for="confirmPassword">Re-enter Password:</label><br>
							<input type="password" id="confirmPassword" name="confirmPassword" required>
			
							<br><br>
							
							<input type="checkbox" id="checkBox" name="checkBox" onclick="enableButton()">Accept Privacy 
							Policy and Terms
			
							<br><br>
							
							<input class="my-button" type="reset" value="Clear">
			
							<input class="my-button" type="submit" value="SignUp" id="signUp" disabled>
						</form>					
						

				</div>
				</center>
			</td>
			<td class="middle-align">
				<h1 class="titleReg" >OR Already have an Account ?</h1>
				<button class="my-button"><a href="#">Log in</a></button>
				<br><br>
				<img src="img/site.jpeg" alt="Site" height="400" width="600">
			</td>
			<!--<td class="middle-align">
				<img src="img/site.jpeg" alt="Site" height="400" width="600">
				<p align="left">Absolutely. The Adobe Express app is quick and easy
				to use on smartphones and other mobile devices.
				Simply open the QR code generator, add your desired link,
				choose a style and color, download the file, and you're done. 
				With Adobe Express, there's no need to create an account or sign in before you start.</p>
			</td>-->
		</tr>
	</table>
	
	
	
	<br border='1px'>
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
		
		
			
			
		</div>
	</footer>
	
	
	<script src="Reg.js"></script>

</body>
</html>