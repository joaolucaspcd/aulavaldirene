<html>
<body>
    <h1>pedido finalizado</h1>
    
    <?php

    $NOME = $_POST["Nome"];
    $PIZZA= $_POST["pizza"];
    $quantidade = $_POST["quantidade"];
     $preco= $_POST["preco"];

     $valor_total = $quantidade * $preco;

     echo("olá, seja bem vindo a pizzaria do boc" .$nome. "qual sabor de pizza ira querer:" .$pizza. "<br>");
    echo("o valor total do seu pedido é:" .$valor_total. "<br>");
      ?>
</body>
</html>
 