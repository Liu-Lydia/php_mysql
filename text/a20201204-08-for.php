<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
    <?php for($i=1;$i<10;$i++):?>
    <tr>
        <?php for($k=1;$k<10;$k++):?>
        <td><?= $i*$k ?></td>
        <?php endfor;?>
    </tr>
    <?php endfor; ?>
</table>   

<?php
$a=7;
$b=10;

printf("---%d---%s---<br>",$a,$b);
printf("---%s---%s---<br>",$b,$a);
?>

</body>
</html>