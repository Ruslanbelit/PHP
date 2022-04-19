<?php
//Савин Руслан
//1. Установить программное обеспечение: веб-сервер, базу данных, интерпретатор, текстовый редактор и проверить, что всё работает правильно.
//2. Выполнить примеры из методички, разобраться, как это работает.
//3. Объясните, как работает данный код:

$a = 5;
$b = '05';

var_dump($a == $b); // Почему true?
//происходит преобразование b к int автоматически

var_dump((int) '012345'); // Почему 12345?
//происходит преобразование к int путем использования оператора (int)

var_dump((float) 123.0 === (int) 123.0); // Почему false?
//тройное равно - сравнивает еще и типы, а типы им заданы разные

var_dump((int) 0 === (int) 'hello, world'); // Почему true?
//'hello, world' - преобразуетсчя к целоому числу, а именно к 0. и тогда получается, что операнды одинаковые и по значению и по типу


//Дополнительные задания
//Используя только две переменные, поменяйте их значение местами.
//Например, если a = 1, b = 2, надо, чтобы получилось: b = 1, a = 2.
//Дополнительные переменные использовать нельзя

function swap(&$a, &$b) { //если a = 5, b = 12
  $a -= $b; // a = -7, b = 12
  $b += $a; // a = -7, b = 5
  $a = $b - $a; // a = 12, b = 5
}

$a = 1;
$b = 2;
echo "before swap: a = $a, b = $b";

swap($a, $b);

echo "after swap: a = $a, b = $b";
//Конец первого дз
