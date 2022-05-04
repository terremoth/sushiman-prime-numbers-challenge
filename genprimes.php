<?php

$start = 1;
$until = (int)$argv[1];

if (isset($argv[2])) {
    $start = $argv[1];
    $until = $argv[2];
}


for ($i = $start; $i <= $until; $i++) {
    $resp = (bool)trim(`php isprime.php $i`);
    if ($resp) echo $i.PHP_EOL;
}

exit(0);
