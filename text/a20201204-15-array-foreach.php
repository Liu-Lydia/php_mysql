<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div>
<pre>
<?php
$ar1 = [
           'name'=>'Nina',
           'age'=>30,
           100,
       ];

       $ar1[10]=50;
       $ar1[5]=90;

       foreach($ar1 as $k => $v){
           echo "$k : $v <br>";
       }
        ?>
</pre>
    </div>

</body>

</html>