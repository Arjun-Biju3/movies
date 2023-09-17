 <?php
 error_reporting(0);
$con=mysqli_connect("localhost","root","","moviedb");

$k=$_POST['key'];
$s=$_POST['name'];


$sql="insert into sentiment_keywords values('','$k','$s')";
$res=mysqli_query($con,$sql);
if($res==true)
{


echo '<script>alert ("added sucessfully");</script>';
header('refresh:0;url=keyword.php');  
}
else
echo '<script>alert ("faled to added");</script>'; 
  

?>