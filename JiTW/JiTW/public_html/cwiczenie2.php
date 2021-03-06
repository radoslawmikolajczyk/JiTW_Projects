<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Tytuł 2</title>
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
<li><a href="/~mikorado/cwiczenie3.php">Ćwiczenie 3</a></li>
<li><a href="/~mikorado/cwiczenie4.php">Ćwiczenie 4</a></li>
<li><a href="/~mikorado/cwiczenia_switcher.php">Ćwiczenia z PHP i JS</a></li>
</ul>

<p>Sekcje strony</p>
<ul>	
	<li><a href="#Teksty">Teksty i kody</a></li>
	<li><a href="#Wzor">Wzór</a></li>
	<li><a href="#Odpowiedzi">Odpowiedzi</a></li>
</ul>
<?php include 'menu.php'; ?>
</div>
<div id="Tresc">
<h1>Nagłówek</h1>
<a name = "Teksty"></a>
<p><em>Tekst pisany kursywą. (em)</em></p>
<p><i>Drugi sposób pisania kursywą. (i)</i><br/></p>
<p><b>Tekst pisany pogrubieniem. (b)</b></p>
<p><strong>Drugi sposób na pogrubienie tekstu. (strong)</strong><br/></p>
<p>Fragmenty kodu (code): <br/>
<code>public class Hello {
    public static void main(String[] args){
        System.out.print("Hello World");
    }
} </code></p>
<p>Drugi sposób (samp) </p>
<pre><samp>public class Hello {
    public static void main(String[] args){
        System.out.print("Hello World");
    }
}</samp></pre>
<p><br/></p>
<a name = "Wzor"></a>
<p>Prosty wzór matematyczny z indeksami górnym i dolnym oraz znakami "mniejsze lub większe od" : </p>

 x<sub>1</sub>&gt;b<sup>2</sup>-4ac&lt;&infin;<br/>

<h2>Odpowiedzi na pytania z ćwiczenia 2: </h2>
<a name = "Odpowiedzi"></a>
<p>1. "em" używa się, żeby coś zaakcentować podkreślić. Emfaza jest stanem logicznym - może być używana jako kursywa, ale też na przykład jako czerwony, podkreślony tekst. Znacznik "i" reprezentuje stan fizyczny - jest po prostu pochylonym tekstem. Znacznik "em" może być nadpisywany w CSS.</p>

<p>2. "b" wyraża tylko pogrubienie tekstu, natomiast "strong" stosuje się, by podkreślić znaczenie danego słowa czy zdania. Może mieć różną formę wizualną, można go nadpisać w CSS. </p>
<p>3. "code" stosuje się do kodów programów komputerowych, a "samp" do outputów programu. Nie muszą dawać identycznych wyników.</p>
<p>4. Po użyciu pierwszej możliwości mamy do czynienia z dwoma paragrafami, po użyciu drugiej - z jednym, podzielonym pustą linią. </p>
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
