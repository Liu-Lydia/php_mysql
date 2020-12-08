<?php

//$a = isset($_GET["a"]) ? $GET["a"] : "";
$a = $_GET["a"] ?? "";
echo "$a <br>";

// ?a =hh&b=76%45602
$b = isset($_GET["b"])? intval($_GET["b"]) : 222;

echo $b;