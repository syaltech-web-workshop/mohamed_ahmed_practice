<?php


function my_array_fill($start_index, $num, $value)
{
    $array = [];
    $end = $start_index + $num;
    if ($start_index < 0) {
        $array[$start_index] = $value;
        $start_index = 0;
        $end = $num - 1;
    }
    for ($i = $start_index; $i < $end; $i++) {
        $array[$i] = $value;
    }

    return $array;
}


print_r(my_array_fill(5, 6, "hello"));