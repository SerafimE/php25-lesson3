<?php

/*$cities = [
    0 => 'Москва',
    7 => 'Рязань',
    'шесть' => 'Владивосток',
    'Нижний Новгород',
    4 => 'Тверь',
    'Бронницы',
];

$cities[8] = 'Великий Новгород';

unset($cities[0]);

echo '<pre>';
print_r($cities);*/


//echo $array['шесть'];
//
//for ($i = 0; $i < count($array); $i++) {
//    echo $i, PHP_EOL;
//    echo $array[$i], PHP_EOL;
//    echo 'next element<br>';
//}

//foreach ($cities as $city) {
//    //echo $key, PHP_EOL;
//    echo $city, PHP_EOL;
//    //echo 'next element<br>';
//}

//$names = [1 => 'Анна', 0 => 'Мария', 2 => 'Екатерина'];
//
//for ($i = 0; $i < count($names); $i++) {
//    echo $i, PHP_EOL;
//    echo $names[$i], PHP_EOL;
//}

//$countries = [
//    'Russia' => [
//        'Москва' => ['Арбат', 'Тверская'],
//        'Санкт-Петербург'
//    ],
//    'Germany' => ['Berlin', 'Munich'],
//    'USA' => ['Washington', 'San-Francisco'],
//];
//
//shuffle($countries);
//echo '<pre>';
//print_r($countries);
//foreach ($countries as $key => $cities) {
//    echo '<b>' . $key, '</b><br>';
//    foreach ($cities as $key => $city) {
//        if (is_array($city)) {
//            echo $key, '<br>';
//            foreach ($city as $street) {
//                echo '<i>', $street, '</i><br>';
//            }
//        }
//        else {
//            echo $city, '<br>';
//        }
//    }
//}

//$names = [1 => 'Анна', 0 => 'Мария', 2 => 'Екатерина'];

//$result = implode(', ', $names);
//
//echo $result;
//
//$result2 = explode(', ', $result);
//

//$result = array_search('Анн а', $names);
//$result = array_keys($names);
//$result = array_shift($names);
//$result = array_pop($names);

//shuffle($names);
//var_dump($result);
//echo '<pre>';
//print_r($names);


$names = [
    'Анна',
    'Мария',
    'Екатерина'
];

//$anna = $names[0];
//$maria = $names[1];
//$katya = $names[2];

list($anna, $maria, $katya) = $names;
echo '<pre>';
var_dump($anna);
var_dump($maria);
var_dump($katya);
