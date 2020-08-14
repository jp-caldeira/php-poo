<?php

class login {
        public function arrayLogin(){
          $listaLogin = file_get_contents('json/users.json');
          $listaLogin = json_decode($listaLogin, TRUE);
          return $listaLogin;          
          }

        }

?>
