<?php
header('Content-Type:text/plain');

define('MY_CONST',3);//盡量不要這樣用
$c = 100;
function multi($a,$b=10){
    global $c ;//不要這樣用
    //return $a*$b*$c
    return $a*$b*MY_CONST;
}

echo multi(5);
echo "\n";

echo multi(7,5);