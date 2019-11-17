<?php

declare(strict_types=1);

$y = 1;

$summ = fn($x) => fn($z) => $x + $z;

assert(9, $summ(5)(4));
assert( 15, $summ(5)($summ(4)(6)));

echo 'all Ok';