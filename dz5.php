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
    $a=$_POST['num1'];
    $b=$_POST['num2'];
    echo $c="$a * $b"."=". $a*$b ."\n" ;
    $fp=fopen("call.txt","a+");
    fwrite($fp,$c."\n"); 
    fclose($fp);
    ?>
</body>
</html>