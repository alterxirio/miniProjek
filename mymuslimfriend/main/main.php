<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri+Quran&family=Amiri:ital,wght@0,400;0,700;1,400;1,700&family=Oleo+Script&display=swap" rel="stylesheet">
</head>
<body>
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
        <img src="../media/MyMuslimFirend.png" alt="">
        <div class="top">
            <div class="top-left">
                <p>Ramdan Countdown</p>
                <p><span id="ramadhan">244</span>  Days Left</p>
            </div>
            <div class="top-right">
                <div class="top-right-top">
                    <div class="top-right-top-left">
                        <p class="date" id="masihi">23/7/2024</p>
                    </div>
                    <div class="top-right-top-right">
                        <p id="hijri">|12 rabiuawal 140</p>
                        <p id="time">13.40</p>
                    </div>
                </div>
                <div class="islamic-modul">
                    <p id="modul-link"><a href="">Fiqh Learning Modul</a></p>
                    <p id="modul-link"><a href="">Aqidah Learning Modul</a></p>
                    <p id="modul-link"><a href="">Akhlak Learning Modul</a></p>
                </div>
            </div>
        </div>
        <center>
        <div class="mid">
            <p id="ayat"><b> وَمَن يُسْلِمْ وَجْهَهُۥٓ إِلَى ٱللَّهِ وَهُوَ مُحْسِنٌۭ فَقَدِ ٱسْتَمْسَكَ بِٱلْعُرْوَةِ ٱلْوُثْقَىٰ ۗ وَإِلَى ٱللَّهِ عَـٰقِبَةُ ٱلْأُمُورِ </b></p>
            <p id="translate">Whoever submits himself wholly to God, and is a doer of good, has grasped the most trustworthy handle. With God rests the outcome of all events.
            </p>
            <p id="location">ssss</p>
        </div>
        </center>
        <div class="mid-date">
            <div class="mid-date-top">
                <p style="font-size: 3rem; margin-left:200px;">TODAY DATE</p>
                <p style="font-size: 3rem; margin-left:100px;">|</p>
                <P style="font-size: 3rem; margin-left:100px;" id="hijriEvent">12 Rejab 1440</P>
            </div>
            <div class="mid-date-bottom">
                <center>
                <p id="event">Nothing Special</p>
                <p id="detail">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit nisi eos, itaque quae aspernatur molestias, reiciendis, laboriosam dignissimos excepturi vero incidunt! Libero, reiciendis inventore! Deleniti perspiciatis nihil aliquid quos ex?</p>
                </center>
            </div>
        </div>
        <center>
            <h1>Prayer Missing Tracker</h1>
        </center>
        <div class="bottom">
            <div class="bottom-table">
                <center>
                    <table>
                        <tr>
                            <th>
                                <p style="text-align: center;">No</p>
                            </th>
                            <th>
                                <p style="text-align: center;">Type Of Ibadah </p>
                            </th>
                            <th>
                                <p style="text-align: center;">Time </p>
                            </th>
                            <th>
                                <p style="text-align: center;">Date</p>
                            </th>
                            <th>
                                <p style="text-align: center;">Status</p>
                            </th>
                        </tr>
                        <?php
                        include('../config/config.php');
                        $id = $_SESSION['id'];
                        $list_sql = mysqli_query($con, "SELECT * FROM user WHERE id = $id");
                        while ($list = mysqli_fetch_array($list_sql)) {
                            if( $list['status_list'] == 1){
                                ?>
                                <tr>
                                    <td>
                                        <p style="text-align: center;">1</p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">
                                            <?php echo $list['act_of_worship'] ?>
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">
                                            <?php echo $list['time'] ?>
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">
                                            <?php echo $list['date'] ?>
                                        </p>
                                    </td>
                                    <td>
                                        <form action="../backend/submit_work_done.php" method="post">
                                            <input type="hidden" name="id_list" value="<?php echo $list['id_list'] ?>">
                                            <center>
                                            <button type="submit" name="done">Done</button>
                                            </center>
                                        </form>
                                    </td>
                                </tr>   
                            <?php
                            }
                        }
                        ?>
                    </table>
                </center>
            </div>
        </div>
        <center>
        <div class="bottom-button">
                <p> Be Honest With Yourself</p>
                <button><b><a href="add.php">Add Yours</a></b></button>
        </div>
        </center>
    </div>
</body>
<script src="../backend/calendar.js"></script>
<script src="../backend/ayat.js"></script>
</html>