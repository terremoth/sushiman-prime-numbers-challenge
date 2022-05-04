<?php

const EOL = PHP_EOL;

function isPrime(int $number) : bool {

    if ($number === 2) return true;
    if ($number < 2) return false;
    if ($number % 2 === 0) return false;

    for ($i = $number-2; $i > 1; $i = $i-2) {

        if ($number % $i == 0) return false;
    }

    return true;
}

$argNumber = (int)$argv[1];
$isArgAPrimeNumber = isPrime($argNumber);
$exit = (int)!$isArgAPrimeNumber;

echo (int)$isArgAPrimeNumber.EOL;
exit( $exit );
