<?php
function generateLucas($n) {
    if ($n == 0) {
        return 2;
    } elseif ($n == 1) {
        return 1;
    } else {
        return generateLucas($n - 1) + generateLucas($n - 2);
    }
}

$number_of_terms = 10;
for ($i = 0; $i < $number_of_terms; $i++) {
    echo generateLucas($i) . " ";
}
?>
