<?

	include("../settings.php");
	
	$rss = file_get_contents($feed_url);
	$rss = str_replace(array_keys($replacements), array_values($replacements), $rss);
	echo $rss;
	
?>