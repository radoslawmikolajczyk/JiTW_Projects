<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Dodaj komentarz</title>
  <meta http-equiv="Content-Type" content="application/xhtml+xml;
charset=UTF-8" />
<link rel="stylesheet" media="screen" href="style.css" type="text/css" title="Styl główny"/>
<link rel="stylesheet" media="screen" href="style2.css" type="text/css" title="Styl blank"/>
<link rel="stylesheet" media="screen" href="alrestyle.css" type="text/css" title="Styl alternatywny"/>

<script type="text/javascript" src="mainScript.js"></script>

</head>
<body onload="onLoad(); onNewEntryLoad();">

<div id="glowne">
<div id="Tytul">PROJEKT JiTW</div>
<div id="menu"><a> MENU</a></div>
<div id = "Spis_tresci">
<p>Odnośniki</p>
  <ul>
    <li><a href="/~mikorado/cwiczenie1.php">Ćwiczenie 1</a></li>
    <li><a href="/~mikorado/cwiczenie2.php">Ćwiczenie 2</a></li>
    <li><a href="/~mikorado/cwiczenie3.php">Ćwiczenie 3</a></li>
    <li><a href="/~mikorado/cwiczenie4.php">Ćwiczenie 4</a></li>
    <li><a href="/~mikorado/cwiczenia_switcher.php">Co to PHP i JS?</a></li>
  </ul>
<?php include 'menu.php'; ?>
</div>
<div id = "Tresc">
<h1>PHP</h1>
<h2>Komentarz do bloga</h2>
<form method="POST" action="koment.php" enctype="multipart/form-data">
Wybierz blog oraz wpis:
<select name="choose">
<?php
$dir = new RecursiveDirectoryIterator('.');
$iter = new RecursiveIteratorIterator($dir);
foreach ($iter as $file) {
	if (!($file->isDir())) {
		if (preg_match("/\d{16}$/",$file)) {
	        	echo "<option>".$file."</option>";
		}
	}
}
?>
</select><br/><br/>
Podaj swoją nazwę/nick:
<br/><input type="text" name="pseudonim" placeholder="nazwa">
<br/><br/>Ocena:
<select name="comment_type">
	<option>Pozytywny</option>
	<option>Neutralny</option>
	<option>Negatywny</option>
</select>
<br/><br/>Komentarz:
<br/><textarea name="content" placeholder="komentarz" rows="8" cols="36"></textarea>
<br/><input type="submit" value="Dodaj komentarz" >
<input type="reset" value="Wyczyść"/>
</form>

</div>
</div>
</body>
</html>

