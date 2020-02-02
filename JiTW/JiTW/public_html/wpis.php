<?php
$key = 123456;
$max = 1;
$permissions = 0666;
$auto = 1;
$sem = sem_get($key,$max,$permissions,$auto);

$blogName = "";
$userName = $_POST['username'];
$userPassword = $_POST['passwd'];

$dirContent = new RecursiveDirectoryIterator('.');
$dirIterator = new RecursiveIteratorIterator($dirContent);

foreach($dirIterator as $path => $file) {
	if (!($file->isDir()) && $file->getFileName() == 'info') {
		$lines = file($path);
		$fileUserName = $lines[0];
		$fileUserName = trim($fileUserName,"\n");
		$fileUserPassword = $lines[1];
		$fileUserPassword = trim($fileUserPassword,"\n");
		if ($fileUserName == $userName && md5($userPassword) == $fileUserPassword) {
			$blogName = dirname($path);
			$blogName = trim($blogName,"./");
			break;
		}
	}
}

if ($blogName != "") {
	$date = $_POST['date'];
	$time = $_POST['hour'];

	$date_str = \DateTime::createFromFormat("Y-m-d H:i", "$date $time")->format("YmdHi");
	$sec = time() % 60;
	$date_str .= ($sec > 9 ? "$sec" : "0$sec");

	if(sem_acquire($sem,1) != false) {
		$uID = 0;
		do {
			$stringUID = sprintf("%02d",$uID);
			$fileName = $date_str.$stringUID;
			$uID = $uID + 1;
		} while (file_exists($blogName."/".$fileName));

		$fileName = $date_str.$stringUID;
		$myFile = fopen($blogName."/".$fileName, "w");
                fwrite($myFile,$_POST['message']."\n");
		fclose($myFile);
		sem_release($sem);
	}

	$number = 1;
	for($i = 1; $i <= sizeof($_FILES); $i = $i + 1) {
		$file = $_FILES['attachment'.$i];
		if ($file['size'] != 0) {
			$extension = pathinfo($file['name'],PATHINFO_EXTENSION);
			$stringNumber = sprintf("%d",$number);
			$number = $number + 1;
			$attachmentName = $fileName.$stringNumber.".".$extension;
			if(!(file_exists($blogName."/".$attachmentName))) {
				move_uploaded_file($file['tmp_name'],$blogName."/".$attachmentName);
			}
		}
	}

	/* Redirect to a different page in the current directory that was requested */
	$host  = $_SERVER['HTTP_HOST'];
	$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	$extra = 'cwiczenie_php4.php';
	header("Location: http://$host$uri/$extra");
	exit;
}
else {
	echo "<br>Brak dostępu!</br>";
}

?>
