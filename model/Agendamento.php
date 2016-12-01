<<<<<<< HEAD
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


    public function getAgendamentoUni($id){
      $this->sql = "SELECT FROM  `agendamento` WHERE `id`='$id'";
      $this->conexao->execSQL($this->sql);
      $lista = [];
      while($row = $this->conexao->listarResultados()){
        $lista[] = $row;
      }
      return $lista;
    }
=======
<?php
require_once "../model/Conexao.php";

class Agendamento {
private $sql = null;

    function __construct()
    {
        $this->conexao = new Conexao();
        $this->conexao->conectar();


    }


     public function cadAgendamento($agendamento){

         $this->sql = "INSERT INTO agendamentos(datahora, statusagendamento, dataparaconsulta, datacriado, dataalterado, usuario_id, paciente_id) VALUES ('$agendamento->data' ' ' '$agendamento->hora', 1, '$agendamento->data', CURRENT_TIMESTAMP , CURRENT_TIMESTAMP , 1, '$agendamento->idpaciente')";
         $this->conexao->execSQL ( $this->sql );

     }

     public function getAgendamento(){

         $this->sql = "SELECT a.datahora, p.nome AS nomepaciente, u.nome AS nomeusuario, a.datacriado, a.dataalterado FROM agendamentos a, paciente p, usuario u where a.paciente_id = p.id and a.statusagendamento=1 ORDER BY a.datahora";
         $this->conexao->execSQL($this->sql);
         $lista = [];
         while ($row = $this->conexao->listarResultados()) {
             $lista[] = $row;
         }
         return $lista;


     }

     public function getAgendamentoUni($data){

         $this->sql = "SELECT a.datahora, p.nome AS nomepaciente, u.nome AS nomeusuario, a.datacriado, a.dataalterado FROM agendamentos a, paciente p, usuario u WHERE a.paciente_id = p.id AND a.dataparaconsulta='$data->consultapesquisa' ORDER BY a.datahora";
         $this->conexao->execSQL($this->sql);
         $lista = [];
         while ($row = $this->conexao->listarResultados()) {
             $lista[] = $row;
         }
         return $lista;

     }

     public function execUpdateAgendamento(){


>>>>>>> 6c401dd61aba298ca0eeb32deba86d27335b54d6

     }

<<<<<<< HEAD
    public function setAgendamento($agendamento) {
       $this->sql = "INSERT INTO `agendamento`(`usuario`, `paciente`, `data_hora`, `status`, `data`, `criado`, `alterado`) VALUES ('$agendamento->usuario', '$agendamento->paciente', '$agendamento->data_hora', '$agendamento->data', '$agendamento->criado', '$agendamento->alterado')";
       $this->conexao->execSQL($this->sql);
       return $this->conexao->getId();
    }


   public function deletar($id){
      $this->sql = "DELETE FROM agendamento WHERE '$id'=id";
      $this->conexao->execSQL($this->sql);
   }


   public function update($agendamento){
     $this->sql = "UPDATE agendamento SET usuario='$agendamento->usuario', paciente='$agendamento->paciente', data_hora='$agendamento->data_hora', status='$agendamento->status', data='$agendamento->data', alterado='$agendamento->alterado' WHERE id='$id'";
     $this->conexao->execSQL($this->sql);
   }
=======
     public function deleteAgendamento(){


>>>>>>> 6c401dd61aba298ca0eeb32deba86d27335b54d6

     }

}