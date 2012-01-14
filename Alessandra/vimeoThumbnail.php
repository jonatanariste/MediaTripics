<?php header("Content-type: text/xml\n\n"); ?>
<?php echo ('<?xml version="1.0" encoding="ISO-8859-1"?>' . "\n"); ?>
<?php
function getVimeoInfo($id, $info = 'thumbnail_large') {
	if (!function_exists('curl_init')) die('CURL is not installed!');
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://vimeo.com/api/v2/video/$id.php");
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	$output = unserialize(curl_exec($ch));
	$output = $output[0][$info];
	curl_close($ch);
	return $output;
}

echo '<imagenes>';    


  echo '<img src="';
  echo getVimeoInfo(24986331);
  echo '" id="24986331"/>';

  echo '<img src="';
  echo getVimeoInfo(23576266);
  echo '" id="23576266"/>';

  echo '<img src="';
  echo getVimeoInfo(22263438);
  echo '" id="22263438"/>';
  
  echo '<img src="';
  echo getVimeoInfo(20908238);
  echo '" id="20908238"/>';
  
  echo '<img src="';
  echo getVimeoInfo(19795352);
  echo '" id="19795352"/>';
  
  echo '<img src="';
  echo getVimeoInfo(19043657);
  echo '" id="19043657"/>';
  
  echo '<img src="';
  echo getVimeoInfo(18160385);
  echo '" id="18160385"/>';
    

  
echo '</imagenes>'; 
?>