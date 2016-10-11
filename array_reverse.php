<?php
function reverse_array(array $array, $preserve_keys = false )
{

    $arrayToReturn = array();
    for($i = count($array)-1;$i >=0; $i--){
        $last = count($arrayToReturn);
        if($preserve_keys){
            $arrayToReturn[$i] = $array[$i];
        }else {
            $arrayToReturn[$last] = $array[$i];
        }
    }

    return $arrayToReturn;
}
?>