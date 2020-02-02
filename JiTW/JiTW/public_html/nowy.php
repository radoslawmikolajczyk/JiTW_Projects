<?php
    $key = 123456;
    $max_acquire = 1;
    $perm = 0666;
    $auto_release = 1;
    $sem = sem_get($key,$max_acquire,$perm,$auto_release);

    $newBlog = $_POST['blogname'];

    if(sem_acquire($sem,1) != false) {
    	if (!file_exists($newBlog)) {
		$oldMask = umask(0);
 		mkdir($newBlog, 0777);
		umask($oldMask);
		$myFile = fopen($newBlog."/info", "w");
		$userLogin = $_POST['username']."\n";
		$userPass = md5($_POST['passwd'])."\n";
		$blogDes = $_POST['message']."\n";
		fwrite($myFile,$userLogin.$userPass.$blogDes);
		fclose($myFile);
		/* Redirect to a different page in the current directory that was requested */
  		$host  = $_SERVER['HTTP_HOST'];
  		$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
   		$extra = 'cwiczenie_php2.php';
   		header("Location: http://$host$uri/$extra");
   		exit;
	}
	else {
		echo "Blog o nazwie ".$newBlog." już istnieje!";
	}
     sem_release($sem);
    }
?>
