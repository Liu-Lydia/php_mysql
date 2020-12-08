<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<div>

    <?php
    $ar = [];
    for($i=1;$i<=42;$i++){
        $ar[]=$i;
    }

    echo implode(',',$ar);
    echo "\n";

    shuffle($ar);
    echo implode(',',$ar);
    ?>

</div>

</body>

</html>