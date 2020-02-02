<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Tytuł 3</title>
  <meta http-equiv="Content-Type" content="application/xhtml+xml;
charset=UTF-8" />
<link rel="stylesheet" media="screen" href="style.css" type="text/css" title="Styl główny"/>
<link rel="stylesheet" media="print" href="druk.css" type="text/css" title="Styl blank"/>
<link rel="alternate stylesheet" media="screen" href="alrestyle.css" type="text/css" title="Styl alternatywny"/>
<script type = "text/javascript" src = "mainScript.js" ></script>
</head>
<body onload="onLoad(); onNewEntryLoad();">
<div id="glowne">
<div id="Tytul">PROJEKT JiTW</div>
<div id="menu"><a>MENU</a></div>
<div id="Spis_tresci">
<p>Odnośniki</p>
  <ul>
    <li><a href="/~mikorado/cwiczenie1.php">Ćwiczenie 1</a></li>
    <li><a href="/~mikorado/cwiczenie2.php">Ćwiczenie 2</a></li>
    <li><a href="/~mikorado/cwiczenie4.php">Ćwiczenie 4</a></li>
    <li><a href="/~mikorado/cwiczenia_switcher.php">Ćwiczenia z PHP i JS</a></li> 
 </ul>
<p>Sekcje strony</p>
<ul>
	<li><a href="#Tabela">Tabela</a></li>
	<li><a href="#Lista">Wielopoziomowa lista</a></li>
	<li><a href="#Definicje">Definicje</a></li>
</ul>
<?php include 'menu.php'; ?>

</div>
<div id="Tresc">
<a name = "Tabela"></a>
<h2>Tabela</h2>
<table border="2">
  <thead>
    <tr>
      <th>Nagłowek 1</th> <th>Nagłówek 2</th> <th>Nagłówek 3</th> <th>Nagłówek 4</th> <th>Nagłówek 5</th>
    </tr>
  </thead>
  <tfoot>
  <tr>
    <td colspan="5">Komorka foot</td>
  </tr>
  </tfoot>
  <tbody>
    <tr>
      <td colspan="2">Komórka scalona w poziomie</td><td id = "firstcol" rowspan="3">Komórka 3</td> <td class = "seccol" >Komórka 4.1</td> <td class = "seccol" >Komórka 5.1</td>
    </tr>
    <tr>
      <td>Komórka 1.2 </td> <td>Komórka 2.2</td> <td class = "seccol" rowspan="2" colspan="2">Komórka 4 - 5</td>
    </tr>
    <tr>
      <td>Komórka 1.3</td> <td>Komórka 2.3</td>
    </tr>
  </tbody>
</table>
<a name = "Lista"></a>
<h2>Wielopoziomowa lista</h2>
<ol>
  <li>Element</li>
  <li>Element</li>
  <li>Element
    <ul>
      <li>drugi poziom</li>
      <li>drugi poziom</li>
    </ul>
  </li>
  <li>Element
    <ul>
      <li>Numeracja drugiego poziomu</li>
      <li>Numeracja drugiego poziomu
        <ul>
          <li>Trzeci</li>
          <li>Trzeci</li>
        </ul>
      </li>
      <li>Numeracja drugiego poziomu</li>
    </ul>
  </li>
  <li>...</li>
</ol>
<a name = "Definicje"></a>
<h2>Definicje</h2>
<p>1.<dfn>XHTML</dfn> - język służący do tworzenia stron WWW ogólnego przeznaczenia. Specyfikacje XHTML przygotowuje organizacja W3C. </p>
<p>2.<dfn>informatyka</dfn> - gałąź nauki i techniki zajmująca się teorią i technologią przetwarzania informacji</p>
<p>3.<dfn>oprogramowanie</dfn> - całość informacji w postaci zestawu instrukcji, zaimplementowanych interfejsów i zintegrowanych danych przeznaczonych dla komputera do realizacji wyznaczonych celów</p>
<div id="validator">
<p>
  <a href="http://validator.w3.org/check?uri=referer"><img
    src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
</a>

<a href="http://jigsaw.w3.org/css-validator/check/referer">
    <img style="border:0;width:88px;height:31px"
        src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
        alt="Poprawny CSS!" />
    </a>
</p>
</div>
</div>
</div>
</body>
</html>

