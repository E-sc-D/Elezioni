<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./Javascripts/Fetch.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&display=swap" rel="stylesheet">
    <title>Elezioni</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    
  <?php 
    require_once "php/config.php";
    require_once"php/checklogin.php"; 
  ?>

  <?php
    //esegui la query per predere i partiti e i candidati
    $query= "select * from partitopolitico";
    $result = mysqli_query($conn, $query);

    while ($record = mysqli_fetch_assoc($result))
    {



      //attraverso il for loop verranno stampate diverse flip card contenenti dei form, una volta compilato un form
      //premendo il tasto il form chiama il php per eseguire la query !(pensavo di usare ajax "fetch.js" ma cosi elimina la possibilità di votazioni multiple)
 ?>          
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
           <img src="img/logo2.jpg" style="width:300px;height:300px;border-radius:50%;object-fit:cover;margin-top:30px;">
        </div>
        <div class="flip-card-back">
           <h1 style="font-size:30px;margin-top:10px;"><?php echo $record["nome"];?></h1>
           <form class="electionform" action="php/SaveVote.php" method="post">
              <label for="fname">Prima preferenza</label><br>
              <select name='cand1'>
              <option value='no' selected></option>

              <?php
                $query= "select Nome, Cognome, CodiceFiscale from candidati where codicePartito= ".$record["codicePartito"]."";
                $result2 = mysqli_query($conn, $query);

                while ($record2 = mysqli_fetch_assoc($result2))
                {
                  echo "<option value='".$record2["CodiceFiscale"]."'>".$record2["Nome"]." ".$record2["Cognome"]."</option>";
                }
              ?>
              </select><br>

            
              <label for="lname">Seconda preferenza</label><br>
              <select name='cand2'>
              <option value='no' selected></option>

              <?php
                
                $query= "select Nome, Cognome, CodiceFiscale from candidati where codicePartito= ".$record["codicePartito"]."";
                $result2 = mysqli_query($conn, $query);

                while ($record2 = mysqli_fetch_assoc($result2))
                {
                  echo "<option value='".$record2["CodiceFiscale"]."'>".$record2["Nome"]." ".$record2["Cognome"]."</option>";
                }
              ?>
              </select><br>
              <?php echo "<input type='text' value='".$record["codicePartito"]."' name='partito' style='display:none;'>"; ?>
              <button>Vota</button>
           </form>
      </div>
    </div>
    </div>
<?php
    }

    mysqli_free_result($result);

    mysqli_close($conn);
    ?>
</body>
</html>