<?php

    include_once 'config.php';
?>

<?php

    $id=$_GET["id"];

    $query="delete from costreport where project_id='$id' ";

    if(mysqli_query($conn,$query)){
        echo  "<script> alert ('Record Deleted Sucessfully')</script>";
        header("Location:costmanagement.php");
        
    }
    else {
        echo  "<script> alert ('Error in Deleting')</script>";
    }
    
    //close the connection
    
    mysqli_close($conn);

?>


?>