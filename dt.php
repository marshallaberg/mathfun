<script src="scripts/jquery-2.1.3.min.js"></script>
<?php
function mydatefunc($dt)
{
    $tzs = 'America/Chicago'; //todo: get timezone from company table of database. if isnull db_timezone, $tzs =
// 'America/Chicago';, else, $tzs = db_timezone.
    date_default_timezone_set($tzs); // sets default timezone for all new dates here to tzs
    $mydate = date_create("$dt", timezone_open($tzs)); // create new date objects
//parsing date parts to values (numbers)
    $year = $mydate->format('Y');
    $month = $mydate->format('m');
    $day = $mydate->format('d');
    $hour = $mydate->format('H');
    $mins = $mydate->format('i');
    $secs = $mydate->format('s');
//$ampm = $mydate->format('A');
    $x = $year . '-' . $month . '-' . $day . 'T' . $hour . ':' . $mins . ':' . $secs . '.000';// building and pushing into input box (readonly)
//writing three formats of current date/time to session variables
    $_SESSION["mydatestring"] = $x; //built to go into input type="datetime-local" boxes
    $_SESSION["mydatew3c"] = date_format($mydate, DATE_W3C); //mysql
    $_SESSION["mydateatom"] = date_format($mydate, DATE_ATOM); //another format for php

    /*  for feedback and debugging only:
    $z = $_SESSION["mydatestring"];
    echo "<input type=\"datetime-local\" id=\"myLocalDate\" value=$x readonly><br>";
    echo 'Time Zone Applied = ' . date_default_timezone_get() . '<br />';
    echo $z . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Reading from session mydatestring <br>";
    echo date_format($mydate, DATE_W3C) . " " . $mydate->format('T') . "  -  W3C writing to session  <br>";
    echo $_SESSION["mydatew3c"] . " " . "  -  W3C reading from session mydatew3c <br>";
    echo date_format($mydate, DATE_ATOM) . " " . $mydate->format('T') . "  -  ATOM writing to session  <br>";
    echo $_SESSION["mydateatom"] . " " . "  -  ATOM reading from session mydateatom <br>";*/
    /* alternative conversion method: $mydateatom = $mydate->format(DateTime::ATOM);
    echo ($mydateatom . " " . $mydate->format('T') . "  -  ATOM format  <br>");*/
}

mydatefunc("1974-07-23T12:00"); // sample parameter: 2011-01-01T12:00:00.000
$mydatestring =  $_SESSION["mydatestring"];
echo    "<input type=\"datetime-local\" id=\"myLocalDate\" value=$mydatestring readonly>
        this was loaded from session mydatestring <br>";
echo $_SESSION["mydateatom"] . "  -  ATOM format from session mydateatom <br>";
echo $_SESSION["mydatew3c"] . " " . "  -  W3C format from session mydatew3c <br>";
?>