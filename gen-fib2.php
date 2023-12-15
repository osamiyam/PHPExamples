
<?php

function make_fib() {
    list($a, $b) = [1, 1];
    while (true) {
        yield $a;
        $tmp = $b;
        $b = $a + $b;
        $a = $tmp;
    }
}

function work($n) {
    $gen = make_fib();
    for ($i = 0; $i < $n; $i++) {
        echo $i, " ", $gen->current(), "\n";
        $gen->next();
    }
}

work(30);

