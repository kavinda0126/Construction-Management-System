<?php
	include_once'config.php';
?>

<?php
    if($_GET['submit']){
        $project_id=$_GET['f1'];
        $project_name=$_GET['f2'];
        $budget=$_GET['f3'];
        $laborcost=$_GET['f4'];
        $materialcost=$_GET['f5'];
        


        $query="UPDATE costreport SET
                
                project_name='$project_name',
                budget='$budget',
                laborcost='$laborcost',
                materialcost='$materialcost'

                WHERE project_id='$project_id' ";


            if(mysqli_query($conn,$query)){
                echo  "<script> alert ('Record Updated Sucessfully')</script>";
                header("Location:costmanagement.php");
            }
            else {
                echo  "<script> alert ('Error in Updation')</script>";
            }
            
            //close the connection
            
            mysqli_close($conn);

    }