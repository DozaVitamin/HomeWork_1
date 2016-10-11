<?php
function fill_keys_array(array $keys , $value)
{
    $arrayToReturn = array();
    foreach ($keys as $key) {
        $arrayToReturn[$key] = $value;
    }

    return $arrayToReturn;
}
?>