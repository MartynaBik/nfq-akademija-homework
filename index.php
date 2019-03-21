<?php

require_once __DIR__ . '/vendor/autoload.php';

$root = 'CalculateHomeWorkSum: ';
$soft = 'Nfq\Akademija\Soft\CalculateHomeWorkSum: ';
$strict ='Nfq\Akademija\Strict\CalculateHomeWorkSum: ';
$not_typed = 'Nfq\Akademija\Not_Typed\CalculateHomeWorkSum: ';

echo($root . calculateHomeWorkSum(3, 2.2, '1'). PHP_EOL);
echo($not_typed . Nfq\Akademija\Not_Typed\calculateHomeWorkSum(3, 2.2, '1'). PHP_EOL);
echo($soft . Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, '1'). PHP_EOL);
echo($strict . Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, '1'). PHP_EOL);
