<html>
 <head>
  <meta charset="utf-8">
  <title>Zadanie</title>
  <script src='https://www.google.com/recaptcha/api.js'></script>
 </head>
 <body>
  <div ng-app="myApp" ng-controller="customersCtrl">
 </div>
 <h1>Zadanie uczen i nauczyciel</h1><br/><br/>
    <h2>Tabela Uczen</h2>
  <table border="1">
   <tr>
       <th>klasa</th><th>imie</th><th>nazwisko</th><th>link</th><th>data_i_godzina_oddania</th>
   </tr>
<?php
include "polacz.php";
if ($sql =  $baza->prepare("SELECT * FROM uczniowie ORDER BY klasa"))
{
        $sql->execute();
        $sql->bind_result($klasa, $imie, $nazwisko, $link, $data_i_godzina_oddania);
        while ($sql->fetch())
        {
                echo "<tr>
                        <td>$klasa</td>
                        <td>$imie</td>
                        <td>$nazwisko</td>
                        <td>$link</td>
                        <td>$data_i_godzina_oddania</td>
                        <td><a href=\"usun.php?klasa=$klasa\" onclick=\"javascript:return confirm('Czy na pewno usunąć?'); \">Usuń</a></td>
                   </tr>";
            
        }
        $sql->close();
 }
else die( "Błąd w zapytaniu SQL! Sprawdź kod SQL w PhpMyAdmin." );

 $baza->close();
?>
  </table>
  <a href="dodaj.php">Dodawanie nowego</a>
   <div class="g-recaptcha" data-sitekey="6Ld-KuIUAAAAAOiU1KuT9i7b1M7W_TzBTBluiEa1"></div>
 </body>
</html>
