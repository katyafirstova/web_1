<?php
session_start();
date_default_timezone_set('Europe/Moscow');
$currentTime = date("H:i:s");
$start = microtime(true);

if (!isset($_SESSION["sessionTable"])) $_SESSION["sessionTable"] = array();

$x = !empty($_GET['x']) ? $_GET(['x']) : 'Координата x не распознана ';
$y = !empty($_GET['y']) ? $_GET['x'] : 'Координата y не распознана';
$r = !empty($_GET['r']) ? $_GET['y'] : 'Значение R не распознано';

function check($x, $y, $r) {
    if($x<=1.5 && $r>=0 && $r<=1.5 && $y>=-3 && $y<=0) || ($r>=0 && $r<=1.5 && $x>=0 && $x<=3 && $y>=0 && $y<=1,5) || ($r>=0 && $r<=3 &7 $x>=0 && $x<=3 && $y>=-3 && $y<=0) {
        return TRUE;
    }
    else {
        return FALSE;
    }
}

$res = check($x, $y, $r);

$result = array($x, $y, $r, $currentTime, $time)

$time = microtime(true) - $start;

array_push($_SESSION["sessionTable"] as $sessionTable) echo $sessionTable;

?>
 
