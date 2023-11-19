<?php

function puts($x){
    echo $x, "\n";
}

function map($func, $lst) {
    $m = [];
    foreach ($lst as $i) {
        array_push($m, $func($i));
    }
    return $m;
}

function filter($func, $lst) {
    $m = [];
    foreach ($lst as $i) {
        if ($func($i))
            array_push($m, $i);
    }
    return $m;
}

function append_all($lsts) {
    $ans = [];
    foreach($lsts as $lst) {
        $ans = array_merge($ans, $lst);
    }
    return $ans;
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
puts(array2s($ans));
$ans2 = filter((function($x) {return ($x % 2 == 0);}),[2, 3, 4]);
puts(array2s($ans2));

function perm($lst) {
    $z = $lst;
    return
        map(function ($x) use($lst, $z)
        {return array_merge(
            [$x],
            filter(function ($y) use($x, $z) {return ($x != $y);}, $z));
        }, $z);
}

$x = perm([1, 2, 3, 4]);
foreach($x as $i) {
    puts(array2s($i));
}



