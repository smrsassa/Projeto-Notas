<?php

  class login_class{

    protected $db;

    public function __construct(){

      $db = Data::_DB();
      $this->db = $db;
    }

    public function Login($dados = array()) {
      extract($dados);

      if ( ($nome || $senha ) == "") {
        return "Nenhum valor digitado!";
      } else {
        $query = $this->db->prepare("SELECT senha FROM users WHERE nome = :nome LIMIT 1");
        $query->execute(array(":nome" => $nome));
        if ( $query->rowCount() == 0 ) {
          return "E-mail ou senha incorretos";
        } else {
          $row = $query->fetch(PDO::FETCH_OBJ);
          $pass = $row->senha;
          if ( password_verify($senha, $pass) ) {
            $iquery = $this->db->prepare("SELECT id FROM usuarios WHERE nome = :nome AND senha = :senha LIMIT 1");
            $iquery->execute(array(":nome" => $nome, ":senha" => $senha));
            $irow = $iquery->fetch(PDO::FETCH_OBJ);

            session_start();
            $better_token = md5(uniqid(rand(), true));
            $_SESSION['chave'] = $better_token;
            $k = $this->db->prepare("UPDATE usuarios SET chave = '$better_token' WHERE id = :id");
            $k->execute(array(":id" => $id));

            $_SESSION['logado'] = true;
            $_SESSION['id'] = $id;

          } else {
            return "Senha Incorreta";
          }
        }
      }
    }
  }
?>
