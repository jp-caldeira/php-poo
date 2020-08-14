<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<h1>Página de login</h1>
<form class="" action="/logar" method="post">
<label for="email">Email</label>
  <input type="email" name="email" value="">
<label for="senha">Senha</label>
  <input type="password" name='senha'>
<button type='submit'>Enviar</button>
</form>
<?php if(isset($_SESSION['msgCadastro'])){
    echo $_SESSION['msgCadastro'];
    unset($_SESSION['msgCadastro']);
} ?>
</body>
</html>
