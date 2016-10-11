<?php
function getMin(...$arguments)
{
    $min = $arguments[0];
    foreach ($arguments as $element) {

        if ($element < $min) {
            $min = $element;
        }
    }

    return $min;
}
?>