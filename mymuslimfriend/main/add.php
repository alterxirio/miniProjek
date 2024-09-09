<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="add.css">
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
<div class="main">
    <div class="top-add">
        <h1>Prayer Missing Tracker</h1>
        <br>
        <p>helps users easily log and monitor any missed Salah, ensuring they can stay on top of their spiritual obligations and make up for missed prayers.
        </p>
    </div>
    <!-- <div class="top-add-p">
        <p>It's okay, let's do our best to fulfill our duties as Muslims.  May Allah forgive you</p>
    </div> -->
    <div class="form-div">
        <div class="body-form">
            <form action="../backend/submit_work.php" method="post">
            <div class="form">
                <p>Type Of Ibadah</p>
                <select name="Type_Of_Ibadah" id="">
                    <option value="salah">Salah</option>
                    <option value="fast">Fasting</option>
                    <option value="zakat">Zakat</option>
                </select>
            </div>
            <div class="form">
                <p>Time</p>
                <select name="time" id="">
                    <option value="fajr">Fajr</option>
                    <option value="dhuhr">Dhuhr</option>
                    <option value="asr">Asr</option>
                    <option value="maghrib">Maghrib</option>
                    <option value="isha">Isha</option>
                    <option value="--">-- (for fasting)</option>

                </select>   
            </div>
            <div class="form bottom" >
                <p>Date</p>
                <input type="date" name="date">
                <button name="hantar" type="submit">SUBMIT</button>
            </div>
            </form>
        </div>
    </div>
</div>  
</body>
</html>