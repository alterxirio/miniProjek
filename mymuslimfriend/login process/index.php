<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible:ital,wght@0,400;0,700;1,400;1,700&family=Fredoka:wght@300..700&display=swap" rel="stylesheet">

    <style>
        
        body {
            background-color: #687C3C;
        }

        .main-div{
            background-color: white;
            width: 75vw;
            height: 80vh;
            position: absolute;
            top: 10%;
            left: 13%;
            border-radius: 20px;
            display: flex;
            justify-content: space-between;
        }

        .left p{
            text-align: start;
            font-size: 3rem;
            margin-left: 20%;
            margin-top: 30%;
            font-family: Atkinson Hyperlegible;
        }

        #tittle{
            font-family: fredoka;
        }

        .right{
            background-color: #687C3C;
            width: 25vw;
            height: 70vh;
            margin-right: 3%;
            margin-top: 3%;
            border-radius: 20px;
        }

        .right P{
            font-family: Atkinson Hyperlegible;
            color: white;
            font-size: x-large;
            margin-top: 40px;
        }

        .right input{
            width: 90%;
            height: 30px;
            margin-bottom: 20px;
            border: solid 2px;
        }

        .right button{
            width: 100px;
            height: 30px;
            border-radius: 100px;
            margin-top: 30px;
            margin-bottom: 20px;
        }
        .right span{
            font-family: Atkinson Hyperlegible;
            color: white;
        }

    </style>
</head>
<body>
    <center>
        <div class="main-div">
            <div class="left">
                <p> Welcome to <br><span id="tittle"><b>MyMuslimFriend</b></span></p>
            </div>
            <div class="right">
                <form action="loginBackend.php" method="POST">
                    <p>LOGIN</p>
                    <br>
                    <input type="text" name="username" placeholder="Username">
                    <br>
                    <input type="text" name="password" placeholder="Passwrod">
                    <br>
                    <button type="submit">login</button>
                    <br>
                     <span>Dont have account? <a href="signUp.php">sign up</a></span>
                </form>
            </div>
        </div>
    </center>
</body>
</html>