<?php

$name = "Bill";

echo isset($name) ? "true" : "false";

echo "<br>";

if (isset($name)){
    echo "$name <br>";
}
else{
    echo "noname <br>";
}

echo "<br>";

echo isset($name)?$name :"noname";

echo "<br>";

echo $name ?? "noname" ;//php7