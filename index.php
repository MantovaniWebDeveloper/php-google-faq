<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Faq privacy & terms</title>
  </head>
  <body>
    <?php include("db.php"); ?>
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
