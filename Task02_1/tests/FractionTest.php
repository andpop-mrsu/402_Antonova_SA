<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Fraction;

class FractionTest extends TestCase
{
    public function testReduction()
    {
        $p = new Fraction(54, 544);
        $this -> assertSame(27, $p -> getNumer());
        $this -> assertSame(272, $p -> getDenom());
    }

    public function testTextRepresentation()
    {
        $p1 = new Fraction(4, 16);
        $p2 = new Fraction(101, 8);
        $this -> assertSame("1/4", $p1 -> __toString());
        $this -> assertSame("12'5/8", $p2 -> __toString());
    }

    public function testAdding()
    {
        $p1 = new Fraction(4, 16);
        $p2 = new Fraction(101, 8);
        $p3 = $p1 -> add($p2);
        $this -> assertEquals("12'7/8", $p3);
    }

    public function testSubtraction()
    {
        $p1 = new Fraction(4, 16);
        $p2 = new Fraction(123, 32);
        $p3 = $p1 -> sub($p2);
        $this -> assertEquals("-3'19/32", $p3);
        $p4 = new Fraction(101, 8);
        $p5 = $p1 -> sub($p4);
        $this -> assertEquals("-12'3/8", $p5);
    }
}
