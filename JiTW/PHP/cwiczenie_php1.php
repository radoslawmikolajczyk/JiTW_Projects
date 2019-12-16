<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Utwórz BLOG</title>
  <meta http-equiv="Content-Type" content="application/xhtml+xml;
charset=UTF-8" />
<link rel="stylesheet" media="screen" href="style.css" type="text/css" title="Styl główny"/>
<link rel="alternate stylesheet" media="screen" href="alrestyle.css" type="text/css" title="Styl altern$
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
<h2>Zakładanie bloga</h2>
<form method="post" action="nowy.php">
    <input type="text" name="blogname"placeholder="nazwa bloga">
    <br/><input type="text" name="username" placeholder="nazwa użytkownika">
    <br/><input type="password" name="passwd"  placeholder="hasło">
    <br/><textarea name="message" placeholder="opis bloga" rows="8" cols="31"></textarea>
    <br/><input type="submit" value="Utwórz" >
    <input type="reset" value="Wyczyść"/>
</form>

</div>
</div>
</body>
</html>

