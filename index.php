<?php

require_once __DIR__ . '/vendor/autoload.php';

$root = 'CalculateHomeWorkSum: ';
$soft = 'Nfq\Akademija\Soft\CalculateHomeWorkSum: ';
$strict ='Nfq\Akademija\Strict\CalculateHomeWorkSum: ';
$not_typed = 'Nfq\Akademija\Not_Typed\CalculateHomeWorkSum: ';


dump($root . calculateHomeWorkSum(3, 2.2, '1')); //ats: 6.2
dump($not_typed . Nfq\Akademija\Not_Typed\calculateHomeWorkSum(3, 2.2, '1'));
dump($soft . Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, '1'));
dump($strict . Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, '1'));
