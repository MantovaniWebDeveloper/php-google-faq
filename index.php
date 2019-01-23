<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Faq privacy & terms</title>
  </head>
  <body>
    <?php
      /*BASE DATI*/
      $database = [
          "domande" => [
            "domanda" => "How are you implementing the recent Court of Justice of the European Union (CJEU) decision on the right to be forgotten?",
          ],
          [
            "domanda" => "How does Google protect my privacy and keep my information secure?",
          ],

          "risposte" => [
            "risposta" => "risposta 1",
          ],
          [
            "risposta" => "risposta 2",
          ],
        ] ;
        echo '<pre>';
        var_dump($database);
        echo '</pre>';

        echo "<br />";

        foreach ($database as $k => $dato) {
          echo $dato["domanda"];
          echo $dato["risposta"];
          echo "<br />";

        }
     ?>
     <h2>esisto</h2>
  </body>
</html>
