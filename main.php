<?php

$start = microtime(true);
date_default_timezone_set('Europe/Moscow');
$currentTime = date("H:i:s");
session_start();


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

$finish = microtime(true);
$executionTime = $finish-$start;
$executionTime = round($executionTime,7);

array_push($_SESSION["sessionTable"],  "<tr>
<td>$x</td>
<td>$y</td>
<td>$r</td>
<td>$coordsStatus</td>
<td>$currentTime</td>
<td>$executionTime</td>

echo "<table>
<tr>
    <th>x</th>
    <th>y</th>
    <th>r</th>
    <th>Точка входит в ОДЗ</th>
    <th>Текущее время</th>
    <th>Время работы скрипта</th>
</tr>";

foreach ($_GET['x', 'y', 'r'] as $x, $y, $r) {
$_SESSION['x', 'y', 'r'] = $_GET['x', 'y', 'r'];
            $rows = get_info($x,$y, $r);
            if (count($rows)){
                foreach ($rows as $row) {       
                    $_SESSION['row'] = $rows;
                    echo "<tr>" .
                        "<td>" . $row["x"] . "</td>" .
                        "<td>" . $row["y"] . "</td>" .
                        "<td>" . $row["r"] . "</td>" .
                        "<td>" . $row["status"] . "</td>" .
                        "<td>" . $row["curTime"] . "</td>" .
                        "<td>" . $row["exTime"] . "</td>" .
                        "</tr>";
echo "</table>";










?>
 
