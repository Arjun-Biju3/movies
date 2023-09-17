<?php
error_reporting(0);
$con=mysqli_connect("localhost","root","","moviedb");
$id=$_POST["id"];
$mnam=$_POST["name"];

$qry="delete from tbl_comment where cid='$id' and title='$mnam'";

if (mysqli_query($con,$qry)==TRUE)
{
     
       echo '<script> alert("succesful");</script>';
        header('refresh:0;url=viewcomment.php');
        }
else
      echo '<script> alert("Please try again");</script>';
?>
