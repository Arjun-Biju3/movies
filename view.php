<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.main{
			width: 100%;
			height: 100px;
			background-color: #00AAD4;
		}
		.f{
			position: absolute;
			top: 3%;
			left: 2%;
		}
		.title{
			position: absolute;
			top: 3%;
			left: 7%;

		}
		.details{
			width: 1150px;
			height: 1900px;
			background-color: white;
			position: absolute;
			top: 20%;
			left: 5%;
		}
		.one{
			position: absolute;
			left: 5%;
			background-color:  #00AAD4;
			width: 900px;
		}
		.two{
			position: absolute;
			left: 5%;
			top: 60%;
			background-color:white;
			width: 900px;
			height: 300px;
		}
		.rev{
			position: absolute;
			background-color: white;
			width: 900px;
			height: 300px;
			top: 75%;
			left: 5%;
		}
		.sent{
			width: 500px;
			height: 100px;
			position: absolute;
			border: 1px solid blue;
			border-radius: 5px;
			
			left: 1%;
			background-color: red;
		}
	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body bgcolor="lightgrey">
	<div class="main">
	<div class="i">
	<img src="images\logo-1640136453.png" width="50px" height="50px" class="f">
</div>
	<h3 class="title" style="color: white;">MSRPS</h3>
</div>
<br><br>
<div class="details">
	<center>
	<h3>MOVIE DETAILS</h3>
</center>
	<br>
	<hr>
	<?php 
     $con=mysqli_connect("localhost","root","","moviedb");
     session_start();

     $id=$_POST['id'];
    
     
                  $qry="select * from tbl_movies where id='$id'";
                  $run=mysqli_query($con,$qry);
                  while ($rows=mysqli_fetch_assoc($run))
                  {
                  ?>
                  <center>
                  <img src="./image/<?php echo $rows['poster']; ?>" width="300px" height="400px">
               <?php echo '<br>' ?>  
              <h1><?php echo $rows['name'] ?></h1>
          </center>
                <?php echo '<br>' ?>  <?php echo '<br>' ?>
                <div class="one">
                  <h3>DIRECTED BY:      <?php echo $rows['director'] ?></h3><?php echo '<br>' ?>
                  <hr>
                  <h3>PRODUCED BY:  <?php echo $rows['producer'] ?></h3><?php echo '<br>' ?>
                  <hr>
                  <h3>ACTORS:   <?php echo $rows['actors'] ?></h3><?php echo '<br>' ?>
                  <hr>
                  <h3>WRITTEN BY: <?php echo $rows['writer'] ?></h3><?php echo '<br>' ?>
                  <hr>
                  <h3>GENERE:  <?php echo $rows['genere'] ?></h3><?php echo '<br>' ?>
                  <hr>
                  <h3>RELEASE DATE:  <?php echo $rows['releasedate'] ?></h3><?php echo '<br>' ?>

              </div>

              <div class="two">
              <h3>DESCRIPTION</h3><br>
              <?php echo $rows['details'] ?>
          </div>
                   




          <div class="rev">
          	<h2>ADD REVIEW</h2>

             
          	     <div style="position: absolute;left: 20%; top: 25%;background-color: white;border: 2px solid blue;border-radius: 5px;">
              	<form method="POST" action="addcomment.php">
              		<br>
              		<label>TITLE</label>
              		<input type="text" name="title" required>
              		<br><br>
              		<label>COMMENT</label>
              		<br>
              		<textarea name="comment" rows="7px" cols="50px"></textarea>
              		<br><br>
              		<input type="text" name="mid" value="<?php echo $rows['id'] ?>" style="visibility: hidden;">
              		<center>
              		<input type="submit" name="submit" value="SUBMIT">
              		<input type="reset" name="" value="RESET">
              	</center>
              	
              	<br>
              	</form>
              </div>
              <div style="position:absolute;left: 3%;top: 115%;">
              <form method="POST" action="viewreview.php">
          		<input type="text" name="mid" value="<?php echo $rows['id'] ?>" style="visibility: hidden;">
          	<h2><button name="view" style="width:1000px;height: 30px;background-color: blue;border: none;border-radius: 5px;">VIEW REVIEWS</button></h2>
          </form>
</div>
                   <?php
                  }
?>


          </div>




</div>
</body>
</html>

