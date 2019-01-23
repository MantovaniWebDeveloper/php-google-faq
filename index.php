<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Faq privacy & terms</title>
  </head>
  <body>
    <header>
      <div id="topHeader">
        <div class="wrapLogo">
          <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_74x24dp.png" alt="">
        </div>
      </div>
      <div id="subHeader">

      </div>
    </header>
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
