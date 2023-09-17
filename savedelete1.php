<?php
error_reporting(0);

$con=mysqli_connect("localhost","root","","moviedb");
$id=$_POST["id"];
$mnam=$_POST["name"];

$qry="delete from tbl_reg where id='$id' and email='$mnam'";

if (mysqli_query($con,$qry)==TRUE)

{
      $sql="delete from tbl_login where username='$mnam'";
      mysqli_query($con,$sql);
     
       echo '<script> alert("succesful");</script>';
        header('refresh:0;url=userlist.php');
        }
else
      echo '<script> alert("Please try again");</script>';
?>
