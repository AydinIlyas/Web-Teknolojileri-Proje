<!doctype html>
<html lang="tr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="../CSS/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Iletisim.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Navbars.css">

    <title>İletişim</title>
</head>

<body>
    <div id="menu-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">Web Sitem</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Ana Sayfa <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Hakkimda.html">Hakkımda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="EgitimBilgileri.html">Eğitim Bilgileri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Sehrim.html">Şehrim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Hobilerim.html">Hobilerim</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Diger
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="Login.html">Log In</a>
                            <a class="dropdown-item" href="Iletisim.html">İletişim</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div id="iletisim-form" class="container">


        <form name="iletisim" action="index.php" onsubmit="return validateForm()" method="post">
            <div id="form-eleman" class="container">
                <div class="baslik">
                    <h3>İletişim</h3>
                </div>
                <div class="block">
                    <label for="Ad">Ad:</label>
                    <?php
                    echo $_POST["ad"];
                    
                    ?>

                </div>
                <div class="block">
                    <label for="Soyad">Soyad:</label>

                    <?php
                    echo $_POST["soyad"];
                    
                    ?>
                </div>
                <div class="radios">
                    Cinsiyet:
                    <?php
                    echo $_POST['Cinsiyet']
                    ?>
                </div>

                <div class="block">
                    <label for="Yas">Yas:</label>
                    <?php
                    echo $_POST["yas"];
                    
                    ?>
                </div>
                <div class="block">
                    <label for="Email">Email:</label>
                    <?php
                    echo $_POST["email"];
                    
                    ?>
                </div>
                <div class="block">
                    <label for="Telefon">Telefon:</label>
                    <?php
                    echo $_POST["telefon"];
                    
                    ?>
                </div>
            </div>
            <div id="MesajBox">
                <label for="Mesaj">Mesaj:</label>
                <br>
                <?php
                    echo $_POST["mesaj"];
                    
                    ?>
            </div>


            <br>
            <?php
            if(isset($_POST['onay']) )
            {
            echo "Onaylandı";
            }
            else
            {
                echo"Reddedildi";

            }
                    
                    ?>

        </form>




    </div>





    <!-- Optional JavaScript -->
    <script src="../js/Iletisim.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>