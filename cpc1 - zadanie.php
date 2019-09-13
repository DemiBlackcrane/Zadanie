<?php
echo "Zadanie 1";
echo "<br>";
$a = 5;
$b = $per_a
echo "Переменная b = $b";
echo "<br>";

$a = 10;
$b = 2;
echo("Сумма значений $a и $b = ");
echo($a + $b);
echo "<br>";
echo("Вычитание значений $a и $b = ");
echo($a - $b);
echo "<br>";
echo("Умножение значений $a и $b = ");
echo($a * $b);
echo "<br>";
echo("Деление значений $a и $b = ");
echo($a / $b);
echo "<br>";

$c = 15;
$d = 2;
echo("Сумма $c и $d = ");
$result = $c+$d;
echo($result);
echo "<br>";

$a = 10;
$b = 2;
$c = 5;
echo("Среднее знаниче $a, $b и $c = ");
echo(($a+$b+$c)/3);
echo "<br>";

$a = 17;
$b = 10;
$d = 17;
echo("Разность $a и $b = ");
$с = $a - $b;
echo($c);
echo "<br>";
echo("Сумма $c и $d = ");
$result = $c + $d;
echo($result);
echo "<br>";

echo "Zadanie 2";

echo "<br>";

$text = "Привет, мир.";
echo("$text Моя первая программа."):
echo "<br>";

$text1 = "Привет, ";
$text1 = "Мир.";
$text1 .=$text2;
echo ($text1);
echo "<br>";

$name = "Семенов Дмитрий";
echo("Привет, $name");
$text = "Новый текст";
echo "<br>";

$age = 19;
$height = 173;
echo("Мой возраст $age, а рост $height");
echo "<br>";

$text1 = "abcde";
echo($text1[0]);
echo($text1[2]);
echo($text1[4]);

echo "Zadanie 3";

echo "<br>";

$arr = ['a','b','c'];
var_dump($arr);
echo "<br>";

var_dump($arr[0]);
var_dump($arr[1]);
var_dump($arr[2]);
echo "<br>";
$v = "$arr[0], $arr[1], $arr[2]";
echo($v);
echo "<br>";

$arr = ['a', 'b', 'c', 'c'];
$v1 = "$arr[0] + $arr[1], $arr[2] + $arr[3], $arr[0] - $arr[3], $arr[0] / $arr[3]";
echo($v1);
echo "<br>";

$arr = [2,5,3,9];
$r1 = $arr[0] * $arr[1];
$r2 = $arr[2] * $arr[3];
$result = $r1 + $r2;
echo($result);
echo "<br>";

echo "Zadanie 4";

echo "<br>";

$arr = ['a' => 11, 'b' => 20, 'c' = 30];
echo "c = ";
echo $arr['c'];
echo "Сумма = ";
echo($arr['a'] + $arr['b'] + $arr['c']);
echo "<br>";

echo (array_sum($arr));
echo "<br>";

$arr = ['Коля' => '1000$', 'Вася' => '500$', 'Петя' => '200$'];
echo "Коля - ";
echo "($arr['Коля'])";
echo "<br>";
echo "Петя - ";
echo "($arr['Петя'])";
echo "<br>";

$arr = ['1' => 'Январь', '2' => 'Февраль', '3' => 'Март', '4' => 'Апрель', '5' => 'Май', '6' => 'Июнь', '7' => 'Июль', '8' => 'Август', '9' => 'Сентябрь', '10' => 'Октябрь', '11' => 'Ноябрь', '12' => 'Декабрь'];
echo($arr['9']);
echo "<br>";
echo($arr['6']);
echo "<br>";

$day = 4;
$arr = ['1' => 'Понедельник', '2' => 'Вторник', '3' => 'Среда', '4' => 'Четверг', '5' => 'Пятница', '6' => 'Суббота', '7' => 'Воскресенье'];
echo($arr[$day]);
echo "<br>";