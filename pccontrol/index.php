<!DOCTYPE html> <html lang="de"> <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="description" content="None">
  <meta name="keywords" content="Discordler, Team, Games, Gmod, Discord">
  <meta name="author" content="Discordler">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Discordler</title>
  <link rel="icon" type="image/png" href="../pic/ico.png" sizes="32x32">
  <!-- CSS -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/> 
  
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-92662613-2', 'auto');
  ga('send', 'pageview');

</script>

  </head>
  <body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="../" class="brand-logo"><b>Discord</b>ler</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="http://steamcommunity.com/groups/discordler" target="_blank">Steam Gruppe</a></li>
        <li><a href="../de/gmod">Gmod</a></li>
  <li><a href="../en/app" target="_blank">Official Discordler App</a></li>
        <li><a href="http://www.teamspeak.com/invite/www.teamspeak.dev-it.de/" target="_blank">TS3</a></li>
    <li><a href="news" target="_blank">News & Videos</a></li>
  <li><a href="../en" target="_blank">English</a></li>
      </ul>
      <ul id="nav-mobile" class="side-nav">
  <li><a href="http://steamcommunity.com/groups/discordler" target="_blank">Steam Gruppe</a></li>
        <li><a href="../de/gmod">Gmod</a></li>
  <li><a href="../en/app" target="_blank">Official Discordler App</a></li>
        <li><a href="http://www.teamspeak.com/invite/www.teamspeak.dev-it.de/" target="_blank">TS3</a></li>
        <li><a href="../de/news" target="_blank">News & Videos</a></li>
  <li><a href="../en" target="_blank">English</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h2 class="header center teal-text text-lighten-2">Server Verwaltung</h2>
        <div class="row center">
          <h5 class="header col s12 light">Herunterfahren/Neustarten und mehr!</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="../pic/discord.png" alt="Our own Discord"></div>
  </div>

  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
      <p class="left-align light"><b>Herunterfahren / Neu starten </b><br>
      Verwende diese Funktionen mit Vorsicht!<br>
      <?php
      echo '<form action="shutdown.php" method="post" accept-charset="utf-8">';
      echo '<fieldset><legend>PC herunterfahren</legend>';
      echo '<p><label for="username">Gib deinen Namen an: </label><input type="text" name="username" required></textarea></p>';
      echo '<p><input class="btn-filled input-btn-filled" type="submit" value="Herunterfahren"></p>';
      echo '<input type="hidden" name="product_type" value="actual_product_type" id="product_type">';
      echo '<input type="hidden" name="product_id" value="actual_product_id" id="product_id">';
      echo '</fieldset>';
      echo '</form>';
      echo '<br>';

      echo '<form action="reboot.php" method="post" accept-charset="utf-8">';
      echo '<fieldset><legend>PC neustarten</legend>';
      echo '<p><label for="username">Gib deinen Namen an: </label><input type="text" name="username" required></textarea></p>';
      echo '<p><input class="btn-filled input-btn-filled" type="submit" value="Neustarten"></p>';
      echo '<input type="hidden" name="product_type" value="actual_product_type" id="product_type">';
      echo '<input type="hidden" name="product_id" value="actual_product_id" id="product_id">';
      echo '</fieldset>';
      echo '</form>';
      echo '<br>';

      echo '<form action="winvm_start.php" method="post" accept-charset="utf-8">';
      echo '<fieldset><legend>Starte Windows VM (mit z.B. MW3 Server)</legend>';
      echo '<p><label for="username">Gib deinen Namen an: </label><input type="text" name="username" required></textarea></p>';
      echo '<p><input class="btn-filled input-btn-filled" type="submit" value="VM starten"></p>';
      echo '<input type="hidden" name="product_type" value="actual_product_type" id="product_type">';
      echo '<input type="hidden" name="product_id" value="actual_product_id" id="product_id">';
      echo '</fieldset>';
      echo '</form>';
      echo '<br>';

      echo '<form action="winvm_stop.php" method="post" accept-charset="utf-8">';
      echo '<fieldset><legend>Stoppe Windows VM (inkl. MW3 Server)</legend>';
      echo '<p><label for="username">Gib deinen Namen an: </label><input type="text" name="username" required></textarea></p>';
      echo '<p><input class="btn-filled input-btn-filled" type="submit" value="VM stoppen"></p>';
      echo '<input type="hidden" name="product_type" value="actual_product_type" id="product_type">';
      echo '<input type="hidden" name="product_id" value="actual_product_id" id="product_id">';
      echo '</fieldset>';
      echo '</form>';
      echo '<br>';
      ?>
      <!-- <a href="shutdown.php">Herunterfahren</a><br><br>
      <a href="reboot.php">Neu starten</a><br><br> -->
    </div>
      </div>
    </div>
  </div>

<!-- FAB - Floating Action Button (Icons hier: http://materializecss.com/icons.html) -->
  
  <div class="fixed-action-btn vertical">
    <a class="btn-floating btn-large green">
      <i class="large material-icons">menu</i>
    </a>
    <ul>
      <li><a class="btn-floating red" href="https://discordler.github.io/other/ogp" target="_blank"><i class="material-icons">vpn_key</i></a></li>
      <li><a class="btn-floating blue" href="https://docs.google.com/spreadsheets/d/1hYTq29chm3ioWQWCp_3fM9pMRxb7wbGZL1xMBm7r3kE/edit?usp=sharing" target="_blank"><i class="material-icons">info_outline</i></a></li>
      <li><a class="btn-floating green" href="https://github.com/discordler/discordler.github.io/issues"><i class="material-icons">report_problem</i></a></li>
      <li><a class="btn-floating yellow darken-1" href="../en" target="_blank"><i class="material-icons">description</i></a></li>
    </ul>
  </div>

  <!-- Footer -->
  
  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
           <h5 class="white-text">Vielen Dank</h5>
           <p class="grey-text text-lighten-4">Besten Dank geht an den Luis der Rust und Gmod Server aufgesetzt hat und sehr viel Zeit damit verbracht hat.</p>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Admins</h5>
          <ul>
            <li><a class="white-text" href="http://steamcommunity.com/id/kai_2703">Kai //Admin</a></li>
          <li><a class="white-text" href="http://steamcommunity.com/id/DerBilaJoe">Luis //Admin</a></li>
            <li><a class="white-text" href="http://steamcommunity.com/id/FaserF">Fabian //Admin</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Moderatoren</h5>
          <ul>
            <li><a class="white-text" href="http://steamcommunity.com/id/astertz">Adrian //Moderator</a></li>
            <li><a class="white-text" href="http://steamcommunity.com/id/Blue_Skywolf">Fabio //Moderator</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
          Erstellt von einem <b>Discord</b>ler
      </div>
    </div>
    <div class="footer-copyright text-center">
      <div class="container text-center">
        <a class="white-text text-left" href="../impressum">Impressum</a> | 
        <a class="white-text text-center" href="https://github.com/discordler/discordler.github.io">GitHub</a> | 
  <a class="white-text text-right" href="../en/admin" target="_blank">Admin</a> | 
  <a class="white-text text-right" href="../other/amy" target="_blank">Amy</a> 
      </div>
    </div>
  </footer>
  <!-- Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>
  </body> </html>
