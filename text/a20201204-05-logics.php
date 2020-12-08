<?php

$a = 7 || 5;
$b = 0 || 5;
var_dump($a);
echo "\$a=$a,\$b=$b";

echo "<br>";
var_dump($a);
$a = 7 or 5;
$b = 0 or 5;

echo "\$a=$a,\$b=$b";

echo "<br>";
var_dump($a);
$a = 7 and 5;
$b = 0 and 5;

echo "\$a=$a,\$b=$b";

echo "<br>";
var_dump($a = 7 and $b = 0);


