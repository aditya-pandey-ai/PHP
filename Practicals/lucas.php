<?php
function generateLucas($n) {
    if ($n == 0) {
        return 2; // Lucas(0) = 2
    } elseif ($n == 1) {
        return 1; // Lucas(1) = 1
    } else {
        return generateLucas($n - 1) + generateLucas($n - 2); // Recursive case
    }
}

$number_of_terms = 10;
echo "Lucas Sequence for the first $number_of_terms terms: ";
for ($i = 0; $i < $number_of_terms; $i++) {
    echo generateLucas($i) . " ";
}
?>
