<?php
function swapNumbers(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$a = 10;
$b = 20;

echo "Before Swap: a = $a, b = $b<br>";

swapNumbers($a, $b);

echo "After Swap: a = $a, b = $b";
?>
