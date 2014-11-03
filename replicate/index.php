<?

	include("../settings.php");

 	$file = end(explode("/", $_SERVER['REQUEST_URI']));
	header('Content-Type: audio/mpeg');
	readfile($audio_url.$file);
?>