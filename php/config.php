<?php
$conn = new mysqli("localhost", "root" , "", "elezionifinali");
if (!$conn) 
{
  echo"Connection failed: " . mysqli_connect_error();
}   
else
{
  echo"Connection succed: ";
}