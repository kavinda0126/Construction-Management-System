<?php
	include_once'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cost Management</title>
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
		td{
			text-align: center;
		}
		.tablebutton{

			display: inline-block;
    	border: none;
    	border-radius: 10%;
    	padding: 10px 20px;
    	background-color: darkblue;
    	color: white;
    	font-size: 16px;
    	text-align: center;
    	text-decoration: none;
    	cursor: pointer;
		}
		.tablebutton:hover{
			background-color:#3b5998 ;

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
                    
                    <button class="my-button"> <a href="reg.html">  Sign up </a></button> <br><br><br>
                    <input type="text" placeholder="Search" class="search-bar" style="width: 400px;">

                    <button class="my-button" >Search</button>
                </td>
			</tr>
		</table>
		<hr>
		<nav>
			<ul>
				<li><a href="Home.html">Home</a></li>
				<li><a href="Project.html">Project</a></li>
				<li><a href="news.html">News</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Help</a></li>
			</ul>
		</nav>
		<hr>
	</header>
	

	<br><br>

	<button class="addcostbutton"><a href="addcostreport.html">Add Cost Report</a></button><br><br>

		
    <h1><u>Cost Reports</u></h1>
	
	

	<center>
		
		<div  style="border-style:groove;border-color:DarkBlue">
			<table border="1" width="100%">
				<tr>
					<th class="col1">Project ID</th>
					<th class="col1">Project Name</th>
					<th class="col1">Budget</th>
					<th class="col1">Laborcost</th>
					<th class="col1">Material Cost</th>
					<th class="col1">Edit</th>
					<th class="col1">Delete</th>
				
					
				</tr>
				<?php
					$sql = "SELECT * FROM costreport";
					$result = $conn->query($sql);
					
					if ($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {
							echo "<tr>";
							echo "<td>".$row["project_id"]."</td>";
							echo "<td>".$row["project_name"]."</td>";
							echo "<td>".$row["budget"]."</td>";
							echo "<td>".$row["laborcost"]."</td>";
							echo "<td>".$row["materialcost"]."</td>";
							

							echo "<td><center><button class='tablebutton'><a href='editrecord.php?id=".$row["project_id"]."&name=".$row["project_name"]."&budget=".$row["budget"]."&laborcost=".$row["laborcost"]."&materialcost=".$row["materialcost"]."'>Edit</a></button></center></td>";

							
							echo "<td><center><button class='tablebutton'><a href='deleterecord.php?id=".$row["project_id"]."'>Delete</a></button></center></td>";
						

						
							echo "</tr>";
						}
					} else {
						echo "<tr><td colspan='8'>No records yet</td></tr>";
					}
					
					mysqli_close($conn);
				?>
			</table>
		</div>
	</center>










	<br><br><br><br>

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
                                <td class="middle-align"><a href="https://www.facebook.com/"><img src="img/fbwhite.png" alt="FB" height="50" width="50"></a></td>
                                <td class="middle-align"><a href="https://lk.linkedin.com/"><img src="img/linkedinwhite.png" alt="LinkedIn" height="30" width="30"></a></td>
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
                <td class="middle-align" style="color: white;">
                    <a href="privacypolicy.html">Privacy Policy</a>
                </td>
                <td class="middle-align" style="color: white;">
                    |
                </td>
                <td class="middle-align" style="color: white;">
                     <a href="#">Terms of Service</a>
                </td>
                <td class="middle-align" style="color: white;">
                    |
                </td>
                <td class="middle-align" style="color: white;">
                    <a href="#">Copyright Policy</a>
                </td>
                <td class="middle-align" style="color: white;">
                    |
                </td>
                <td class="middle-align" style="color: white;">
                    <a href="Contactus.html">Contact Us</a>
                </td>
                <td class="middle-align" style="color: white;">
                    <a href="#"><img src="img/qr.png" alt="QR" height="50" width="50"></a>
                </td>
            </tr>
        </table>
        <p>&copy; ConstructionXpert Pvt Ltd. All rights reserved.</p>
        </div>
        
    </footer>
    