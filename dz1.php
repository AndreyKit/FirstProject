<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $money =2000;
    $precent = 11.5;
    $month = 1;
    for ($month = 1; $month <= 14; $month++)
    {$money = $money + (($money *$precent / 12)/100); }
   
    echo $money;
    ?>
</body>
</html>