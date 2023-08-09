<?php

function getLargestElement($set, $position, $from = 'end') {

    $from === 'start' ? sort($set) : rsort($set);

    return $set[$position - 1] ?? false;
}

$test = [3, 2, 1, 5, 6, 4];

echo getLargestElement($test, 2);
echo getLargestElement($test, 3, 'start');
echo getLargestElement($test, 1);
echo getLargestElement($test, 0);
echo getLargestElement($test, 9);
echo getLargestElement($test, -1);
