<?

	$feed_url = 'https://LOGIN:PW@FEED_URL';			// The Feed URL
	$audio_url = 'https://LOGIN:PW@AUDIO_URL_FOLDER'; 	// up until the last /filename.mp3

	$replacements = array(
				'AUDIO_URL_FOLDER' 						=> 'YOUR_AUDIO_FOLDER/replicate/',
				'MAIN_URL'								=> 'YOUR_MAIN_UR',
				'COVER_IMAGE_URL' 						=> 'YOUR_COVER_IMAGE_URL',
				'EMAIL_ADDRESS' 						=> 'YOUR_EMAIL_ADDRESS',
				'</channel>' => '<itunes:link href="YOUR_FEED_URL" rel="self" type="application/rss+xml" /></channel>'
		);