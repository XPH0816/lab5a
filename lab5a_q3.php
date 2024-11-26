<?php
function calculateArea(float $length, float $height): float
{
    return $length * $height;
}

$length = 4;
$height = 2;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><b>The area of a rectangle with a width of <?= $length ?> and <?= $height ?> is
            <?= calculateArea($length, $height) ?></b></p>
</body>

</html>