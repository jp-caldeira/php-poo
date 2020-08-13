<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
</head>
<body>
    <h1>Lista de usuários cadastrados</h1>
    <div style='background-color:yellow'>
<?php foreach($listinha as $usuario){ ?>
<p><strong>Nome:</strong><?= $usuario['nome']?></p>
<p><strong>Email:</strong><?=$usuario['email']?></p>

<?php }?>
</div>

   

</body>
</html>