<!doctype html>
<html lang="tr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../CSS/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
      #error
      {
        margin-left:30px;
      }

    </style>

  </head>
  <body>
    
      <?php
      $user=$_POST['email'];
      $password=$_POST['password'];
      if(isset($user)&&isset($password))
        {if($user=="b211210101@gmail.com"&&$password=="abcdefg1")
        {
                echo '<div class="alert alert-success" role="alert">
                Hosgeldiniz b211210101.<a href="AnaSayfa.html">Home</a>
                </div>';
        }
        else
        {
            $message="Log in failed. Please try again.";
            echo '<div class="alert alert-danger" role="alert">
            '.$message.'<br>
            <a href="Login.html">Log in</a>
            <a href="AnaSayfa.html">Home</a>
            </div>';
            header("refresh:3;url=../HTML/Login.html");
            
        }
        }
        

?>
 <?php

//$url = "https://api.openweathermap.org/data/2.5/weather?q=Ulm&appid=4aaf1645787f7421f3da78e26dcf4445";

//$contents = file_get_contents($url);
//$clima = json_decode($contents, true);
//echo $clima['main']['temp']-273,15;

?>

    <!-- Optional JavaScript -->





    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>