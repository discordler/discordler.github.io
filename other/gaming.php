<!DOCTYPE html> <html lang="de"> <head>
  <meta http-equiv="refresh" content="60; URL=gaming.php">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="description" content="None">
  <meta name="keywords" content="Discordler, Team, Games, Gmod, Discord">
  <meta name="author" content="Discordler">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Gaming Screen - Discordler</title>
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
        <h2 class="header center teal-text text-lighten-2">Unsere Gaming Seite</h2>
        <div class="row center">
          <h5 class="header col s12 light">Lass diese Seite einfach auf deinem 2. Screen geöffnet für die wichtigsten Infos. <br>Oder schau einfach welche Server online sind!</h5>
        </div>
        <div class="row center">
            <a href="http://discordler.ddns.net/ogp/" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Serververwaltung!</a>
        </div>
        <br><br>
      </div>
    </div>
    <div class="parallax"><img src="../pic/discord.png" alt="Our own Discord"></div>
  </div>

  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
			<p class="left-align light"><b>Sind unsere Gaming Server online?</b><br>
<?php
$URL = 'discordler.ddns.net';
$ping = @fsockopen ($URL, 80, $errno, $errstr, 10);
(!$ping) ? $status = '<span style="color:#C71585;">Discordler WebServer läuft NICHT! ' : $status = '<span style="color:#7FFF00;">Discordler WebServer läuft!</span>';

echo $status.'<br>';

$ping = @fsockopen ($URL, 27015, $errno, $errstr, 10);
(!$ping) ? $status = '<span style="color:#C71585;">Gmod TTT läuft NICHT! ' : $status = '<span style="color:#7FFF00;">Gmod TTT läuft!</span>';

echo $status.'<br>';

$ping = @fsockopen ($URL, 27016, $errno, $errstr, 10);
(!$ping) ? $status = '<span style="color:#C71585;">Gmod Prop Hunt läuft NICHT! ' : $status = '<span style="color:#7FFF00;">Gmod Prop Hunt läuft!</span>';

echo $status.'<br>';

$ping = @fsockopen ($URL, 27017, $errno, $errstr, 10);
(!$ping) ? $status = '<span style="color:#C71585;">Gmod Deathrun läuft NICHT! ' : $status = '<span style="color:#7FFF00;">Gmod Deathrun läuft!</span>';

echo $status.'<br>';

$ping = @fsockopen ($URL, 27018, $errno, $errstr, 10);
(!$ping) ? $status = '<span style="color:#C71585;">Gmod Hunger Games läuft NICHT! ' : $status = '<span style="color:#7FFF00;">Gmod Hunger Games läuft!</span>';

echo $status.'<br>';

$ping = @fsockopen ($URL, 27019, $errno, $errstr, 10);
(!$ping) ? $status = '<span style="color:#C71585;">Gmod Murder läuft NICHT! ' : $status = '<span style="color:#7FFF00;">Gmod Murder läuft!</span>';

echo $status.'<br>';

$ping = @fsockopen ($URL, 27020, $errno, $errstr, 10);
(!$ping) ? $status = '<span style="color:#C71585;">Gmod Guess Who läuft NICHT! ' : $status = '<span style="color:#7FFF00;">Gmod Guess Who läuft!</span>';

echo $status.'<br>';


$ping = @fsockopen ($URL, 28016, $errno, $errstr, 10);
(!$ping) ? $status = '<span style="color:#C71585;">CoD: MW3 läuft NICHT! ' : $status = '<span style="color:#7FFF00;">CoD: MW3 läuft!</span>';

echo $status;

echo "<br>";
?>
<p class="left-align light"><b>Server Internet Geschwindigkeit (live):</b><br>
<?php
//Speedtest
$times = Array(microtime(true));
$f = fsockopen("google.com",80);
$times[] = microtime(true);
$data = "POST / HTTP/1.0\r\n"
       ."Host: google.com\r\n"
       ."\r\n"
       .str_repeat("a",1000000); // send one megabyte of data
$sent = strlen($data);
fputs($f,$data);
$firstpacket = true;
$return = 0;
while(!feof($f)) {
    $return += strlen(fgets($f));
    if( $firstpacket) {
        $firstpacket = false;
        $times[] = microtime(true);
    }
}
$times[] = microtime(true);
fclose($f);
echo "Ping: ".(($times[1]-$times[0])*1000)."ms\n . <br>"
    ."Upload: ".($sent/($times[2]-$times[1])/1024)."kb/s\n . <br>"
    ."Download: ".($return/($times[3]-$times[2])/1024)."kb/s\n . <br>";
?>
<span style="color:#000000;">
			<br>
			Diese Seite wird automatisch in <b><span id="countdowntimer">60 </span> Sekunden aktualisiert!
		</div>
      </div>
    </div>
  </div>
</span>

  <!-- Countdown Timer-->
  <script type="text/javascript">
    var timeleft = 60;
    var downloadTimer = setInterval(function(){
    timeleft--;
    document.getElementById("countdowntimer").textContent = timeleft;
    if(timeleft <= 0)
        clearInterval(downloadTimer);
    },1000);
  </script>
  
<!-- FAB - Floating Action Button (Icons hier: http://materializecss.com/icons.html) -->
	
	<div class="fixed-action-btn vertical">
    <a class="btn-floating btn-large green">
      <i class="large material-icons">menu</i>
    </a>
    <ul>
      <li><a class="btn-floating red" href="http://discordler.ddns.net/ogp" target="_blank"><i class="material-icons">vpn_key</i></a></li>
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
            <li><a class="white-text" href="http://steamcommunity.com/id/Flokg">Flo //Moderator</a></li>
            <li><a class="white-text" href="http://steamcommunity.com/id/Blue_Skywolf">Fabio //Moderator</a></li>
	        <li><a class="white-text" href="http://steamcommunity.com/id/Issava">Nessie //Moderator</a></li>
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