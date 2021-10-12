<?php

session_start();
if (!isset($_SESSION["sessionTable"])) $_SESSION["sessionTable"] = array();
$start = microtime(true);
date_default_timezone_set('Europe/Moscow');
$currentTime = date("H:i:s");


$x = $_GET['x'];
$y = $_GET['y'];
$r = $_GET['r'];

function check($x, $y, $r) {
    if($x < 1.5 && $r>=0 && $r<=1.5 && $y>=-3 && $y<=0) {
       $res = "да"; 

} else if($r>=0 && $r<=1.5 && $x>=0 && $x<=3 && $y>=0 && $y<=1.5) {
       $res = "да"; 
    
} else if($r>=0 && $r<=3 && $x>=0 && $x<=3 && $y>=-3 && $y<=0) {
        $res = "да"; 
}
    else {
        $res = "нет"; 
    }

    return $res;
}

$finish = microtime(true);
$executionTime = $finish-$start;
$executionTime = round($executionTime,7);

array_push($_SESSION["sessionTable"], "<tr>
<td>$x</td>
<td>$y</td>
<td>$r</td>
<td>$res</td>
<td>$currentTime</td>
<td>$executionTime</td>
</tr>");
echo "<table id='outputTable'>
    <tr>
        <th>x</th>
        <th>y</th>
        <th>r</th>
        <th>Точка входит в ОДЗ</th>
        <th>Текущее время</th>
        <th>Время работы скрипта</th>
    </tr>";
foreach ($_SESSION["sessionTable"] as $sessionTable) echo $sessionTable;
echo "</table>";

?>













