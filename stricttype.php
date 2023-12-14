<?php
declare(strict_types=1);
namespace university;

function add(int $a, int $b) {
    return $a + $b;
}

namespace meijo;

echo add(23, 56), "\n";
