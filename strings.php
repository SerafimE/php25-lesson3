<?php

$string = 'Привет <b>Netology</b><script>oalert(123);o</script>!';

$result = substr($string, 6, 8);

$result = str_replace(['Netology', '!'], ['World', '?'], $string);
//var_dump($result);

$result = strpos($string, 'o', 24);

var_dump($result);

$result = strlen($string);
//var_dump($result);


$result = strip_tags($string, '<b>');
$salt = 'something';
$result = md5($salt . $string);

$result = md5('123456');

//var_dump($result);