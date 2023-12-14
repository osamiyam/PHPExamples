<?php

namespace university\meijo;

$xyz = 23;

function foo($x) {
    return $x * $x;
}

namespace mm;

echo university\meijo\foo($xyz), "\n";



