<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>PHP</title>
  <meta http-equiv="Content-Type" content="application/xhtml+xml;
charset=UTF-8" />
<link rel="stylesheet" media="screen" href="style.css" type="text/css" title="Styl główny"/>
<link rel="alternate stylesheet" media="screen" href="alrestyle.css" type="text/css" title="Styl alternatywny"/>
<link rel="stylesheet" media="print" href="druk.css" type="text/css" title="Styl blank"/>
<script type = "text/javascript" src = "mainScript.js" ></script>
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
  </ul>
<?php include 'menu.php'; ?>
</div>
<div id = "Tresc">
<h1>PHP</h1>
<h2>PHP - czyli co to wgl jest?</h2>
<p>PHP jest skryptowym językiem programowania, wykorzystywanym najczęściej do tworzenia stron internetowych.</p>
<p>Wykonywany jest po stronie serwera, co oznacza, że jest niewidoczny dla użytkowników. Pozwala na m.in. dynamiczne
generowanie strony, tworzenie i modyfikowanie plików na serwerze, ograniczanie dostępu do danych podstron na twojej
stronie, szyfrowanie danych czy stosowanie ciasteczek. Kod PHP może być przeplatany z kodem HTML, jednak nie jest to dobra praktyka.
Najprostszym przykładem jego wykorzystania jest obsługa formularzy na stronach internetowych. PHP pozwala także na obsługę
baz danych, co wymaga znajomości SQL – strukturalnego języka zapytań, który służy między innymi do tworzenia i modyfikowania
 baz danych, a także do wprowadzania i pobierania danych z baz danych.
PHP był często określany jako wolny język, jednak PHP7 wprowadziło zmiany, które polepszyły jego wydajność. Ponadto, Facebook
zainwestował w rozwój PHP, umożliwiając przyspieszenie działania nawet do 6 razy dzięki HipHop Virtual Machine (HHVM) –
jest to projekt open-source, który bazuje na kompilatorze JIT (Just-in-time). Kod PHP jest przetwarzany do kodu maszynowego,
co znacznie przyspiesza jego działanie.
</p>
<p>W PHP najczęściej tworzone są systemy zarządzania treścią, systemy forów dyskusyjnych, aplikacje pocztowe oraz klienty baz danych.</p>
<h2>Przyszlość PHP?</h2>
<p>
  PHP jest dosyć starym językiem, ale jego popularność nie spada i się na to nie zanosi. Fakt, że jest wykorzystywany przez
większość najpopularniejszych stron internetowych sprawia, że nie zostanie łatwo wyparty. Ponadto cały czas jest rozwijany,
aby sprostać nowym wymaganiom. Wersja PHP7 mocno go odświeżyła, a ostatnia jego wersja 7.3.11 została wydana 24 października 2019.
</p>
<h1>JavaScript</h1>
<h2>Co to jest JavaScript?</h2>
<p>
   JavaScript jest skryptowym językiem programowania, stworzonym w latach 90-tych 
przez Brendana Eicha i firmę Netscape. Jest to język wykorzystywany na stronach WWW. 
Same skrypty odpowiadają za interaktywność poprzez reagowanie na zdarzenia, 
sprawdzanie formularzy czy za tworzenie elementów służących do nawigacji. Ważnym jest, 
aby podczas tworzenia i ulepszania strony www żaden z elementów nie przestał działać 
po wyłączeniu w przeglądarce internetowej obsługi skryptu. Sam skrypt nie ma pełnego dostępu
 do komputera obsługiwanego przez użytkownika.
</p>
<h2>Pozostałe informacje o JavaScript</h2>
<p>
   Za pomocą JavaScript można również tworzyć aplikacje. Aby umożliwić to użytkownikom 
fundacja Mozilla, organizacja non-profit założona w 2003 roku, umożliwia korzystanie ze 
środowiska zbudowanego z technologii JSLib, XBL (język znaczników), XUL 
(język zgodny z XML służący do opisywania interfejsu GUI i WEB) i XPCOM (międzyplatformowy 
model komponentów). Dzięki ww. technologiom możliwe jest stworzenie aplikacji, które wykorzystują
 zasoby systemowe, posiadają graficzny interfejs oraz dostosowują się do konkretnej platformy.
</p>
<p>
Jednym z przykładów takiej aplikacji jest klient IRC (Internet Relay Chat) – Chatzilla, 
stworzony dzięki technologii JavaScript i XUL. Jest to aplikacja pod przeglądarkę Mozilla oraz
 wszystkie systemy takie jak Linux, Windows, Mac OS czy Solaris. Wiadomości wysyłane i 
otrzymywane wyświetlane są używając stylów CSS. Również Windows daje biblioteki, za pomocą 
których można stworzyć aplikacje JavaScript, będące częścią Windows Scripting Host 
(programowego środowiska do wykonywania i interpretowania skryptów). System Linux także 
posiada swoje środowisko, SashXB, stworzone przez IBM, służące do tworzenia aplikacji 
wykorzystujących GTK+ (biblioteka umożliwiająca tworzenie graficznego interfejsu dla programów 
komputerowych), OpenLDAP (implementacja protokołu LDAP, zawierająca serwer bibliotek, klientów 
do komunikacji z serwerem i usługi katalogowe) oraz GNOME (graficzne środowisko na systemie X 
Windows System).
</p>
<div id="validator">
<p>
  <a href="http://validator.w3.org/check?uri=referer"><img
    src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
</a>

<a  href="http://jigsaw.w3.org/css-validator/check/referer">
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

