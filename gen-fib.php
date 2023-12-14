
<?php

function add_gen($gen1, $gen2) {
    while (true) {
        yield (gen1->current() + gen2->current());
        gen1->next();
        gen2->next();
    }
}

$make_fib = function() use ($fib_stream){
    yield 1;
    yield 1;
    $gen1 = $fib_stream;
    $gen2 = $fib_stream;
    $gen2->next();
    $res = add_gen($gen1, $gen2);
    foreach ($res as $i){
        yield $i;
    }
};

$fib_stream = $make_fib();

foreach ($fib_stream as $i) {
    echo $i, "\n";
}
