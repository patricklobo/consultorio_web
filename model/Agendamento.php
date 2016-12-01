<?php
require_once "../model/Conexao.php";

class Agendamento
{
    private $sql = null;

    function __construct()
    {
        $this->conexao = new Conexao();
        $this->conexao->conectar();


    }


    public function cadAgendamento($agendamento)
    {

        $this->sql = "INSERT INTO agendamentos(datahora, statusagendamento, dataparaconsulta, datacriado, dataalterado, usuario_id, paciente_id, medico_id) VALUES ('$agendamento->data' ' ' '$agendamento->hora', 1, '$agendamento->data', CURRENT_TIMESTAMP , CURRENT_TIMESTAMP , 1, '$agendamento->idpaciente', '$agendamento->idmedico')";
        $this->conexao->execSQL($this->sql);

    }

    public function getAgendamento()
    {

        $this->sql = "SELECT a.id, a.datahora, p.nome AS nomepaciente, u.nome AS nomeusuario, m.nome AS nomemedico, e.nome AS nomeespecialidade, a.datacriado 
                        FROM agendamentos a, especialidade e, paciente p, usuario u, medico m 
                        WHERE p.id = a.paciente_id 
                        AND u.id = a.usuario_id 
                        AND a.medico_id = m.id 
                        AND m.especialidade_id = e.id 
                        AND a.statusagendamento=1 
                        ORDER BY a.datahora";

        $this->conexao->execSQL($this->sql);
        $lista = [];
        while ($row = $this->conexao->listarResultados()) {
            $lista[] = $row;
        }
        return $lista;


    }

    public function getAgendamentoUni($data)
    {

        $this->sql = "SELECT a.datahora, p.nome AS nomepaciente, u.nome AS nomeusuario, m.nome AS nomemedico, e.nome AS nomeespecialidade, a.datacriado 
                        FROM agendamentos a, especialidade e, paciente p, usuario u, medico m 
                        WHERE p.id = a.paciente_id 
                        AND u.id = a.usuario_id 
                        AND a.medico_id = m.id 
                        AND m.especialidade_id = e.id AND a.dataparaconsulta='$data->consultapesquisa' ORDER BY a.datahora";
        $this->conexao->execSQL($this->sql);
        $lista = [];
        while ($row = $this->conexao->listarResultados()) {
            $lista[] = $row;
        }
        return $lista;

    }

    public function execUpdateAgendamento()
    {


    }

    public function deleteAgendamento()
    {


    }

    public function countAgendamento($data)
    {
        $this->sql = "SELECT * FROM agendamentos WHERE statusagendamento=1 AND dataparaconsulta='$data->consultapesquisa'";
        $this->conexao->execSQL($this->sql);
        return $this->conexao->contarDados();
    }

    public function selectDetalhar($id){

        $this->sql = "SELECT a.id, a.datahora, m.id AS idmedico, p.nome AS nomepaciente, p.id AS idpaciente, m.nome AS nomemedico, e.nome AS nomeespecialidade, a.statusagendamento, u.nome, a.datacriado, a.dataalterado 
                        FROM agendamentos a, especialidade e, paciente p, usuario u, medico m 
                        WHERE p.id = a.paciente_id 
                        AND u.id = a.usuario_id 
                        AND a.medico_id = m.id 
                        AND m.especialidade_id = e.id 
                        AND a.id = '$id'";
        $this->conexao->execSQL($this->sql);
        $lista = [];
        while ($row = $this->conexao->listarResultados()) {
            $lista[] = $row;
        }
        return $lista;

    }

    public function agendamentoDeletar($id) {
        $this->sql = "DELETE FROM agendamentos WHERE id = '$id'";
        $this->conexao->execSQL($this->sql);

    }



}