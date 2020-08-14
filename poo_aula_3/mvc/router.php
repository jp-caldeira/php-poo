<?php
require 'controller/ProdutoController.php';
require 'controller/LoginController.php';
require 'controller/UsuariosController.php';
require 'controller/areaLogada.php';
/**
 * Dicas
 * 1. Criar a rota
 * 2. Criar controller e/ou método ( Você pode ter mais de uma rota ligado ao mesmo controle em métodos diferentes)
 * 3. Ver ações necessárias pro método ( Se vai utilizar view ou Model )
 * 4. Retornar a View ou Redirecionar o usuário
 */
switch ($_SERVER['REQUEST_URI']) {
    case '/produtos':
        $produtoController = new ProdutoController();
        return $produtoController->listar();
    break;

    case '/login':
        /**
         * Exibe o formulário de login vai precisar de um view e um controlador.
         */
        $loginController = new loginController();
        return $loginController->paginaLogin();

    break;

    case '/logar':
        // Trata o envio do formulário de login e redireciona o usuário para área de logado.
        $logar = new loginController();
        return $logar->verifyLogin();

    break;

    case "/usuarios":
        /**
         * Precisa de uma listagem de usuários do site, vai precisar de view model e controller
         */
        $usuarioController = new UsuarioController();
        return $usuarioController->exibirUsuarios();
        echo "Estou na página da listagem de usuários!";
    break;

    case "/arealogada":
        /**
         * Área logada, não precisa mecher é só pra validar que o login deu certo.
         */
         $usuarioLogin = new areaLogada();
         return $usuarioLogin->isLogged();
        echo "Usuário logado!";
    break;

    default:
        /**
         * Precisa de uma tela para exibir os erros, vai precisar de um controlador e uma view própria
         */
        echo "Erro, página não encontrada!";
    break;
}
