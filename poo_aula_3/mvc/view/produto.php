<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem Produtos</title>
</head>
<body>
    <h1>Lista de produtos!</h1>
    <ul>
    <?php foreach($lista_produtos as $produto): ?>
        <li>
            <h2><?= $produto['nome'] ?></h2>
            <p>Nota: <?= $produto['nota'] ?></p>
            <p>Ano Lançamento: <?= $produto['ano_lancamento'] ?></p>
        </li>
    <?php endforeach ?>
    </ul>
</body>
</html>