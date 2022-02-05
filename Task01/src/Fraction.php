<?php

namespace App;

class Fraction
{
    private int $numerator;
    private int $denominator;
    public function __construct(int $numerator, int $denominator)
    {
        if ($denominator <= 0) {
            echo "Проверьте правильность введенных данных\n";
            exit();
        }
        $this -> ffraction($numerator, $denominator);
    }
    private function ffraction($numerator, $denominator)
    {
        $factor = $this -> gr($numerator, $denominator);
        if ($factor == 1) {
            $this -> numerator = $numerator;
            $this -> denominator = $denominator;
        } else {
            $this -> numerator = $numerator / $factor;
            $this -> denominator = $denominator / $factor;
        }
    }
    public function getNumer(): int
    {
        return $this -> numerator;
    }

    public function getDenom(): int
    {
        return $this -> denominator;
    }

    private function gr($a, $b): int
    {
        return ($a % $b) ? $this -> gr($b, $a % $b) : abs($b);
    }

    public function add(Fraction $frac): Fraction
    {
        $numerator = $frac -> denominator * $this -> numerator + $this -> denominator * $frac -> numerator;
        $denominator = $this -> denominator * $frac -> denominator;
        return new Fraction($numerator, $denominator);
    }

    public function sub(Fraction $frac): Fraction
    {
        $numerator = $frac -> denominator * $this -> numerator - $this -> denominator * $frac -> numerator;
        $denominator = $this -> denominator * $frac -> denominator;
        return new Fraction($numerator, $denominator);
    }
    private function convert(): string
    {
        $integerPart = intval($this -> numerator / $this -> denominator);
        $numerator = abs($this -> numerator % $this -> denominator);
        return $integerPart . "'" . $numerator . "/" . $this -> denominator;
    }
    public function __toString(): string
    {
        if (abs($this -> numerator) > $this -> denominator) {
            return $this -> convert();
        }

        return $this -> numerator . "/" . $this -> denominator;
    }
}