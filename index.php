<?php
require_once('src/functions.php');

//Задание #1

echo '<b>Задание #1</b><br>';
$array = ['example_string1', 'example_string2', 'example_string3'];

task1($array);
echo task1($array, true);
echo '<br><br>';

//Задание #2

echo '<b>Задание #2</b><br>';
const OPERATORS = ['+', '-', '*', '/', '?'];
$operator = OPERATORS[array_rand(OPERATORS)];
task2($operator, 1, 2, 3, 5.2);
echo '<br><br>';

//Задание #3

echo '<b>Задание #3</b><br>';
task3(mt_rand(-5, 15), mt_rand(-5, 15));
echo '<br><br>';

//Задание #4

echo '<b>Задание #4</b><br>';
task4();
task5('24.02.2016 00:00:00');
echo '<br><br>';

//Задание #5

echo '<b>Задание #5</b><br>';
$str1 = 'Карл у Клары украл Кораллы';
$str2 = 'Две бутылки лимонада';
echo task6('К', '', $str1);
echo task6('Две', 'Три', $str2);
echo '<br><br>';

//Задание #6

echo '<b>Задание #6</b><br>';
task7('text.txt', 'Hello again!');
task8('text.txt');
echo '<br><br>';
