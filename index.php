<?php
  $var1=1;
  $name='Name';
  $array=[
    0=>'index1',
    1=>'index2',
    2=>'index3',
    4=>'index4',
  ];
  var_dump($array[0]);
  
?>

<!DOCTYPE html>
<html lang="en">  

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <h1>Hola</h1>
  <P>VARIABLES</P>
  <h1><?php echo $name;?> </h1>
  <P>ARRAY</P>
  <h2><?php echo $array[3];?> </h2>
</body>

</html>