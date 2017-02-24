 <?php
  $server = "discordler.ddns.net";
  $port = "80";
  $timeout = "10";
  if ($server and $port and $timeout) 
  {
  $serverstatus = @fsockopen("$server", $port, $timeout);
  }
  if($serverstatus) 
  {
  echo "Der Server ist Online";
  }
  else 
  {
  echo "Der Server ist Offline";
  }
  ?>
