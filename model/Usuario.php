<?php
require_once 'Conexao.php';
class Usuario {

  public function __construct(){
   $this->conexao = new Conexao();
   $this->conexao->conectar();
 }


  public function getUsuario(){
    $this->sql = "SELECT `id`, `nome`, `email`, `senha`, `criado`, `alterado` FROM usuario";
    $this->conexao->execSQL($this->sql);
    $lista = [];
    while($row = $this->conexao->listarResultados()){
      $lista[] = $row;
      }
      return $lista;
    }


    public function setUsuario($usuario) {
     $this->sql = "INSERT INTO `usuario`(`nome`, `email`, `senha`) VALUES ('$usuario->nome', '$usuario->email', '".sha1($usuario->senha)."')";
     $this->conexao->execSQL($this->sql);
     return $this->conexao->getId();
     }


    public function getUsuarioUni($id) {
      $this->sql = "SELECT `id`, `nome`, `email`, `senha` FROM `usuario` WHERE `id` = '$id' ";
      $this->conexao->execSQL($this->sql);
      $usuario1= [];
      while ($row = $this->conexao->listarResultados()) {
         $usuario1[] = $row;
      }
      return $usuario1;
    }

    public function excluir($id){
      $this->sql = "DELETE FROM usuario WHERE id='$id'";
      $this->conexao->execSQL($this->sql);
    }

   public function update($id){
     $this->sql = "UPDATE usuario SET nome='$usuario->nome', email='$usuario->email', senha ='".sha1($usuario->senha)."', alterado='$usuario->alterado'";
     $this->conexao->execSQL($this->sql);
   }





 public function mostrarUsuario($idedit){
        $this->sql = "SELECT id, nome, senha FROM usuario WHERE id='$idedit'";
        $this->conexao->execSQL($this->sql);
        $listae = [];
        while ($row = $this->conexao->listarResultados()) {
            $listae[] = $row;
        }
        return $listae;
    }

}
?>
