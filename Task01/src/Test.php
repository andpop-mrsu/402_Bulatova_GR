<?php

namespace App\Test;

use App\Fraction;

function runTest()
{
    $m1 = new Fraction(99, 100);
    echo $m1 . "\n";     // 99/100

    $m2 = new Fraction(5, 13);
    $m3 = $m1->add($m2);
    echo $m3 . "\n";      // 1'487/1300

    $m4 = new Fraction(-5, 25);
    $m5 = $m4->sub($m2);
    echo $m5 . "\n";     // -38/65

    $m6 = new Fraction(228, 544);
    $m7 = $m1->sub($m6);
    echo $m7 . "\n"; // 1941/3400

    $m8 = new Fraction(23, 11);
    $m9 = $m7->add($m8);
    echo $m9 . "\n";     // 2'24751/37400

    echo $m9->getNumer() . "\n"; //99551
    echo $m9->getDenom() . "\n"; //37400
}