<?php
error_reporting(0);
$con=mysqli_connect("localhost","root","","moviedb");
$id=$_POST["id"];
$mnam=$_POST["name"];

$qry="delete from sentiment_keywords where id='$id' and keyword='$mnam'";

if (mysqli_query($con,$qry)==TRUE)
{
     
       echo '<script> alert("succesful");</script>';
        header('refresh:0;url=keyword.php');
        }
else
      echo '<script> alert("Please try again");</script>';
?>
