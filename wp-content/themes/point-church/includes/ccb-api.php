<?php



$campusMap = (object) array (
    'all-church' => 8,
    'apex' => 2,
    'cary' => 3,
    'chapel-hill' => 9,
    'espanol-cary' => 4,
    'fuquay-varina' => 10,
    'north-raleigh' => 5,
    'south-raleigh' => 1,
    'espanol-apex' => 6
);

function slugify($text) {
  // replace non letter or digits by -
  $text = preg_replace('~[^\pL\d]+~u', '-', $text);

  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);

  // trim
  $text = trim($text, '-');

  // remove duplicate -
  $text = preg_replace('~-+~', '-', $text);

  // lowercase
  $text = strtolower($text);

  if (empty($text)) {
    return 'n-a';
  }

  return $text;
}

$campusName = slugify($_POST["campus"]);

if( $campusName == 'n-a' ) {
    $campusName = 'all-church';
}

$selectedCampus = $campusMap->$campusName;

$day = date('w');
$week_start = date('Y-m-d', strtotime('-'.$day.' days'));
$week_end = date('Y-m-d', strtotime('+'.(6-$day).' days'));

# srv=individual_calendar_listing&id=48&date_start=2010-01-01
 $url = 'https://point.ccbchurch.com/api.php?srv=individual_calendar_listing&id=' . $selectedCampus. '&date_start=' . $week_start . '&date_end=' . $week_end;

//  Initiate curl
$ch = curl_init();
// Disable SSL verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// username
curl_setopt($ch, CURLOPT_USERPWD, "joshmobley:Sem1n01e*");
// Set the url
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
$result=curl_exec($ch);
// Closing
curl_close($ch);

// Will dump a beauty json :3

$xml = simplexml_load_string($result);

# print_r($xml);

$events = array();

foreach($xml->item as $item){
    $eventObj = (object) array(
        'name' => $item->event_name,
        'description' => $item->event_description,
        'date' => $item->date,
        'group_name' => $item->group_name
    );
   array_push($events,$eventObj);
}

?>