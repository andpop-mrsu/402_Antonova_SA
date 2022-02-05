<?php

namespace App\Test;

use App\Fraction;

function runTest()
{
    $m1 = new Fraction(4, 16);
    echo $m1 . "\n"; // 1/4

    $m2 = new Fraction(101, 8);
    echo $m2 . "\n"; // 12'5/8

    $m3 = $m1 -> add($m2);
    echo $m3 . "\n"; // 12'7/8

    $m4 = new Fraction(123, 32);
    $m5 = $m1 -> sub($m4);
    echo $m5 . "\n"; // -3'19/32

    $m6 = new Fraction(23, 123);
    echo $m6 . "\n"; // 23/123
    echo $m6 -> getNumer() . " - это числитель\n"; // 23
    echo $m6 -> getDenom() . " - это знаменатель\n"; // 123

    $m7 = $m1 -> sub($m2);
    echo $m7 . "\n"; // -12'3/8
}