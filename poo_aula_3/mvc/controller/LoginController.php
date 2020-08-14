<?php
require_once 'model/LoginModel.php';

session_start();

class loginController {
    public function paginaLogin(){
        require 'view/login.php';
    }

    public function verifyLogin(){
        $loginEmail = $_POST['email'];
        $loginSenha = $_POST['senha'];


          $login = new login;
          $lista = $login->arrayLogin();

        foreach($lista as $users){
            $email = $users['email'];
            $arrayEmail[] = $email;
        }



      if(in_array($loginEmail, $arrayEmail)){
        $criptoPass = $lista[$loginEmail]['senha'];
        if (password_verify($loginSenha, $criptoPass)){
          echo "cadastro realizado com sucesso";
          $_SESSION['user'] = $loginEmail;
          $_SESSION['login'] = true;
          header('Location: /arealogada');
        } else {
          $_SESSION['msgCadastro'] = "senha errada";
          $_SESSION['login'] = false;
          header('Location: /login');
        }
      } else {
        echo "email não cadastrado";
        $_SESSION['login'] = false;
        require 'view/login.php';
      }
    }
}
