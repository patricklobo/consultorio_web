<?php
require_once 'Conexao.php';
class Agendamento {

  public function __construct(){
    $this->conexao =  new Conexao();
    $this->conexao->conectar();
  }

  public function getAgendamento(){
    $this->sql = "SELECT `id`, `usuario`, `paciente`, `data_hora`, `status`, `data`, `criado`, `alterado` FROM `agendamento`";
    $this->conexao->execSQL($this->sql);
    $lista = [];
    while($row = $this->conexao->listarResultados()){
      $lista[] = $row;
      }
      return $lista;
  }


  public function setAgendamento($agendamento) {
   $this->sql = "INSERT INTO `agendamento`(`usuario`, `paciente`, `data_hora`, `status`, `data`, `criado`, `alterado`) VALUES ('$agendamento->usuario', '$agendamento->paciente', '$agendamento->data_hora', '$agendamento->data', '$agendamento->criado', '$agendamento->alterado')";
   $this->conexao->execSQL($this->sql);
   return $this->conexao->getId();
   }


   public function deletar($id){
     $this->sql = "DELETE FROM agendamento WHERE '$id'=id";
     $this->conexao->execSQL($this->sql);
   }


} ?>
