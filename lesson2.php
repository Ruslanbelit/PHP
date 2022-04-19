<!--Савин Руслан-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<!-- Задача 1. Объявить две целочисленные переменные a и b и задать им произвольные начальные значения. Затем
написать скрипт, который работает по следующему принципу:
* если a и b положительные, вывести их разность;
* если а и b отрицательные, вывести их произведение;
* если а и b разных знаков, вывести их сумму;
ноль можно считать положительным числом. -->
<script>
var a = 5;
var b = 3;
if (a > 0 && b > 0){
x = a - b;
alert(x);
} else if (a < 0 && b < 0){
x = a * b;
alert (x);
}
else if (a > 0 && b < 0 || a < 0 && b > 0) {
x = a + b;
alert (x);
}
</script>

<!-- Задача 2. Присвоить переменной а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от a до 15. -->
<script>
a = +prompt ('Введите число от 1 до 15');
switch (a) {
case 1:
alert ( 'Ваше число 1');
break;
case 2:
alert ( 'Ваше число 2');
break;
case 3:
alert ( 'Ваше число 3');
break;
case 4:
alert ( 'Ваше число 4');
break;
case 5:
alert ( 'Ваше число 5');
break;
case 6:
alert ( 'Ваше число 6');
break;
case 7:
alert ( 'Ваше число 7');
break;
case 8:
alert ( 'Ваше число 8');
break;
case 9:
alert ( 'Ваше число 9');
break;
case 10:
alert ( 'Ваше число 10');
break;
case 11:
alert ( 'Ваше число 11');
break;
case 12:
alert ( 'Ваше число 12');
break;
case 13:
alert ( 'Ваше число 13');
break;
case 14:
alert ( 'Ваше число 14');
break;
case 15:
alert ( 'Ваше число 15');
break;
}
</script>


<!-- Задача 3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return. -->
<script>
var a = 2;
var b = 3;

function plus(a, b) {
return a + b;
}

function minus(a, b) {
return a - b;}

function div (a, b) {
return a / b;
}

function mult (a, b) {
return a + b;
}
</script>

<!-- Задача 6. Реализовать функцию с тремя параметрами: function mathOperation(arg1, arg2, operation), где arg1,
arg2 – значения аргументов, operation – строка с названием операции. В зависимости от переданного 
значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и 
вернуть полученное значение (использовать switch). -->

<script>

function mathOperation(arg1, arg2, operation){
switch(operation){
case 'сложение':
return arg1 + arg2;
break;
case 'вычитание':
return arg1 - arg2;
break;
case 'деление':
return arg1 / arg2;
break;
case 'умножение':
return arg1 * arg2;
break;
}
}

</script>

</body>
</html>
<!--Задание 5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML шаблон, вывести
текущий год в подвале при помощи встроенных функций PHP.-->

<html>
<head>
    <title>Title</title>
    <meta charset="utf-8">
</head>
<body>
<h1>Задание №5</h1>
<h3>Посмотреть на встроенные функции PHP.<br>
    Используя имеющийся HTML-шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.</h3>
<?php
    $year = date('Y');
    echo <<<"html"
       <header style="height: 150px;background-color:blue;"></header> 
<main style="height: 300px; background-color:red;">
        
</main>
<footer style="text-align: center; font-size: 30px"> $year Copyright</footer>
html;
?>
</body>
</html>