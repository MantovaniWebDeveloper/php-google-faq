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
          "faq" => [
                    "domanda" => "How are you implementing the recent Court of Justice of the European Union (CJEU) decision on the right to be forgotten?",
                    "risposta" => "risposta1",
                  ],
                  [
                  "domanda" => "How does Google protect my privacy and keep my information secure?",
                  "risposta" => "risposta2",
                  ],
                  [
                  "domanda" => "How can I remove information about myself from Google's search results?",
                  "risposta" => "risposta3",
                  ],
        ];
        echo '<pre>';
        var_dump($database);
        echo '</pre>';

        echo "<br />";
     ?>
     <div class="container">
        <?php foreach ($database as $k => $dato) { ?>
         <div class="domanda">
          <?php echo $dato["domanda"]; ?>
         </div>
         <div class="risposta">
          <?php echo $dato["risposta"]; ?>
         </div>
       <?php } ?>
     </div>
  </body>
</html>
