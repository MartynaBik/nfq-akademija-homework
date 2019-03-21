<?php
declare(strict_types=1);

namespace Nfq\Akademija\Strict {

    function calculateHomeWorkSum(int...$numbers): int
    {
        $sum = null;

        foreach ($numbers as $key => $el) {
            $sum += $el;
        }

        return $sum;
    }
}
