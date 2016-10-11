<?php
function getMax(...$arguments)
{
    $max = $arguments[0];
    foreach ($arguments as $element) {

        if ($element > $max) {
            $max = $element;
        }
    }

    return $max;
}
?>