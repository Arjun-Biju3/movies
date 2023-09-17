<HTML>
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style type="text/css">
     .btn{
          background-color:red;
          position: absolute;
          left: 70%;
          top: 65%;
     }
     .main{
               width: 200%;
               height: 80px;
               background-color: #00AAD4;
          }
          .title{
               position: absolute;
               top: 3%;
               left: 7%;
          }
          .f{
               position: absolute;
               top: 3%;
               left: 2%;
          }
</style>
</head>
<body>
     <div class="main">
     <div class="i">
     <img src="images\logo-1640136453.png" width="50px" height="50px" class="f">
</div>
     <h3 class="title" style="color: white;">MSRPS</h3>
</div>
<br><br>
<form >
<div class="card-columns" style="height:1000px">
<?php
error_reporting(0);
                  //$mc=$_POST['suggest'];
                  $mov=$_POST['mov'];
                  $con=mysqli_connect("localhost","root","","moviedb");
                  $qry="select * from tbl_movies where name='$mov'";
                  $run=mysqli_query($con,$qry);
                  while ($rows=mysqli_fetch_assoc($run))
                  {
                  ?>
                       <?php echo '<div class=""  style="height:600px;">'?>

                        
                         <img src="./image/<?php echo $rows['poster']; ?>" width="300px" height="400px">
                         <?php echo '<br>' ?>
                         <?php echo 'NAME:' ?> <?php echo $rows['name']; ?><?php echo '<br>' ?>
                        <?php echo 'DIRECTOR:' ?> <?php echo $rows['director']; ?><?php echo '<br>' ?>
                        <?php echo 'WRITER:' ?> <?php echo $rows['writer']; ?>
                        <?php echo '</div>'?>
                        
                        <?php echo '<br>' ?>
                        <?php
                  }
?>
</div>
</form>
</body>
</HTML>