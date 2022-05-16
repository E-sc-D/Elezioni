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
    <link rel="stylesheet" href="/css/index.css">
</head>
<body>
    

    <?php
        //esegui la query per predere i partiti e i candidati
        $query= "select count(partitopolitico.nome)
                 From partitopolitico";

        //attraverso il for loop verranno stampate diverse flip card contenenti dei form, una volta compilato un form
        //premendo il tasto il form chiama il php per eseguire la query !(pensavo di usare ajax "fetch.js" ma cosi elimina la possibilità di votazioni multiple)
        for($i=0;$i<10;$i++)
        {
 ?>          
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                   <img src="img_avatar.png" alt="Avatar" style="width:300px;height:300px;">
                </div>
                <div class="flip-card-back">
                   <h1>John Doe</h1>
                   <form class="electionform">
                      <label for="fname">First Name</label>
                      <input type="text" id="fname" name="fname">
                      <label for="lname">Last Name</label>
                      <input type="text" id="lname" name="lname">
                   </form>
              </div>
            </div>
          </div>
<?php
        }
    ?>
</body>
</html>