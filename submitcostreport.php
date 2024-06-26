<?php
	include_once'config.php';
?>


<?php
	$id=$_POST["f1"];
	$name=$_POST["f2"];
	$budget=$_POST["f3"];
	$lcost=$_POST["f4"];
	$mcost=$_POST["f5"];
	
	$sql="insert into costreport (project_id,project_name,budget,laborcost,materialcost)values
	('$id','$name','$budget','$lcost','$mcost')";
	//execute the query
	
		if(mysqli_query($conn,$sql)){
			echo  "<script> alert ('Record Inserted Sucessfully')</script>";
			header("Location:costmanagement.php");
		}
		else {
			echo  "<script> alert ('Error in Insertion')</script>";
		}
		
		//close the connection
		
		mysqli_close($conn);

?>