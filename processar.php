<?php
$nome = $_POST['nome'] ;
$cidade = $_POST['cidade'] ;
$celular = $_POST['celular'] ;
$produto = $_POST['produto'] ;
$pagamento = $_POST['pagamento'];

$precos = [
    'Fone de ouvido' => 250.00,
    'Smartwatch' => 800.00,
    'Caixa de som' => 500.00
];

$preco_original = $precos[$produto];

$descontos = [
    'PIX' => 0.10,
    'Cartão' => 0.00,
    'Boleto' => 0.05
];

$percentual_desconto = $descontos[$pagamento];
$valor_desconto = $preco_original * $percentual_desconto;
$valor_final = $preco_original - $valor_desconto;
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Pedido</title>
</head>
<body>
<?php
$nome = $_POST['nome'];
$cidade = $_POST['cidade'];
$celular = $_POST['celular'] ;
$produto = $_POST['produto'] ;
$pagamento = $_POST['pagamento'];

$precos = [
    'Fone de ouvido' => 250.00,
    'Smartwatch' => 800.00,
    'Caixa de som' => 500.00
];

$preco_original = $precos[$produto] ;

$descontos = [
    'PIX' => 0.10,
    'Cartão' => 0.00,
    'Boleto' => 0.05
];

$percentual_desconto = $descontos[$pagamento] ;
$valor_desconto = $preco_original * $percentual_desconto;
$valor_final = $preco_original - $valor_desconto;
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Pedido</title>
    <link rel="stylesheet" href="loja.css">
</head>
<body>
    <h2>Resumo do Pedido</h2>
    <p><strong>Pedido de:</strong> <?php echo ($nome); ?></p>
    
    <p><strong>Cidade:</strong> <?php echo($cidade); ?></p>

    <p><strong>Telefone:</strong> <?php echo ($celular); ?></p>

    <p><strong>Produto escolhido:</strong> <?php echo ($produto); ?></p>

    <p><strong>Preço do produto:</strong> R$ <?php echo number_format($preco_original, 2, ',', '.'); ?></p>

    <p><strong>Forma de pagamento:</strong> <?php echo($pagamento); ?></p>

    <p><strong>Valor do desconto:</strong> R$ <?php echo number_format($valor_desconto, 2, ',', '.'); ?></p>

    <p><strong>Valor final:</strong> R$ <?php echo number_format($valor_final, 2, ',', '.'); ?></p>
</body>
</html>
</body>
</html>