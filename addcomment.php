<?php 
error_reporting(0);
if(isset($_POST["submit"]))
{

	$conn=mysqli_connect("localhost","root","","moviedb");
	session_start();
    $user=$_SESSION["username"];

$cod="select * from tbl_reg where email='$user'";
$result1=mysqli_query($conn,$cod);
$row1=mysqli_fetch_array($result1);
$un=$row1["email"];
$id=$row1["id"];


$title=$_POST["title"];
$comment=$_POST["comment"];
$movie=$_POST["mid"];

$qry="select * from sentiment_keywords where keyword='$comment'";
$res=mysqli_query($conn,$qry);
$row=mysqli_fetch_array($res);
$score=$row["score"];

$sql="insert into tbl_comment values('','$title','$comment','$score','$id','$un','$movie')";
$result=mysqli_query($conn,$sql);
if($result==true)
{
	echo '<script>alert("sucessfully added")</script>';
	header('refresh:0;url=allmovie1.php');
}
else
	echo '<script>alert("failed to add")</script>';
	header('refresh:0;url=allmovie1.php');



}

?>