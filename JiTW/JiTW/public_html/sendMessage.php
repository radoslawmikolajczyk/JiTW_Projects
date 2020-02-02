<?php
session_write_close();
file_put_contents('Wiadomosci', $_GET['text'].PHP_EOL , FILE_APPEND);
$handle = fopen('Wiadomosci', "r");
$lines = array();
while (($line = fgets($handle)) !== false) {
   array_push($lines, $line);
}
fclose($handle);
//jesli folder wiadomosci zawiera 20 wiadomosci, to najstarsza jest usuwana  a pozozstale sa update'owane
if(count($lines) > 20){
   $handle = fopen("Wiadomosci", "w");
   for($i = count($lines) - 20; $i < count($lines); $i++) {
      fwrite($handle, $lines[$i]);
   }
   fclose($handle);
}
?>
