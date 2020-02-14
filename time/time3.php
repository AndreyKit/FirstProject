<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $time_start = microtime(1);
    for ($i=0; $i < 1000; $i++) {
        // Ничего не делать. Повторить 100 раз
    }
    $time_end = microtime(1);
    $time = $time_end - $time_start;
    echo "Ничего не делать $time секунд\n";
    ?>
</body>
</html>