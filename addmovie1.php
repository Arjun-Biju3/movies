<?php

 error_reporting(0);
$msg = "";
 
// If upload button is clicked ...
if (isset($_POST['upload'])) {

    $title=$_POST['title'];
$genere=$_POST['genere'];
$actors=$_POST['actors'];
$director=$_POST['director'];
$wt=$_POST['writer'];
$pr=$_POST['producer'];
$des=$_POST['des'];
$date=$_POST['date'];

 
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./image/" . $filename;
 
    $db = mysqli_connect("localhost", "root", "", "moviedb");
 
    // Get all the submitted data from the form
    $sql = "INSERT INTO tbl_movies VALUES ('','$title','$genere','$director','$pr','$wt','$actors','$date','$filename','$des')";
 
    // Execute query
    mysqli_query($db, $sql);
 
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {

       echo '<script>alert ("added sucessfully");</script>';
header('refresh:0;url=addmovie1.php');
    } else {
       echo '<script>alert ("faled to add");</script>'; 
header('refresh:0;url=addmovie1.php');
    }
}
?>
 
<!DOCTYPE html>
<html>
 
<head>
    <style type="text/css">
        .main{
            width: 100%;
            height: 70px;
            background-color:blue;
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
        .one{
            background-color: white;
            width: 900px;
            height: 1200px;
            position: absolute;
            top: 10;
            left: 10%;
            border: 2px solid blue;
        }
        .two{
            position: absolute;
            left: 10%;
        }
    </style>
    <title>Image Upload</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
 
<body bgcolor="lightgrey">
     <div class="main">

    <div class="i">
    <img src="images\logo-1640136453.png" width="50px" height="50px" class="f">
</div>
    <h3 class="title" style="color: white;">MSRPS</h3>
</div>
<br><br>
    <div id="">
        <div class="one">
        <form method="POST" action="" enctype="multipart/form-data">

            <br>
    <h4>ADD NEW MOVIE</h4>
    <hr>
    <br>
    <div class="two">
        <br>
    <label>TITLE</label>
    <input type="text" name="title" required>
    <br><br><br><br>
    <label>GENERE</label>
    <input type="text" name="genere" required>
    <br><br><br><br>
    <label>ACTORS</label>
    <input type="text" name="actors" required>
    <br><br><br><br>
    <label>DIRECTOR</label>
    <input type="text" name="director" required>
    <br><br><br><br>
    <label>WRITER</label>
    <input type="text" name="writer" required>
    <br><br><br><br>
    <label>PRODUCER</label>
    <input type="text" name="producer" required>
    <br><br><br><br>
    <label>DESCRIPTION</label>
    <textarea name="des"></textarea>
    <br><br><br><br>
    <label>RELEASE DATE</label>
    <input type="date" name="date" required>
    <br><br><br><br>
    <label>POSTER:</label>

    <br>
    <div class="form-group">
                <input class="form-control" type="file" name="uploadfile" value="" />
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
            </div>
        </form>
    </div>
</div>
            
    
</body>
 
</html>