<!DOCTYPE html>
<html lang="en">
<?php
        $a=10;
        $b=5;

        if ($b != 0) {
            $portion = $a / $b;
            } else {
                $portion = "nelze dělit nulou"
            
            }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>a =<?= $a ?> </p>
<p>b =<?= $b ?> </p>
<p>Součet: <?= $a ?> + <?= $b ?> = <?= $a + $b ?> </p>
<p>Rozdíl: <?= $a ?> - <?= $b ?> = <?= $a - $b ?> </p>
<p>Součin: <?= $a ?> x <?= $b ?> = <?= $a * $b ?> </p>
<p>Podíl: <?= $a ?> + <?= $b ?> = <?= $a / $b ?> </p>
</body>
</html>
