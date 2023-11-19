<?php

$x = 10;
$foo = function ($m){
    global $x;
    return $m * $x;
};
echo $foo($x), "\n";

$bar = function ($m) use ($x) {
    return $m * $x;
};

echo $bar($x), "\n";


