<?php

$a = 20;
$b = 5;

function culculate(int $arg1, int $arg2, string $operation) {
    if ($operation === "+") {
        $res = $arg1 + $arg2;
        return $res;
    }
    if ($operation === "-") {
        $res = $arg1 - $arg2;
        return $res;
    }
    if ($operation === "*") {
        $res = $arg1 * $arg2;
        return $res;
    }
    if ($operation === "/") {
        if ($arg2 === 0){
            $getEcho = "Деление на 0";
            return $getEcho;
        }
        else{
            $res = $arg1 / $arg2;
            return $res;
        }
        
    }
}

$resultSum = culculate($a, $b, '+');
$resultDec = culculate($a, $b, '-');
$resultMult = culculate($a, $b, '*');
$resultDiv1 = culculate($a, $b, '/');
$resultDiv2 = culculate($a, 0, '/');

echo($resultSum). PHP_EOL;
echo($resultDec). PHP_EOL;
echo($resultMult). PHP_EOL;
echo($resultDiv1). PHP_EOL;
echo($resultDiv2). PHP_EOL;


// docker run --rm -v ${pwd}//:/cli php:8.2-cli php /cli/task1.php