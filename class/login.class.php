<?php

  class Login{

    protected $db;

    public function __construct(){

      $db = Data::_DB();
      $this->db = $db;
    }

    public function isLoggedOn() {
      if ( isset( $_SESSION['logado'] ) ) {
        return true;
      }
      return false;
    }

    public function Login( $email, $senha ) {

      $_SESSION['logado'] = true;
      $_SESSION['id'] = 2;

    }
  }

?>
