<?php

function isIsomorphic($s, $t) {
    $s_length = strlen($s);
    $t_length = strlen($t);
    $smap = [];
    $tmap = [];
    $equivalent = true;

    if ($s_length !== $t_length) return false;
    
    for ($i = 0; $i < $s_length; $i++) {

        if (isset($smap[$s[$i]])) {

            if( $smap[$s[$i]] !== $t[$i]) {
                $equivalent = false;
                break;
            }
        }else{ 
            if (isset($tmap[$t[$i]])) {
                $equivalent = false;
                break;
            }else{
                $smap[$s[$i]] = $t[$i];
                $tmap[$t[$i]] = true;
            }
        }
    }

    return $equivalent;
}

echo isIsomorphic("egg", "add");
echo isIsomorphic("foo", "bar");
