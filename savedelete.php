<?php
$con=mysqli_connect("localhost","root","","moviedb");
$id=$_POST["id"];
$mnam=$_POST["name"];

$qry="delete from tbl_movies where id='$id' and name='$mnam'";

if (mysqli_query($con,$qry)==TRUE)
{
     
       echo '<script> alert("succesful");</script>';
        header('refresh:0;url=movielist.php');
        }
else
      echo '<script> alert("Please try again");</script>';
?>
