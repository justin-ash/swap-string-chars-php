<?php
swap("Computer", 1,4);
function swap($string, $pos, $place) {
    $arrstring = str_split($string);
    if(array_key_exists($pos, $arrstring) && array_key_exists($place, $arrstring)) {
        [$arrstring[$place], $arrstring[$pos]] = [$arrstring[$pos], $arrstring[$place]];
         echo implode("", $arrstring);
    } else {
        echo "Invalid Request";
    }
}