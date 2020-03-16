<?php
include "polacz.php";
$klasa = wczytaj("klasa");//wczytanie z tablicy _GET ze sprawdzeniem czy niepusty
if ($sql = $baza->prepare( "DELETE FROM uczniowie WHERE klasa = ?;" ))
{
 $sql->bind_param( "s", $klasa); 
 $sql->execute();
 $sql->close();
}
$baza->close();
header ("Location: http://localhost/tst/" );
?>