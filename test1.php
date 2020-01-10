<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>





     <!-- <?php
    $a = 5;
    if ($a == 5) : ?>
        A is equal 5
    <?php endif; ?>
    <?php
    $a = 5;
    if ($a == 5) { ?>
        A is equal 5
    <?php }; ?>
    <?php

    for ($i = 1; $i <= 10; $i++) {
        echo "$i<br >";
    }
    ?>
    <?php

    for ($i = 1;; $i++) {

        if ($i > 10) {
            break;
        }
        echo "$i<br>";
    }

    ?>
    <?php

    $i = 1;
    for (;;) {
        if ($i > 10) {
            break;
        }
        echo $i;
        $i++;
    }


    ?> 
    <?php
    $s = 0;
    
    for ($i = 1; $i <= 10; $i++) {
        $s = $s + $i;
       
    }
     echo $s
    ?> -->
    <?php 
$arr = array("null","one","two");

foreach ($arr as $key => $value){
    echo "key: $key; valye: $value<br/>\n";
}
$arr = array("one","two","three");

foreach ($arr as $value){
    echo "Value: $value<br/>\n";
}
    ?>
</body>

</html>