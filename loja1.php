<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Pedido</title>
    <link rel="stylesheet" href="loja.css">
</head>
<body>
  <h1>loja jota L </h1>
    <form action="processar.php" method="POST">
        <label for="nome">Nome do cliente:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="cidade">Cidade:</label><br>
        <input type="text" id="cidade" name="cidade" required><br><br>

        <label for="celular">Celular:</label><br>
        <input type="tel" id="celular" name="celular" required><br><br>

        <label for="produto">Produto:</label><br>
        <select id="produto" name="produto" required>
            <option value="Fone de ouvido">Fone de ouvido - R$ 250,00</option>
            <option value="Smartwatch">Smartwatch - R$ 800,00</option>
            <option value="Caixa de som">Caixa de som - R$ 500,00</option>
        </select><br><br>

        <label>Forma de pagamento:</label><br>
        <input type="radio" id="pix" name="pagamento" value="PIX" required>
        <label for="pix">PIX - desconto de 10%</label><br>

        <input type="radio" id="cartao" name="pagamento" value="Cartão">
        <label for="cartao">Cartão - sem desconto</label><br>

        <input type="radio" id="boleto" name="pagamento" value="Boleto">
        <label for="boleto">Boleto - desconto de 5%</label><br><br>

        <button type="submit">Finalizar pedido</button>
    </form>
</body>
</html>