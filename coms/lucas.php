<?php
function lucas($n) {
    if ($n == 0) {
        return 2;
    } elseif ($n == 1) {
        return 1;
    } else {
        return lucas($n - 1) + lucas($n - 2);
    }
}

// Generate and display the first 10 Lucas numbers
$number_of_terms = 10;
for ($i = 0; $i < $number_of_terms; $i++) {
    echo lucas($i) . " ";
}
?>
