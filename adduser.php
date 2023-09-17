 <?php
 error_reporting(0);
$con=mysqli_connect("localhost","root","","moviedb");

$first=$_POST['first'];
$last=$_POST['last'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password=$_POST['password'];
$type="user";

$sql="insert into tbl_reg values('','$first','$last','$gender','$email','$password','$type')";
$res=mysqli_query($con,$sql);
if($res==true)
{

$qry="insert into tbl_login values('$email','$password','$type')"; 
$res1=mysqli_query($con,$qry);
echo '<script>alert ("regisered sucessfully");</script>';
header('refresh:0;url=login.php');  
}
else
echo '<script>alert ("faled to register");</script>'; 
  

?>