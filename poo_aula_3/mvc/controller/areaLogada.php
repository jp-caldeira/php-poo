<?php
require_once 'model/LoginModel.php';

session_start();

class areaLogada {

  public function isLogged(){
   if (isset($_SESSION['login'])){
      if ($_SESSION['login']){
        require 'view/welcome.php';
      } else {
        echo "Faça seu Login---";
        require 'view/login.php';
      }
      } else {
        echo "faça seu login";
        require 'view/login.php';
      }
   }
}

 ?>
