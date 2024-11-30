<?php

$arr = [
    'Московская' => [
        'Москва',
        'Зеленоград',
        'Клин',
        'Раменское',
    ],
    'Ленинградская' => [
        'Санкт-Петербург',
        'Всеволожск',
        'Павловск',
        'Кронштадт',
    ]
];


foreach ($arr as $distr => $cities)
{
    echo $distr . ' область:' . PHP_EOL;
    foreach ($cities as $key => $value)
    {
        echo $value . PHP_EOL;
    };
}

// docker run --rm -v ${pwd}//:/cli php:8.2-cli php /cli/task3.php