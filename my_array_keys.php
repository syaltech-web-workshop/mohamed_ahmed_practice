<?php

function my_array_keys($array, ...$args)
{
    if (count($args) > 2) {
        trigger_error('my_array_keys expects at most 3 args', E_USER_WARNING);
        return;
    }

    $new_array = [];
    // searchValue ---- $args[0]
    // strict ---- $args[1]
    foreach ($array as $key => $value) {
        // if no searchValue is passed to the function
        if (count($args) === 0) {
            $new_array[] = $key;
        } elseif (empty($args[1]) && $value == $args[0]) { // if strict is not passed or passed a falsy value
            $new_array[] = $key;
        } elseif ($value === $args[0]) { // if strict is passed truthy value
            $new_array[] = $key;
        }
    }

    return $new_array;
}

$a = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'a-three' => '3'
];

print_r(my_array_keys($a, 3, true));