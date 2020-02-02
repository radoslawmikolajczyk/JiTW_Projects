<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Wpis na Bloga</title>
  <meta http-equiv="Content-Type" content="application/xhtml+xml;
charset=UTF-8" />
<link rel="stylesheet" media="screen" href="style.css" type="text/css" title="Styl główny"/>
<link rel="alternate stylesheet" media="screen" href="alrestyle.css" type="text/css" title="Styl alternatywny"/>
<link rel="stylesheet" media="print" href="druk.css" type="text/css"/>
</head>
<body>
<div id="glowne">
<div id="Tytul">PROJEKT JiTW</div>
<div id="menu"><a> MENU</a></div>
<div id = "Spis_tresci">
<p>Odnośniki</p>
  <ul>
    <li><a href="/~mikorado/cwiczenie1.html">Ćwiczenie 1</a></li>
    <li><a href="/~mikorado/cwiczenie2.html">Ćwiczenie 2</a></li>
    <li><a href="/~mikorado/cwiczenie3.html">Ćwiczenie 3</a></li>
    <li><a href="/~mikorado/cwiczenie4.html">Ćwiczenie 4</a></li>
    <li><a href="/~mikorado/cwiczenia_switcher.php">Co to PHP?</a></li>
  </ul>
<?php include 'menu.php'; ?>
</div>
<div id = "Tresc">
<h1>PHP</h1>
<h2>Dodawanie wpisu do bloga</h2>
<form method="post" action="wpis.php" enctype="multipart/form-data">

    Podaj nazwę użytkownika:<br/> <input type="text" name="username" placeholder="nazwa użytkownika">
    <br/>Podaj hasło: <br/><input type="password" name="passwd"  placeholder="hasło">
    <br/><br/>Dodaj wpis:<br/><textarea name="message" placeholder="wpis" rows="15" cols="80"></textarea>
    <br/><br/>Data:<br/>
    <input type="text" name="date" value="<?php echo date('Y-m-d'); ?>"/><br/>
    Godzina:<br/>
    <input type="text" name="hour" value="<?php date_default_timezone_set("Poland"); echo date('G:i'); ?>"/><br/><br/>
    <h3>Chcesz przesłać jakieś pliki? (max. 3)</h3>
    <input type="file" name="plik1"/><br/>
    <input type="file" name="plik2"/><br/>
    <input type="file" name="plik3"/><br/>
    <br/><input type="submit" value="Dodaj" >
    <input type="reset" value="Wyczyść" name="clear" />
</form>

</div>
</div>
</body>
</html>


