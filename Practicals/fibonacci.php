<?php
function generateFibonacci($n) {
    if ($n <= 1) {
        return $n; // Base case: Fibonacci(0) = 0, Fibonacci(1) = 1
    } else {
        return generateFibonacci($n - 1) + generateFibonacci($n - 2); // Recursive case
    }
}

$terms = 10;
echo "Fibonacci Sequence for the first $terms terms: ";
for ($i = 0; $i < $terms; $i++) {
    echo generateFibonacci($i) . " ";
}
?>
