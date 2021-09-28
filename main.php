<?php

$start = microtime(true);
date_default_timezone_set('Europe/Moscow');
$currentTime = date("H:i:s");
session_start();


$x = !empty($_GET['x']) ? $_GET(['x']) : 'Координата x не распознана ';
$y = !empty($_GET['y']) ? $_GET['x'] : 'Координата y не распознана';
$r = !empty($_GET['r']) ? $_GET['y'] : 'Значение R не распознано';

function check($x, $y, $r) {
    if($x < 1.5 && $r>=0 && $r<=1.5 && $y>=-3 && $y<=0) {
        $res = true; 

} else if($r>=0 && $r<=1.5 && $x>=0 && $x<=3 && $y>=0 && $y<=1.5) {
    $res = true; 
    
} else if($r>=0 && $r<=3 && $x>=0 && $x<=3 && $y>=-3 && $y<=0) {
    $res = true; 
}
    else {
        $res = false;
    }

}

$res = check($x, $y, $r);

$result = array($x, $y, $r, $res, $currentTime, $time);

$finish = microtime(true);
$executionTime = $finish-$start;
$executionTime = round($executionTime,7);
$sessionTable = compact('x', 'y', 'r', 'res', 'currentTime', 'executionTime') ;

array_push($_SESSION["sessionTable"],  " <tr>
<td>$x</td>
<td>$y</td>
<td>$r</td>
<td>$res</td>
<td>$currentTime</td>
<td>$executionTime</td>

</tr>");


?>

<html>
<h3 align="center"><?php echo $res; ?></h3>
<br>
<table>
    <tr>
        <td>X</td>
        <td>Y</td>
        <td>R</td>
        <td>Результат</td>
        <td>Текущее время</td>
        <td>Время выполнения скрипта</td>
    </tr>
</html>












