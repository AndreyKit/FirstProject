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
    $makefoo = true;
    bar();
    if ($makefoo) {
        function foo()

        {
            echo "I don't exist";
        }
    }
if ($makefoo) foo();
 function bar () {
    echo" I exist emmediatly.\n";
}
    ?> 
    
</body>

</html>