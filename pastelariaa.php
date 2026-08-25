<?php

$nome = $_POST["nome"];
$endereco = $_POST["endereco"];
$celular = $_POST["celular"];
$pastel = $_POST["pastel"];
$quantidade = $_POST["quantidade"];

if ($pastel == 1) {
    $pastel = "Carne";
    $preco = 8.00;
}
else if ($pastel == 2) {
    $pastel = "Queijo";
    $preco = 7.00;
}
else if ($pastel == 3) {
    $pastel = "Pizza";
    $preco = 9.00;
}
else if ($pastel == 4) {
    $pastel = "Frango";
    $preco = 8.50;
}
else if ($pastel == 5) {
    $pastel = "Calabresa";
    $preco = 9.00;
}

$total = $preco * $quantidade;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do seu pedido</title>
</head>

<body>

    <div style="background-color: #6495ED; padding: 35px; text-align: center;">
        <h1 style="color: white;">Resultado do seu pedido</h1>
    </div>

    <h3 style="color: blue;">
        Pedido de : <?php echo $nome; ?>
    </h3>

    <h3 style="color: blue;">
        Celular: <?php echo $celular; ?>
    </h3>

    <h3 style="color: blue;">
        Pastel escolhido: <?php echo $pastel; ?>
    </h3>

    <h3 style="color: blue;">
        Preço do Pastel R$: <?php echo number_format($preco, 2, ',', '.'); ?>
    </h3>

    <h3 style="color: blue;">
        Quantidade: <?php echo $quantidade; ?>
    </h3>

    <h2 style="color: red;">
        Total a pagar R$: <?php echo number_format($total, 2, ',', '.'); ?>
    </h2>

</body>
</html>