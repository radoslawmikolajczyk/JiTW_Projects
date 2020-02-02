<?php
session_write_close();
header('Content-Type:text/plain');
if (!$_GET['update']) {
   exit(file_get_contents("Wiadomosci"));
}
$hash = md5_file('Wiadomosci');
while(true) {
   if ($hash != md5_file('Wiadomosci')) {
      exit(file_get_contents("Wiadomosci"));
   }
   usleep(500000);
}
?>
