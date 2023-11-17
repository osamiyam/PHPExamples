<?php

function foo() {
  $i = 0;
  while(true){
    yield $i;
    $i++;
  }
}

$m = foo();
foreach($m as $i){
  if ($i > 10) break;
  print $i;
  print "\n";
}
