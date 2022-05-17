<?php
require_once "config.php";

$query="INSERT INTO voto (codiceFiscale1, codiceFiscale2, codicePartito) VALUES (NULL, NULL, '".$_POST["partito"]."')";

if($_POST["cand1"] != "no" && $_POST["cand2"] != "no")
{
    $query="INSERT INTO voto (codiceFiscale1, codiceFiscale2, codicePartito) VALUES ('".$_POST["cand1"]."','".$_POST["cand2"]."','".$_POST["partito"]."')";
}
elseif($_POST["cand1"] != "no" && $_POST["cand2"] == "no"){
    $query="INSERT INTO voto (codiceFiscale1, codiceFiscale2, codicePartito) VALUES ('".$_POST["cand1"]."',NULL,'".$_POST["partito"]."')";
}
elseif($_POST["cand1"] == "no" && $_POST["cand2"] != "no"){
    $query="INSERT INTO voto (codiceFiscale1, codiceFiscale2, codicePartito) VALUES (NULL, '".$_POST["cand2"]."','".$_POST["partito"]."')";
}

$result = mysqli_query($conn, $query);

header("location: ../login.html");

mysqli_close($conn);
?>