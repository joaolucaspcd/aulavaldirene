<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pastelaria do jotta</title>
</head>

<body>

    <div style="background-color: #6495ED; padding: 35px; text-align: center;">
        <h1 style="color: white;">Pastelaria do jottqa</h1>
    </div>

    <h2 style="color: blue;">Faça seu pedido</h2>

    <form action="Exercicioa.php" method="POST">

        Nome:
        <input type="text" name="nome" placeholder="Digite seu nome">
        <br><br>

        Digite seu Endereço:
        <input type="text" name="endereco" placeholder="Digite seu endereço">
        <br><br>

        Digite seu Celular:
        <input type="text" name="celular" placeholder="Digite seu celular">
        <br><br>

        Escolha o pastel:
        <select name="pastel">
            <option value="1">Carne - R$ 8,00</option>
            <option value="2">Queijo - R$ 7,00</option>
            <option value="3">Pizza - R$ 9,00</option>
            <option value="4">Frango - R$ 8,50</option>
            <option value="5">Calabresa - R$ 9,00</option>
        </select>
        <br><br>

        Digite a quantidade:
        <input type="number" name="quantidade">
        <br><br>

        <input type="submit" value="Comprar">

    </form>

</body>
</html>