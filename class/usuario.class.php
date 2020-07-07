<?php

class usuario extends db {

  function __construct() {
    parent::__construct();
  }

  public function validaLogin($dados = array()) {
    extract($dados);
   // $re = $dados['re'];

    //$senha = sha1($senha);
    $q = $this->fetch("SELECT * FROM users WHERE email = '$email' AND senha = '$senha'");
    if ($q) {
        //session_start();
        $_SESSION['id'] = $q[0]['cod_usuario'];
        $_SESSION['logado'] = true;
        $_SESSION['nome'] = $q[0]['nome'];
        $_SESSION['acesso'] = $q[0]['acesso'];
      	//  $_SESSION['re'] = $re;
        // Se a opção "Manter-me Conectado" for ativa, cria Cookies 
        // para manter o usuário logado por 30 dias
        if (isset($cookies)) {
            $expire = time() + 60 * 60 * 24 * 30;
            setcookie("email", $email, $expire);
            setcookie("senha", $senha, $expire);
        }
        //
        return true;
    } else
        return false;
  }

}
