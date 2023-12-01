<html>
<?php

require_once("dbwork.php");

$test = $_GET['selected_boat'];
?>

<head>
    <title> Kontaktformular Bootsmiete </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel='stylesheet' href='./bootstrap-datepicker.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="kanu_inc.css" type="text/css" />
</head>
<body class="overlay">
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="./images/HWS-Kanu.png" alt="..." height="36"></a>
        <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#main-navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a id="boats" class="nav-link" href="#">Unsere Boote</a>
                </li>
                <li class="nav-item">
                    <a id="tours" class="nav-link" href="#">Tourenangebote</a>
                </li>
                <li class="nav-item">
                    <a id="event" class="nav-link" href="#">Events</a>
                </li>
                <li class="nav-item">
                    <a id="about" class="nav-link" href="#">Über uns</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <div class="row">
        <h5 class="py-2">Ihre Daten</h5>
    </div>
    <div class="row">
        <div class="col-4">
            <h5 class="py-2">Vorname</h5>
            <input type="text" id="info1" class="form-control info" placeholder="Vorname">
        </div>
        <div class="col-4">
            <h5 class="py-2">Nachname</h5>
            <input type="text" id="info2" class="form-control info" placeholder="Nachname">
        </div>
        <div class="col-4">
            <h5 class="py-2">Straße/HNr</h5>
            <input type="text" id="info3" class="form-control info" placeholder="Straße Hausnummer">
        </div>
        <div class="col-4">
            <h5 class="py-2">PLZ</h5>
            <input type="text" id="info3" class="form-control info" placeholder="PLZ">
        </div>
        <div class="col-4">
            <h5 class="py-2">Ort</h5>
            <input type="text" id="info3" class="form-control info" placeholder="Ort">
        </div>
    </div>
    <button type="submit" class="btn btn-primary" onclick="window.location.href='localhost/index.php';" >Abschicken</button>
</body>
<script src="./bootstrap/js/bootstrap.min.js"></script>
<script src="./jquery-3.7.1.min.js"></script>
<script src="./bootstrap-datepicker.min.js"></script>
<script src="./kanu_inc.js"></script>

</html>
