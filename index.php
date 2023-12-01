<html>
<?php

require_once("dbwork.php");
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

  <form class="features" action="buchen.php" method="get">
    <div class="row align-middle">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <h5 class="py-2">Was möchsten Sie leihen?</h5>
        <select id="selected_boat" name="selected_boat" class="form-select" aria-label="Default select example">
          <option selected>Wählen Sie Ihren Bootstyp...</option>
          <option value="1">Kajak (1 Person)</option>
          <option value="2">Kajak (2 Personen)</option>
          <option value="3">Kanadier (2 Personen)</option>
          <option value="4">Kanadier (3 Personen)</option>
        </select>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <h5 class="py-2">Wieviele Boote?</h5>
        <label for="customRange2" class="form-label">1 bis 4</label>
        <input type="range" class="form-range" min="1" max="4" name="customRange2" id="customRange2">
      </div>
    </div>
    <div class="row align-middle">
      <div class="col-lg-4 col-md-4 col-sm-12">
        <h5 class="py-2">Ihr Wunsch-Leihzeitraum</h5>
      </div>
      <div class="d-flex flex-row align-items-center flex-wrap">
        <label for="date" class="col-2 col-form-label">Ab?</label>
        <div class="input-group date col-4" id="datepicker">
          <input type="text" class="form-control" name="date_from" id="date_from" />
          <span class="input-group-append">
            <span class="input-group-text bg-light d-block">
              <i class="fa fa-calendar"></i>
            </span>
          </span>
        </div>
        <label for="date" class="col-2 col-form-label">Bis?</label>
        <div class="input-group date col-4" id="datepicker">
          <input type="text" class="form-control" id="date_to" name="date_to"/>
          <span class="input-group-append">
            <span class="input-group-text bg-light d-block">
              <i class="fa fa-calendar"></i>
            </span>
          </span>
        </div>
          <input type="submit" class="btn btn-primary ">
      </div>
    </div>
  </form>
</body>
<script src="./bootstrap/js/bootstrap.min.js"></script>
<script src="./jquery-3.7.1.min.js"></script>
<script src="./bootstrap-datepicker.min.js"></script>
<script src="./kanu_inc.js"></script>

</html>