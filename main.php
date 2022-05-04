<?php

const EOL = PHP_EOL;

echo "╔══════════════════════════╗".EOL;
echo "║  Sushiman Prime Numbers  ║".EOL;
echo "╚══════════════════════════╝".EOL;
echo "       By @terremoth        ".EOL;
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━".EOL;

$from = "1".str_repeat("0", ((int)$argv[1])-1);
$to = "9".str_repeat("9", ((int)$argv[1])-1);

echo "length: $argv[1] | From: $from | To: $to".EOL;

echo system("php genprimes.php $from $to").EOL;
