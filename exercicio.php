<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="exercicio.css">
</head>
<body>
    <h> numeros impares de 1 a 40:</h> <br>  <br> 

    <?php
     
       for ($i = 0; $i<=40; $i ++) {
           if ($i % 2 != 0)
           echo $i. "<br>" ;
       }
?>
</body>

</html>