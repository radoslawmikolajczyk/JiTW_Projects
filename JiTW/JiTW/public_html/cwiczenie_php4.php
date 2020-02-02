<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Przeglądaj blogi</title>
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
<h2>Przeglądanie dostępnych blogów</h2>
<?php include 'blog.php'; ?>
</div>
</div>
</body>
</html>

