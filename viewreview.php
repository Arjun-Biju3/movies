
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
            width: 102%;
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
        .sent{
            width: 500px;
            height: 250px;
            position: absolute;
            border: 1px solid blue;
            border-radius: 5px;
            
            left: 1%;
            background-color: red;
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
<div class="card-columns">
<?php

 $con=mysqli_connect("localhost","root","","moviedb");
 $id=$_POST['mid'];
 

 $sql="select * from tbl_comment where id='$id'";
 $res=mysqli_query($con,$sql);
 while($row=mysqli_fetch_assoc($res))
 {
    ?>
       <?php echo '<div class="card" >';?>
    <h2 align="right" style="color:blue;"><?php echo $row['score']; echo "/5" ?></h2>
   <h5 ><?php echo $row['title'];?></h5>
   <h6 style="color:blue;"><?php echo $row['username'];?></h6>
   <hr>
    <h3><?php echo $row['comment']; ?></h3>
   
    
    <?php echo '</div>' ?>
    <?php echo'<br>' ?>
    <?php
 }
 


?>
                  
                     

                       
                  

</div>
</form>
</body>
</HTML>