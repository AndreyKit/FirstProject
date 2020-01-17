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
  $n = 6;
  $d=0;
  $e=1;
  $f=3;
  $factorial = 1;
   
  for ($i = 1; $i <= $n; $i++) {
      $factorial *= $i;
  }
  echo $factorial;
  ?>
</body>
</html>