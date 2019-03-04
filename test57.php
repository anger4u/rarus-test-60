<?php

function cd($current, $dest){

    $currArr = explode("/", $current);
    $destArr = explode("/", $dest);

    if (empty($destArr[0])) {
        return $dest;
    }

    foreach($destArr as $folder){
        if($folder==".."){
            array_pop($currArr);
		} elseif($folder=="."){
            continue;
        } else{
            $currArr[] = $folder;
        }
    }
    $result = implode("/", $currArr);

    return $result;
}