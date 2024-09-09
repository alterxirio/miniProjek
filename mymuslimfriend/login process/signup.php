<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-TUGAS</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible:ital,wght@0,400;0,700;1,400;1,700&family=Fredoka:wght@300..700&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #687C3C;
            font-family: Atkinson Hyperlegible;
        }

        span{
            font-family: fredoka;
        }

        h2 {
            color: whitesmoke;
            margin-bottom: 50px;
        }

        label {
            color: whitesmoke;
        }

        p {
            color: whitesmoke;
        }

        a {
            color: red;
        }

        button {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .form {
            border:  solid 2px;
            width: 50%;
            padding: 20px;
            border-radius: 20px;
            padding-top: 20px;
        }

        input {
            margin-top: 10px;
            width: 100%;
            height: 30px;
            margin-bottom: 5px;
            border: solid 2px;
        }

        .main-div {
            position: relative;
            top: 10vh;
            width: fit-content;
        }
    </style>
</head>

<body>
    <center>
        <div class="main-div">
            <h2>WELCOME TO <span> MyMuslimFriend sign up</span></h2>
            <div class="form">
                <form action="signupHandler.php" method="post">
                    <br>
                    <input type="text" name="username_user" required placeholder="username">
                    <br>
                    <input type="email" name="email_user" required placeholder="email">
                    <br>
                    <input type="text" name="password_user" required placeholder="password">
                    <br>
                    <button type="submit">HANTAR</button>
                </form>
            </div>
        </div>
    </center>
</body>

</html>