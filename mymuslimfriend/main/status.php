<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="status.css">
</head>
<style>
</style>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg nav-bg-color fixed-top">
    <div class="container">
        <a class="navbar-brand font-weight-bold" href="#">MyMuslimFriend</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header  nav-bg-color">
            <h5 class="offcanvas-title " id="offcanvasNavbarLabel">MyMuslimFriend</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item px-3">
                <a class="nav-link active link-secondary" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item px-3 ">
                <a class="nav-link active link-secondary" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link active link-secondary" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link active link-secondary" aria-current="page" href="#">Home</a>
            </li>
            </ul>
        </div>
        </div>
    </div>
    </nav>
    <div class="main-div">
        <div class="top">
            <div class="top-left">
                <?php
                    session_start();
                    $user = $_SESSION['user'];
                    echo "<p id='menu'> Hello <b> $user </b></p>";
                ?>
            </div>
            <div class="top-right">
                <?php
                    echo '<p id="menu">' . date('y/m/d') . '</p>';  
                ?>
            </div>
        </div>
        <div class="mid">
            <div class="mid-left">
                <?php
                    include("../config/config.php");
                    $id = $_SESSION['id'];
                    $sql = mysqli_query($con, "SELECT * FROM status WHERE id = '$id'");
                    $match = mysqli_fetch_array($sql);
                    $merit = $match['merit'];
                    echo "<b>Merit</b>";
                    echo  "<p id='menu'> $merit/100</P>";
                ?>
            </div>
            <div class="mid-mid">
                <?php
                     $tittle = $match['tittle'];
                     echo "<b>Tittle</b>";
                     echo  "<p id='menu'> $tittle </P>";
                ?>
            </div>
            <div class="mid-right">
                <?php
                    $level = $match['level'];
                    echo "<b>Level</b>";
                    echo  "<p id='menu'> $level </P>";
                ?>
            </div>
        </div>
        <center>
        <div class="status">
            <div class="status-left">
                <img src="../media/“The Wise”.png" alt="">
            </div>
            <div class="status-right">
                <table>
                    <tr>
                        <th>
                            <p>Exp</p>
                        </th>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <p>Level</p>
                        </th>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <th>
                             <p>Merit Point</p>
                        </th>
                        <td>

                        </td>
                    </tr>
                </table>
            </div>
        </div>
        </center>
    </div>
</body>
</html>