
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
            height: 550px;
            background-color: white;
            border: 2px solid blue;
            position: absolute;
            left: 3%;
            top: 10%;
        }
        .pos{
            width: 450px;
            height: 500px;
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
            <h3>REGISTRATION</h3>
        </center>
            <br><br>
            <div class="pos">
                <form method="POST" action="adduser.php">
            <label>FIRST NAME</label>
            <input type="text" name="first" required>
             <br><br><br>
            <label>LAST NAME</label>
            <input type="text" name="last" required>
            <br><br><br>
            <label>GENDER</label>
            <input type="radio" value="male" name="gender" required>male<input type="radio" value="female" name="gender">female
             <br><br><br>
            <label>EMAIL</label>
            <input type="text" name="email" required>
             <br><br><br>
            <label>PASSWORD</label>
            <input type="password" name="password" required>
             <br><br><br>
            <label>CONFIRM PASSWORD</label>
            <input type="password" name="cp" required>
            <br><br><br>
            <center><input type="submit" class="btn" name="sub" value="REGISTER"></center>
            <br>
            <h4>Already have an account?<a href="login.php">LOGIN</a></h4>
        </div>
    </form>
        </div>
        
    </div>

</body>
</html>