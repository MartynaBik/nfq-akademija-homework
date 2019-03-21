<?php

namespace {

    function calculateHomeWorkSum(...$numbers)
    {
        $sum = null;

        foreach ($numbers as $key => $el) {
            $sum += $el;
        }

        return $sum;
    }
}

namespace Nfq\Akademija\Not_Typed {

    function calculateHomeWorkSum(...$numbers): int
    {
        $sum = null;

        foreach ($numbers as $key => $el) {
            $sum += $el;
        }

        return $sum;
    }
}

namespace Nfq\Akademija\Soft {

    function calculateHomeWorkSum(int...$numbers): int
    {
        $sum = null;

        foreach ($numbers as $key => $el) {
            $sum += $el;
        }

        return $sum;
    }
}
