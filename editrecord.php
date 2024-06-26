<?php
	include_once'config.php';
?>


<?php

$id=$_GET["id"];
$name=$_GET["name"];
$budget=$_GET["budget"];
$lcost=$_GET["laborcost"];
$mcost=$_GET["materialcost"];

?>



<!DOCTYPE html>
<html>
<head>
	<title>Edit Cost Report</title>
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
	

	<br><br>


    <style>
        .form-border {
        border: 1px solid blue;
        padding: 50px;
        margin:10px;
        display: inline-block;
    }
        
    </style>

    <center>
     <div class="form-border">   
    <h1><u>Edit Cost Report</u></h1>

    <form action="submiteditrecord.php" method="GET">
        Project ID: <br>
        <input type="text" value="<?php echo " $id"   ?>" name="f1" readonly><br><br>
        
        Project Name: <br>
        <input type="text" value="<?php echo " $name"   ?>" name="f2" required><br><br>
        
        
        Budget: <br>
        <input type="number" value="<?php echo " $budget"   ?>" name="f3" required><br><br>
        
    
        Labor Costs: <br>
        <input type="number" value="<?php echo " $lcost"   ?>" name="f4" required><br><br>
        
        Material Costs: <br>
        <input type="number" value="<?php echo " $mcost"   ?>" name="f5" required><br><br>
        


        
    
        <input type="submit" value="Submit" name="submit">
      </form>
      

    
	
	</div>
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
    