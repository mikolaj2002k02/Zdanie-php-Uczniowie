<?php
include "polacz.php";
$klasa = wczytaj("klasa");
$imie = wczytaj("imie");
$nazwisko = wczytaj("nazwisko");
$link = wczytaj("link");
$data_i_godzina_oddania = wczytaj("data_i_godzina_oddania");

$sql = $baza->prepare("UPDATE uczniowie SET imie=?, nazwisko=?, link=?, data_i_godzina_oddania=? WHERE klasa=?;");
if ($sql)
{
        $sql->bind_param("ssssi",  $klasa, $imie, $nazwisko, $link, $data_i_godzina_oddania);
        $sql->execute();
        $sql->close();
}
  else die("Błąd SQL: ". $baza->error);
$baza->close();
header ("Location: http://localhost/tst/");
?>