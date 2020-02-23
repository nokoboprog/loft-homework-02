<?php

//Задание #1

function task1(array $strings, $glue = false)
{
    if ($glue === true) {
        return implode(' ', $strings);
    }

    foreach ($strings as $str) {
        echo "<p>$str</p>";
    }
}

//Задание #2

function task2($operator, ...$args)
{
    $result = 0;
    switch ($operator) {
        case '+':
            foreach ($args as $value) {
                $result += $value;
            }
            break;
        case '-':
            foreach ($args as $value) {
                $result -= $value;
            }
            break;
        case '*':
            $result = 1;
            foreach ($args as $value) {
                $result *= $value;
            }
            break;
        case '/':
            $result = 1;
            foreach ($args as $value) {
                $result /= $value;
            }
            break;
        default:
            echo 'Неизвестный оператор.';
            $result = null;
    }

    if ($result) {
        echo implode(" $operator ", $args) . " = $result";
    }
}

//Задание #3

function task3(int $rows, int $cols)
{
    if ($rows < 1 || $cols < 1) {
        echo 'ОШИБКА: введите два целых числа, которые больше 0.';
        return;
    }

    echo '<table style="border: 1px solid #000; text-align: center">';
    for ($tr = 1; $tr <= $rows; $tr++) {
        echo '<tr>';
        for ($td = 1; $td <= $cols; $td++) {
            $sum = $tr * $td;
            echo "<td style='border: 1px solid #000'>{$tr}x{$td}=$sum</td>";
        }
        echo '</tr>';
    }
    echo '</table>';
}

//Задание #4

function task4()
{
    echo date('d.m.Y H:i', time()) . '<br>';
}

function task5(string $date)
{
    echo strtotime($date) . '<br>';
}

//Задание #5

function task6($searchSubstr, $replaceTo, $str)
{
    return str_replace($searchSubstr, $replaceTo, $str) . '<br>';
}

//Задание #6

function task7(string $fileName, string $textInput)
{
    if (file_exists($fileName)) {
        echo 'Файл с таким именем уже существует.' . '<br>';
        return;
    }

    $handler = fopen($fileName, 'w+');
    fwrite($handler, $textInput);
    echo "Файл $fileName успешно создан." . '<br>';
    fclose($handler);
}

function task8($fileName)
{
    if (!file_exists($fileName)) {
        echo 'Файл с таким именем НЕ существует.' . '<br>';
        return;
    }

    echo file_get_contents($fileName) . '<br>';
}
