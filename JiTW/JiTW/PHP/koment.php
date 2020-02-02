<?php
$key = 123456;
$max = 1;
$permissions = 0666;
$auto = 1;
$sem = sem_get($key,$max,$permissions,$auto);

$commentType = $_POST['comment_type'];
$commentText = $_POST['content'];
$commentNick = $_POST['pseudonim'];
$commentRecord = $_POST['choose'];

date_default_timezone_set("Poland");
$time = date("H:i:s");
$date = date("Y-m-d");

if (sem_acquire($sem,1) != false) {
	if (!(file_exists($commentRecord.".k")) && $commentRecord != "") {
		$oldMask = umask(0);
                mkdir($commentRecord.".k", 0777);
		umask($oldMask);
	}

	$number = 0;
	$stringNumber = sprintf("%d",$number);

	while (file_exists($commentRecord.".k/".$stringNumber)) {
		$number = $number + 1;
		$stringNumber = sprintf("%d",$number);
	}
	sem_release($sem);
}

$newPath = $commentRecord.".k/".$stringNumber;

$file = fopen($newPath,"w");
fwrite($file,$commentType."\n".$date." ".$time."\n".$commentNick."\n".$commentText."\n");
fclose($file);
sem_release($sem);

/* Redirect to a different page in the current directory that was requested */
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'cwiczenie_php4.php';
header("Location: http://$host$uri/$extra");
exit;
?>
