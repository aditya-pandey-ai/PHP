<?php
function generateFibonacci($n) {
    $fibonacci = [0, 1]; // Initialize the first two Fibonacci numbers

    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}

$n = 10; // Number of Fibonacci numbers to generate
$fibonacciSequence = generateFibonacci($n);

echo "Fibonacci Sequence of $n numbers: ";
foreach ($fibonacciSequence as $number) {
    echo $number . " ";
}
?>
