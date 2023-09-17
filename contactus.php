 <?php
 error_reporting(0);
$con=mysqli_connect("localhost","root","","moviedb");

$first=$_POST['first'];
$last=$_POST['last'];

$email=$_POST['email'];
$mb=$_POST['mobile'];
$msg=$_POST['msg'];

$sql="insert into contact values('$first','$last','$email','$mb','$msg')";
$res=mysqli_query($con,$sql);
if($res==true)
{


echo '<script>alert (" sucessful");</script>';
header('refresh:0;url=contactus.html');  
}
else
echo '<script>alert ("faled");</script>'; 
  

?>