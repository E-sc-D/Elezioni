<?php 
include_once("./php/config.php"); 
//include_once("./php/checklogin.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./Javascripts/Fetch.js"></script>
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    

    <?php
        //esegui la query per predere i partiti e i candidati

        //for loop stampare le flip card


        //fai il voto//flipcard generate con il php dei partiti con opzione di votazione multipla e blocco di altre votazioni
        //premendo il tasto chiama la funzione call; controllando di aver riempito i dati a scopo statistico
        //che successivamente eseguirà la query
        for($i=0;$i<10;$i++)
        {
            echo '<div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="img_avatar.png" alt="Avatar" style="width:300px;height:300px;">
              </div>
              <div class="flip-card-back">
                <h1>John Doe</h1>
                <form>
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="fname">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lname">
              </form>
              </div>
            </div>
          </div>';
        }
    ?>
</body>
</html>