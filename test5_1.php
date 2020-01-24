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
    

   

    $f=fopen("enter.txt","r+");
    flock($f,LOCK_EX);
    $count=fread($f,100);
    flock($f,LOCK_UN);
    fclose($f);
    
    echo "Количество скачек/кликов: $count"; 
    ?>
   
</body>
</html>