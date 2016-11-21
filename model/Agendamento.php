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



     }

     public function deleteAgendamento(){



     }

}