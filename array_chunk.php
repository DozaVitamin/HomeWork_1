<?php
function chunk_array(array $array, $size, $preserve_keys = false )
{
    if($size<1 || is_null($size) || is_array($size) || is_object($size)){
        return null;
    }

    $arrayToReturn = array();
    $index = 0;
    for($i=0; $i < count($array); $i++){
        if($i%$size === 0 && $i != 0){
            $index++;
            if($preserve_keys){
                $arrayToReturn[$index][$i] = $array[$i];
            }else {
                $last = count($arrayToReturn[$index]);
                $arrayToReturn[$index][$last] = $array[$i];
            }
        }else{
            if($preserve_keys){
                $arrayToReturn[$index][$i] = $array[$i];
            }else {
                $last = count($arrayToReturn[$index]);
                $arrayToReturn[$index][$last] = $array[$i];
            }
        }
    }


    //хех

    return $arrayToReturn;
}
?>