<?php
require 'connection.php';
if(isset($_POST['delete']))
{
    $id = $_POST['id'];
    $query_run = mysqli_query($conn, "DELETE FROM sregistration WHERE id='$id'");
    if($query_run)
    {
        echo '<script> alert("Data is deleted"); </script>';
        header("location:aprofile.php");
    }
    else
    {
        echo '<script> alert("Data is not deleted"); </script>';
    }
}
?>