<script src="scripts/jquery-2.1.3.min.js"></script>

<?php
$tzs = 'America/Chicago'; //todo: get timezone from company table of database. if isnull db_timezone, $tzs =
// 'America/Chicago';, else, $tzs = db_timezone.
date_default_timezone_set($tzs); // sets default timezone for all new dates here to tzs
/*$timezone = new DateTimeZone('Europe/London'); // converts timezone string to timezone 'T' attribute of date array
$mydate->setTimezone($timezone);   if necessary, for travelling employees, we can set timezone specific to entry
which is different from the timezone of the system. This is how*/
//Testing tool to check timezone settings from two sources:
/*if (date_default_timezone_get()) {echo 'date_default_timezone_set: ' . date_default_timezone_get() . '<br />';}
if (ini_get('date.timezone')) {echo 'date.timezone from php.ini: ' . ini_get('date.timezone') . '<br />';}*/
$mydate = new DateTime('now');
$mydatew3c = date_create("2001-01-01 12:00:00",timezone_open($tzs)); // create new date objects
$mydateatom = date_create("2001-01-01 12:00:00",timezone_open($tzs));
//$mydateatom = $mydate->format(DateTime::ATOM); //const string ATOM = "Y-m-d\TH:i:sP";
//parsing date parts to values (numbers)
$year = $mydate->format('Y');
$month = $mydate->format('m');
$day = $mydate->format('d');
$hour = $mydate->format('H');
$mins = $mydate->format('i');
$secs = $mydate->format('s');
//$ampm = $mydate->format('A');

echo 'Time Zone Applied = ' . date_default_timezone_get() . '<br />';
$x = $year . '-' . $month . '-' . $day . 'T' . $hour . ':' . $mins . ':' . $secs . '.000';
echo "<input type=\"datetime-local\" id=\"myLocalDate\" value=$x readonly><br>";

$mydatew3c = date_create($x,timezone_open($tzs));
echo date_format($mydatew3c,DATE_W3C) . $mydate->format('T') . "  -  W3C format built <br>";

$mydateatom = date_create($x,timezone_open($tzs));
echo date_format($mydateatom,DATE_ATOM) . $mydate->format('T') . "  -  ATOM format built <br>";