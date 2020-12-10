<?php
if (isset($_COOKIE['mycookie'])) {
    $mys = $_COOKIE['mycookie'] + 1;
} else {
    $mys = 1;
}

setcookie("mycookie", $mys);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?= $mys ?>
</body>

</html>