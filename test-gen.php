
<?php

function make_int() {
    $i = 0;
    while(true) {
        yield $i;
        $i = $i + 1;
    }
}

function times_two($gen){
    foreach ($gen as $i) {
        yield $i * 2;
    }
}

$m = times_two(make_int());
for ($j=0; $j < 10; $j++) {
    echo $m->current(), "\n";
    $m->next();
}
