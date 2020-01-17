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
  $n = 4;
  $factorial = 1;
   
  for ($i = 1; $i <= $n; $i++) {
      $factorial *= $i;
  }
  echo $factorial;
  ?>
</body>
</html>