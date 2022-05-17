<?php
    require_once "config.php";

    if(!isset($_POST["pin"]))//se non esiste pin allora esci
    {
        header("Location: login.html?error=direct access");
        die();
    }

    //chiediamo al database se il pin esiste:controlla se esiste una scheda elettorale con quel pin
    $userRequest = "SELECT pin FROM see";
    $userdata = mysqli_query($conn, $userRequest);
    $no = 1;

    while ($record = mysqli_fetch_assoc($userdata))
    {
        if($record["pin"] == $_POST["pin"])
        {
            $no = 0;
            header("location: ../index.php");
        }
    }

    if($no == 1)
    {
        header("location: ../login.html");
    }

    mysqli_free_result($result);

    mysqli_close($conn);

?>