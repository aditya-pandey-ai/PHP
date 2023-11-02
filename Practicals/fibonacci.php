<?php
function generateFibonacci($n) {
    if ($n <= 1) {
        return $n;
    } else {
        return generateFibonacci($n - 1) + generateFibonacci($n - 2);
    }
}

$terms = 10;
for ($i = 0; $i < $terms; $i++) {
    echo generateFibonacci($i) . " ";
}
?>
