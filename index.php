<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <title>Faq privacy & terms</title>
  </head>
  <body>
    <header>
      <div class="container-large">
        <div id="topHeader">
          <div class="wrapLogo">
            <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_74x24dp.png" alt="logo-google"/>
          </div>
          <div class="wrapLogoPrivacy">
            <h2>Privacy & Terms</h2>
          </div>
        </div>
        <div id="subHeader">
          <nav class="wrapNav">
            <ul class="nav">
              <li><a href="">Overview</a></li>
              <li><a href="">Privacy Policy</a></li>
              <li><a href="">Terms of Service</a></li>
              <li><a href="">Technologies</a></li>
              <li><a href="">FAQ</a></li>
            </ul>
          </nav>
        </div>
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
