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
              <li class="selezionato"><a  href="">FAQ</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <?php include("db.php"); ?>
    <main>
      <div id="wrapAll">
        <div  class="container">
           <?php foreach ($database as $k => $dato) { ?>
            <section class="domanda">
             <h2><?php echo $dato["domanda"]; ?></h2>
           </section>
            <section class="risposta">
              <p><?php echo $dato["risposta"]; ?></p>
           </section>
          <?php } ?>
        </div>
      </div>
    </main>
    <footer>
      <div id="wrapFooter">
        <div class="container">
          <nav id="navFooter">
            <ul>
              <li><a href="">Google</a></li>
              <li><a href="">About Google</a></li>
              <li><a href="">Privacy</a></li>
              <li><a href="">Terms</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </footer>

  </body>
</html>
