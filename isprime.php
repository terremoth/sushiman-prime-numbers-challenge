<?php

declare(strict_types=1);
const EOL = PHP_EOL;

function generatePrimes(int $until) : void {
        
}

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

//echo "Arg: $argNumber".EOL;
//echo "is prime: $isArgAPrimeNumber".EOL;
//echo "Exit: $exit".EOL;
echo (int)$isArgAPrimeNumber.EOL;
exit( $exit );

//print_r($argv);
