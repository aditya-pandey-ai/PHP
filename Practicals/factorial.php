<?php
function calculateFactorial($n) {
    if ($n == 0) {
        return 1; // Base case: 0! = 1
    } else {
        return $n * calculateFactorial($n - 1); // Recursive case
    }
}

$number = 5;
$factorial = calculateFactorial($number);
echo "Factorial of $number is $factorial";
?>
