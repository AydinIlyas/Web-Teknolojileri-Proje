<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css.map">
    <link rel="stylesheet" type="text/css" href="../CSS/AnaSayfa.css">
    <title>Ana Sayfa</title>
    

  </head>
  <body>

  
    <div id="menu-bar">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Web Sitem</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Ana Sayfa <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Hayatım</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="EgitimHayati.html">Eğitim Hayatım</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Sehrim.html">Şehrim</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Hobilerim</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Diger
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item"  href="Login.html">Log In</a>
                  <a class="dropdown-item"  href="Iletisim.html">İletişim</a>
                </div>
              </li>
          </ul>
        </div>
      </nav>
    </div>
    

    <?php

    $url = "https://api.openweathermap.org/data/2.5/weather?q=Ulm&appid=4aaf1645787f7421f3da78e26dcf4445";

    $contents = file_get_contents($url);
    $clima = json_decode($contents, true);
    echo $clima['main']['temp']-273,15;

    ?>
    <div class="footertest">
      <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-5 item">
                  Sakarya Üniversitesi Bilgisayar Mühendisliği Web Teknolojileri Proje Ödevi
                </div>
                <div class="col-sm-6 col-md-1 item">
                   <a href="https://www.instagram.com/ilyas.aydnn/"><img src="../Images/insta-icon.png" alt=""></a>

                </div>
                 
            </div>
        </div>
      </footer>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>