<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
</head>

<body>
   
Лабораторная работа</a>
        <header>
            <h1 align="center">
                Лабораторная работа №1 по веб-программированию
            </h1>
            <h2 align="center">
                Фирстова Екатерина Витальевна
                <br>
                Вариант 14212
            </h2>
        </header>
    </div>

    <table>
        <tr>
            <td width="20%">
                <figure align ="left">
                    <div class="img">
                      <img src="img.png" width="400" height="400">
                    </div>
                ﻿</figure>
            </td>

            <td width="80%">
                <form action = main.php method="GET"> 
                    <div class="enterValue">
                         <h2>
                             Выберите X:
                         </h2>
                    </div>
                    <p> 
                        <input type="radio" name="x"  value="a1">-5<Br>
                        <input type="radio" name="x" value="a2">-4<Br>
                        <input type="radio" name="x" value="a3">-3<Br>
                        <input type="radio" name="x" value="a4">-2<Br>
                        <input type="radio" name="x" value="a5">-1<Br>
                        <input type="radio" name="x" value="a6">0</Br>
                        <input type="radio" name="x" value="a7">1</Br>
                        <input type="radio" name="x" value="a8">2<Br>
                        <input type="radio" name="x" value="a9">3<Br>

                        <button name="suputton" type="submit">Отправить</button>
            
                <div class="enterValue">
                    <h2>
                        Введите Y в диапзоне (-5;3):
                    </h2>
                </div>
               <input name="texty" type="text"/>
               <p id="messagey"><br></p>
               <button name="suputton" type="submit">Отправить</button>
            
               <div class="enterValue">
                <h2>
                    Выберите R:
                </h2>
               </div>
             
                    <label for="r1">1</label><input id="r1" name="r1" type="checkbox" value="1"/>
                    <label for="r2">1.5</label><input id="r2" name="r2" type="checkbox" value="1.5"/>
                    <label for="r3">2</label><input id="r3" name="r3" type="checkbox" value="2"/>
                    <label for="r4">2.5</label><input id="r4" name="r4" type="checkbox" value="2.5"/>
                    <label for="r5">3</label><input id="r5" name="r5" type="checkbox" value="3"/>
            
                    <button name="suputton" type="submit">Отправить</button>
                    </p>
                </form>
            </td>
    </tr>
    </table>

    <table>
        <tr>
                    <td scope="col">XYR</td>
                    <td scope="col">Результат</td>
                    <td scope="col">Current Time</td>
                    <td scope="col">Computation Time</td>
        </tr>
</table>

<?php
                session_start();
                if (isset($_SESSION['results'])) {
                    foreach ($_SESSION['results'] as $result) { ?>
                        <tr>
                            <td><?php echo $result[0] ?></td>
                            <td><?php echo $result[1] ?></td>
                            <td><?php echo $result[2] ?></td>
                            <td><?php echo $result[3] ?></td>
                        </tr>
 <?php }} ?>

</body>