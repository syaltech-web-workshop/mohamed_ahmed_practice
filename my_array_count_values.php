<?php


function my_array_count_values($array)
{
    $counts = [];

    foreach ($array as $key => $value) {
        if (!is_int($value) && !is_string($value)) {
            trigger_error('Non numeric nor string value', E_USER_WARNING);
            continue;
        }
        if (empty($counts[$value])) { // if it's the first time i meet this value
            $counts[$value] = 0;
        }
        $counts[$value]++;
    }

    return $counts;
}

print_r(my_array_count_values(["0", 0]));