<?php

$a = 'Просто строка';

$b = "Строка: $a";
$c = "Строка: {$a}";

$d = <<<PHP
Строка
Строка
Строка
Строка
PHP;

$e = "Д\"артаньян";

$f = <<<HTML11
netology hello
HTML11;

var_dump($f);


$result = '3.14' + 3.14;
var_dump($result);