<?php

$num = rand(1, 5);

if ($num == 1) {
    $result = '大吉';
} else if ($num == 2) {
    $result = '中吉';
} else if ($num == 3) {
    $result = '小吉';
} else if ($num == 4) {
    $result = '凶';
} else if ($num == 5) {
    $result = '大凶';
} else {
    $result = 'エラー';
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>今日の運勢は<?= $result ?></h1>

</body>

</html>