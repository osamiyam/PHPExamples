<?php

function fib($n) {
  if ($n <= 1) return 1;
  else return fib($n - 1) + fib($n - 2);
}

echo fib(38), "\n";
