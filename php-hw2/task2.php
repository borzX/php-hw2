<?php

$a = 20;
$b = 5;

function mathOperation($arg1, $arg2, $operation){
    if ($arg2 === 0){
        $getEcho = "Деление на 0";
        return $getEcho;
    }
    else{
        switch ($operation) {
            case '+':
                return $arg1 + $arg2;
            case '-':
                return $arg1 - $arg2;
            case '*':
                return $arg1 * $arg2;
            case '/':
                return $arg1 / $arg2;        
        }
    }

};

$resultSum = mathOperation($a, $b, '+');
$resultDec = mathOperation($a, $b, '-');
$resultMult = mathOperation($a, $b, '*');
$resultDiv1 = mathOperation($a, $b, '/');
$resultDiv2 = mathOperation($a, 0, '/');

echo($resultSum). PHP_EOL;
echo($resultDec). PHP_EOL;
echo($resultMult). PHP_EOL;
echo($resultDiv1). PHP_EOL;
echo($resultDiv2). PHP_EOL;


// docker run --rm -v ${pwd}//:/cli php:8.2-cli php /cli/task2.php