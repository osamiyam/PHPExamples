<?php

function map($func, $lst) {
    $m = [];
    foreach ($lst as $i) {
        array_push($m, $func($i));
    }
    return $m;
}

function array2s($lst) {
    $s = "[";
    for ($i = 0; $i < count($lst); $i++) {
        $s = $s . (($i == 0)?"":", ") . $lst[$i];
    }
    $s .= "]";
    return $s;
}

$ans = map((function($x) {return $x * $x;}), [2, 3, 4]);
echo array2s($ans), "\n";


