<?php

/* gets the contents of a file if it exists, otherwise grabs and caches */
function get_content($file,$url,$hours = 1,$fn = '',$fn_args = '') {
	//vars
	$current_time = time(); 
    $expire_time = $hours * 60 * 60; 
    $file_time = filemtime($file);
	//decisions, decisions
	if(file_exists($file) && ($current_time - $expire_time < $file_time)) {
		//echo 'returning from cached file';
		return file_get_contents($file);
	}
	else {
		$content = get_url($url);
		if($fn) { $content = $fn($content,$fn_args); }
		$content.= '<!-- cached:  '.time().'-->';
		file_put_contents($file, $content);
		//echo 'retrieved fresh from '.$url.':: '.$content;
		return $content;
	}
}

/* gets content from a URL via curl */
function get_url($url) {
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_USERPWD, "joshmobley:Sem1n01e*");
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1); 
	curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,5);
	$content = curl_exec($ch);
	curl_close($ch);
    $content = new SimpleXMLElement($content);
    $events = array();
    $i = 0;
    foreach($content->response->items->item as $item){
        array_push($events, $item);
        $i++;
    }
	return json_encode($events);
}

$today = date('Y-m-d');
$t = new DateTime();
$twoMonths = $t->modify('+60 days')->format('Y-m-d');
$url = 'https://point.ccbchurch.com/api.php?srv=public_calendar_listing&date_start=' . $today . '&date_end=' . $twoMonths;

get_content(__DIR__ . '/cache/events.txt',  $url);

echo '<script>' .
    'var events = ' . file_get_contents( __DIR__ . '/cache/events.txt') . ';' .
	'console.log(events);' .
    '</script>';

?>