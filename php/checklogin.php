<?php
//$_POST["gender"];
//$_POST["pin"];
//$_POST["age"];

//check pin
//salvataggio dati 
//accesso alla pagina di voto
//avvio tramite javascript del savataggio del voto

if(!isset($_POST["pin"]))//se non esiste pin allora esci
{
    header("Location: login.html?error=direct access");
    die();
}

    //chiediamo al database se il pin esiste:controlla se esiste una scheda elettorale con quel pin
    $userRequest = "SELECT Indirizzo,Password,Admin,CodiceFiscale FROM `utente` WHERE Indirizzo like '" . $user . "';";
    $userdata = mysqli_query($conn, $userRequest);

if (!$userdata) //verifichiamo l'esito della query
{
    print_r(mysqli_error($conn));
}

    $userdata  = mysqli_fetch_array($userdata, MYSQLI_ASSOC);//i dati vengono estratti
//controlliamo se il database ha restituito qualcosa
if (gettype($userdata) === "NULL") //se non ha dato niente allora significa che non esiste
{
    header("Location: login.html?errore=email inesistente");//controllo se la see è gia compilata oppure no.
    die();
}



