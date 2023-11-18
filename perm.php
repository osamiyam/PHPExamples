<?php

function init_array($n) {
    $used = [];
    for ($i = 0; $i < $n; $i += 1)
        $used[$i] = false;
    return $used;
}

function array2s($lst) {
    $s = "[";
    for ($i = 0; $i < count($lst); $i++) {
        $s = $s . (($i == 0)?"":", ") . $lst[$i];
    }
    $s .= "]";
    return $s;
}

function det($lst, $a, $used, $i, $n) {
    if ($i == $n) print(array2s($a) . "\n");
    else {
        for ($j = 0; $j < $n; $j += 1){
            if (! $used[$j]) {
                $used[$j] = true;
                $a[$i] = $lst[$j];
                det($lst, $a, $used, $i + 1, $n);
                $used[$j] = false;
            }
        }
    }
}

function perm($lst) {
    $n = count($lst);
    $a = [];
    $used = init_array($n);
    det($lst, $a, $used, 0, $n);
}

perm([1, 2, 3, 4, 5, 6]);
