<?php

echo "<br /><br />";
$blogName = "";
if (isset($_GET['nazwa'])) {
	$blogName = $_GET['nazwa'];
}

if ($blogName == "") {
	$dir = new DirectoryIterator(".");
        foreach ($dir as $file) {
        	if ($file->isDir() && !$file->isDot()) {
                	$blog = $file->getFilename();
                	echo sprintf("<a href=\"blog.php?nazwa=%s\">%s</a><br />", $blog, $blog);
             	}
        }
} else {
	if (file_exists($blogName)) {
		$blogDescription = fopen($blogName."/info", 'r');
		$lineNumber = 1;
		include 'cwiczenie_php5.php';
		echo "<h2>Tytuł: ".$blogName."</h2>";
		while (($line = fgets($blogDescription)) != false) {
			if ($lineNumber == 1) {
				echo "<h2>Właściciel: ".$line."</h2>";
			}
			else if ($lineNumber == 3) {
				echo "<h2>Opis: ".$line."</h2>";
			}
			$lineNumber = $lineNumber + 1;
		}
		fclose($blogDescription);
		$dir = new DirectoryIterator($blogName);

		foreach($dir as $scan) {
			if(!($scan->isDir()) && preg_match("/^\d{16}$/",$scan)) {
				$file = fopen("./".$blogName."/".$scan,"r");
				echo "<h3>Wpis:</h3>";
				while (($line = fgets($file)) != false) {
					echo "<strong>".$line."</strong>";
				}
				echo "<br/>";
				foreach(new DirectoryIterator($blogName) as $file) {
					if (preg_match("/".$scan."[1-3]/",$file)) {
						echo "<a href=./".$blogName."/".$file." download> ".$file."</a><br/>";
					}
				}
				$number = 0;
				echo "<h3>Komentarze:</h3>";
				if(file_exists($blogName."/".$scan.".k")) {
					foreach(new DirectoryIterator($blogName."/".$scan.".k") as $comm) {
						$file = fopen($blogName."/".$scan.".k/".$number,"r");
						while(($line = fgets($file)) != false) {
							echo $line."<br/>";
						}
						$number = $number + 1;
						echo "<br/>";
					}
				}
			}
		}
	} else {
		echo "Blog ".$blogName." nie istnieje!";
	}
}
echo "</div>"."</div>"."</body>"."</html>";
?>
