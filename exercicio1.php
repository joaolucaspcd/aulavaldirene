<?php
// Coleta os dados do POST com segurança
$nome = isset($_POST['nome']) ? htmlspecialchars($_POST['nome']) : "Não informado";
$salario = isset($_POST['salario']) ? (float)$_POST['salario'] : 0;

// Inicializa as variáveis de cálculo
$aumento = 0;
$salario_ajustado = $salario;
$situacao = "";
$cor_status = "#666"; // Cor padrão

// Lógica de negócio (Aumento de 30% para quem ganha menos de 1621)
if ($salario > 0 && $salario < 1621) {
    $aumento = $salario * 0.30;
    $salario_ajustado = $salario + $aumento;
    $situacao = "VOCÊ TEM DIREITO AO AUMENTO!";
    $cor_status = "#155724"; // Verde
    $fundo_status = "#d4edda";
} else {
    $situacao = "VOCÊ NÃO TEM DIREITO AO AUMENTO";
    $cor_status = "#856404"; // Amarelo/Laranja escuro
    $fundo_status = "#fff3cd";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Reajuste</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .result-card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-top: 0;
        }
        .info-row {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }
        .info-row strong { color: #555; }
        .status-box {
            margin-top: 20px;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            font-weight: bold;
            color: <?php echo $cor_status; ?>;
            background-color: <?php echo $fundo_status; ?>;
        }
        .btn-voltar {
            display: block;
            text-align: center;
            margin-top: 25px;
            text-decoration: none;
            color: #2563eb;
            font-weight: 600;
        }
        .btn-voltar:hover { text-decoration: underline; }
    </style>
</head>
<body>

<div class="result-card">
    <h1>Resultado</h1>
    
    <div class="info-row">
        <strong>Nome:</strong> <span><?php echo $nome; ?></span>
    </div>
    <div class="info-row">
        <strong>Salário Base:</strong> <span>R$ <?php echo number_format($salario, 2, ',', '.'); ?></span>
    </div>
    <div class="info-row">
        <strong>Valor do Aumento:</strong> <span>R$ <?php echo number_format($aumento, 2, ',', '.'); ?></span>
    </div>
    <div class="info-row" style="border-bottom: none;">
        <strong>Salário Reajustado:</strong> <strong>R$ <?php echo number_format($salario_ajustado, 2, ',', '.'); ?></strong>
    </div>

    <div class="status-box">
        <?php echo $situacao; ?>
    </div>

    <a href="index.php" class="btn-voltar">← Realizar novo cálculo</a>
</div>

</body>
</html>