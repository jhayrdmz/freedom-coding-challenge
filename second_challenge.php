<?php

function formNumber($set, $type = 'largest') {
    $length = count($set);

    for ($i = 0; $i < $length - 1; $i++) {
        for ($x = 0; $x < $length - $i - 1; $x++) {
            $option1 = $set[$x] . $set[$x + 1];
            $option2 = $set[$x + 1] . $set[$x];

            if (($type == 'largest' && $option1 < $option2) 
                || ($type == 'smallest' && $option1 > $option2)
            ) {
                $temp = $set[$x];
                $set[$x] = $set[$x + 1];
                $set[$x + 1] = $temp;
            }
        }
    }

    return implode('', $set);
}

$test = [2, 20, 24, 6, 8];

echo formNumber($test);
echo formNumber($test, 'smallest');
