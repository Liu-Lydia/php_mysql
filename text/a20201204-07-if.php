<?php
$age = isset($_GET['age']) ? intval($_GET['age']) : 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php if ($age < 18) { ?>
        <img src="./img/01.jpg" alt="">
    <?php } else { ?>
        <img src="./img/02.jpg" alt="">
    <?php } ?>

    <!-- <?php if($age < 18): ?>
        <img src="./img/01.jpg" alt="">
    <?php else: ?>
        <img src="./img/02.jpg" alt="">
    <?php endif; ?> -->

</body>

</html>