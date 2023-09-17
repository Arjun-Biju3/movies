
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style type="text/css">
        .reg{
            width: 550px;
            height: 640px;
            background-color: whitesmoke;
        }
        .second{
            width: 450px;
            height: 300px;
            background-color: white;
            border: 2px solid blue;
            position: absolute;
            left: 3%;
            top: 30%;
        }
        .pos{
            width: 450px;
            height: 250px;
            position: absolute;
            left: 10%;
        }
        .btn{
            border: none;
            background-color: blue;
            width: 100px;
            height: 30px;
            border-radius: 5px;
        }

    </style>
</head>
<body background="images\cover-1640136453.png">
    <div class="reg">
        <div class="second">
            <center>
                <form method="POST" action="varify.php">
            <h3>LOGIN</h3>
        </center>
            <div class="pos">
  
             <br>
            <label>EMAIL</label>
            <input type="text" name="username" required>
             <br><br><br>
            <label>PASSWORD</label>
            <input type="password" name="password" required>
             
            <br><br><br><br>
            <center><input type="submit" class="btn" name="sub" value="LOGIN"></center>
            <br>
            <a href="register.php" style="text-decoration:none;">CREATE NEW ACCOUNT</a>
        </form>
        </div>
        </div>
        
    </div>

</body>
</html>