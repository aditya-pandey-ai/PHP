<?php

namespace Practicals;

class Practical {
    // Static function to print "Hello, World!"
    public static function printHello() {
        echo "Hello, World!";
    }

    // Static function to add two numbers
    public static function add($num1, $num2) {
        return $num1 + $num2;
    }

    // Static function to generate a Fibonacci sequence
    public static function generateFibonacciSequence($n) {
        $sequence = [];
        if ($n > 0) {
            $sequence = [0];
            if ($n > 1) {
                $sequence[] = 1;
                for ($i = 2; $i < $n; $i++) {
                    $next = $sequence[$i - 1] + $sequence[$i - 2];
                    $sequence[] = $next;
                }
            }
        }
        return $sequence;
    }
}

?>
