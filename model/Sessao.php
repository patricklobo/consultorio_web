<?php
require_once 'Usuario.php';
/*
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

/**
* Description of Sessao
*
* @author patricklobo
*/
class Sessao {
  private $id;

  public function verifica() {
    if (!isset($_SESSION)) session_start();
    // if (!isset($_SESSION['id'])) {
    //   session_destroy();
      //header("Location: ?controle=usuario&acao=login");
    // } else {
    //   $_REQUEST['usuariologado'] = $this->getSessao();
    //  }
  }

  public function login($nome, $senha) {
    $usuario = new Usuario();
    $user = $usuario->login($nome, $senha);
    if (!isset($_SESSION)){
                session_start();
      if($user->id > 0){
        $_SESSION['id'] = $user->id;
        $_SESSION['nome'] = $user->nome;
        return true;
      }else{
        session_destroy();
        return false;
      }
    }
  }

  // public function login($usuario, $senha) {
  //   $usuarios = new UsuarioBD();
  //   $user = $usuarios->login($usuario, $senha);
  //   if (!isset($_SESSION))
  //                   session_start();
  //   if($user->getId() > 0){
  //     $_SESSION['id'] = $user->getId();
  //     $_SESSION['nome'] = $user->getNome();
  //     $_SESSION['nomeuser'] = $user->getNomeuser();
  //     $_SESSION['nivel'] = $user->getNivel();
  //     return true;
  //   } else {
  //     session_destroy();
  //     return false;
  //   }
  // }

  public function getSessao(){
    return $_SESSION;
  }


  public function Sair() {
      session_start();
      session_destroy();
      header("Location: ?controle=usuario&acao=login");
  }
}
