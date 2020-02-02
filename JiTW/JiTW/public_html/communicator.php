<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Komunikator</title>
  <meta http-equiv="Content-Type" content="application/xhtml+xml;
charset=UTF-8" />
<link rel="stylesheet" media="screen" href="style.css" type="text/css" title="Styl główny"/>
<link rel="stylesheet" media="screen" href="style2.css" type="text/css" title="Styl blank"/>
<link rel="stylesheet" media="screen" href="alrestyle.css" type="text/css" title="Styl alternatywny"/>
<script type = "text/javascript" src = "mainScript.js" ></script>
</head>
<body onload= "onLoad(); onNewEntryLoad();">
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
<h1>JavaScript</h1>
<h2>Komunikator</h2>

<p>Aktywuj Czat!</p>
<input type="checkbox" id="communicatorActivator" onclick="activate(this)">
<p>Ostatnie wiadomości</p>
<textarea id="messagesContainer" cols="70" rows="10" readonly placeholder="Aby wyświetlić ostatnie wiadomości, aktywuj czat!"></textarea>
<p>Nazwa/Nick</p>
<input type="text" id="communicatorName" name="name" placeholder="Podaj swoją nazwę">
<p>Wiadomość</p>
<input size="50" type="text" id="communicatorMessage" name="msg" placeholder="Napisz wiadomość">
<button id="sendMessageButton" onclick="if(document.getElementById('communicatorActivator').checked){ sendMessage(); } else { alert('Aktywuj chat!'); } ">Wyślij</button> 

</div>
</div>
</body>
</html>

